<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 2/14/18
 * Time: 11:25 PM
 */

namespace App\Controller;
use App\Facilitator\App\SessionFacilitator;
use App\Mapper\Arena;
use App\Mapper\Confrontation;
use App\Mapper\Repository\ArenaRepository;
use App\Mapper\Repository\UserRepository;
use App\Mapper\Submit;
use App\Mapper\User;
use App\Model\Consoles\CardsGame\Game\JoKenPo\Game;
use App\Model\Consoles\CardsGame\GameConsole;
use App\Validator\CodeValidator;
use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;


/**
 * Class ArenaController
 * @package App\Controller
 * @Controller
 * @Route("/controle/arenas")
 */

class ArenaController extends AbstractController
{
    /**
     * ArenaController constructor.
     * @param ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        parent::__construct($ci);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/registrar", alias="wanda.arena.register.index", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function registerAction(Request $request, Response $response) {

        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];
        return $this->view->render($response,"View/Arena/registerArena.twig",["admin" => $sessionUserId,"timeActual"=>date("Y-m-d\TH:i",time())]);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Post(name="/salvar", alias="wanda.arena.register.save", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function saveAction(Request $request, Response $response) {

        $arena = new Arena();
        $arena->setId($request->getParam("id"));
        $arena->setDescription($request->getParam("description"));
        $arena->setDate(new \MongoDate(strtotime($request->getParam("date"))));
        var_dump(date("Y-m-d\TH:i",strtotime($request->getParam("date"))));
        $arena->setTitle($request->getParam("title"));
        $game = array("name"=>"Jo-Ken-Po","game"=>"App\Model\Consoles\CardsGame\Game\JoKenPo\Game","console"=>"App\Model\Consoles\CardsGame\GameConsole");
        if($request->getParam("game") == "Jo-Ken-Po")
           $arena->setGameInfo($game);
        $this->_dm->persist($arena);

        $this->_dm->flush();
        $router = $this->_ci->get('router');
        return $response->withRedirect($router->pathFor('wanda.arena.control.index'));
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/", alias="wanda.arena.control.index", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function listAction(Request $request, Response $response) {
        $arenas = $this->_dm->getRepository(Arena::class)->findAll();
        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];;
        return $this->view->render($response,"View/Arena/arenasControl.twig",["admin" => $sessionUserId,"arenas"=>$arenas]);
    }
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/deletar/{id}", alias="wanda.arena.control.delete", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function deleteAction(Request $request, Response $response) {
        $id = $request->getAttribute("id");
        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($id);
        $this->_dm->remove($arena);
        $this->_dm->flush();

        $router = $this->_ci->get('router');
        return $response->withRedirect($router->pathFor('wanda.arena.control.index'));

    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/alterar/{id}", alias="wanda.arena.control.change", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function changeAction(Request $request, Response $response) {
        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];
        $id = $request->getAttribute("id");
        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($id);

        $router = $this->_ci->get('router');
        return $this->view->render($response,"View/Arena/registerArena.twig",["admin" => $sessionUserId,"arena"=>$arena]);

    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/envio/{id}", alias="wanda.arena.submit", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function submitAction(Request $request, Response $response) {
        $id = $request->getAttribute("id");
        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($id);
        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];

        if($arena->getDateUnix() <= time()){
            if(!$arena->isReady()){
                $arena->start();
                $this->_dm->flush();
            }

            return $this->view->render($response,"View/Arena/listConfrontations.twig",["admin" => $sessionUserId,"arena"=>$arena]);
        }


        return $this->view->render($response,"View/User/submitCode.twig",["admin" => $sessionUserId,"arena"=>$arena]);

    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/tocador/{idArena}/{idConfrontation}", alias="wanda.arena.play", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function playConfrontationAction(Request $request, Response $response) {

        $idArena = $request->getAttribute("idArena");
        $idConfrontation = $request->getAttribute("idConfrontation");

        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($idArena);
        $confrontation = $this->_dm->getRepository(Confrontation::class)->getConfrontationWithId($idConfrontation);

        $game = $confrontation->getlogJson();

        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];
        return $this->view->render($response,"View/Arena/cardsGamePlayer.twig",["admin" => $sessionUserId
            ,"gameinfo"=>$arena->getGame()::getGameInfo(),"game"=>$game,"confrontation"=>$confrontation]);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Post(name="/envio/salvar/{id}", alias="wanda.arena.submit.save", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function saveSubmitAction(Request $request, Response $response) {
        $id = $request->getAttribute("id");
        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($id);
        $router = $this->_ci->get('router');
        if($arena->getDateUnix() <= time()){
            return $response->withRedirect($router->pathFor('wanda.arena.submit'));
        }

        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];

        $user = $this->_dm->getRepository(User::class)->find($sessionUserId);

        $submit = new Submit();
        $submit->setUser($user);
        $submit->setNickname($request->getParam("nickname"));
        $file = $request->getUploadedFiles();
        $code = $file["code"]->file;
        $validator = new CodeValidator();
        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];
        if(!$validator->isValid(["player"=>$file["code"],"game"=>$arena->getGame()])){
            return $this->view->render($response,"View/User/submitCode.twig",["admin" => $sessionUserId,"arena"=>$arena,"message"=>"Código inválido!"]);

        }
        $submit->setCode(file_get_contents($code));

        $user->addSubmit($submit);

        $arena->addSubmit($submit);

        $this->_dm->persist($submit);
        $this->_dm->flush();

        return $response->withRedirect($router->pathFor('wanda.home.index'));

    }
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Post(name="/praticar", alias="wanda.pratice", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function savePraticeAction(Request $request, Response $response) {

        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserId = $sessionUser["id"];

        $user = $this->_dm->getRepository(User::class)->find($sessionUserId);

        $confrontation = new Confrontation();

        $submit1 = new Submit();
        $submit1->setUser($user);
        $submit1->setNickname("player1");
        $submit2 = new Submit();
        $submit2->setUser($user);
        $submit2->setNickname("player2");
        $file = $request->getUploadedFiles();
        $code1 = $file["code1"]->file;
        $code2 = $file["code2"]->file;
        $validator = new CodeValidator();
        if($file["code1"] != NULL && $validator->isValid(["player"=>$file["code1"],"game"=>"App\Model\Consoles\CardsGame\Game\JoKenPo\Game"])){
            $submit1->setCode(file_get_contents($code1));
            $confrontation->setPlayer1($submit1);
            $this->_dm->persist($submit1);
            $user->addSubmit($submit1);
        }else
            $confrontation->setPlayer1(NULL);
        if($file["code2"] != NULL && $validator->isValid(["player"=>$file["code2"],"game"=>"App\Model\Consoles\CardsGame\Game\JoKenPo\Game"])){
            $submit2->setCode(file_get_contents($code2));
            $confrontation->setPlayer2($submit2);
            $this->_dm->persist($submit2);
            $user->addSubmit($submit2);

        }else
            $confrontation->setPlayer2(NULL);

        $confrontation->start("App\Model\Consoles\CardsGame\Game\JoKenPo\Game");

        $this->_dm->persist($confrontation);




        $this->_dm->flush();
        $router = $this->_ci->get('router');
        return $this->view->render($response,"View/Arena/cardsGamePlayer.twig",["admin" => $sessionUserId
            ,"gameinfo"=>Game::getGameInfo(),"game"=>$confrontation->getLogJson(),"confrontation"=>$confrontation]);

    }



}