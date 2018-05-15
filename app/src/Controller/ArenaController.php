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

        return $this->view->render($response,"View/Arena/registerArena.twig",["admin" => true,"timeActual"=>date("Y-m-d\TH:i",time())]);
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
        return $this->view->render($response,"View/Arena/arenasControl.twig",["admin" => true,"arenas"=>$arenas]);
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
        $id = $request->getAttribute("id");
        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($id);

        $router = $this->_ci->get('router');
        return $this->view->render($response,"View/Arena/registerArena.twig",["admin" => true,"arena"=>$arena]);

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


        if($arena->getDateUnix() <= time()){
            if(!$arena->isReady()){
                $arena->start();
                $this->_dm->flush();
            }

            return $this->view->render($response,"View/Arena/listConfrontations.twig",["admin" => true,"arena"=>$arena]);
        }


        return $this->view->render($response,"View/User/submitCode.twig",["admin" => true,"arena"=>$arena]);

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

        return $this->view->render($response,"View/Arena/cardsGamePlayer.twig",["admin" => true
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
        if(!$validator->isValid(["player"=>$file["code"],"game"=>$arena->getGame()])){
            return $this->view->render($response,"View/User/submitCode.twig",["admin" => true,"arena"=>$arena,"message"=>"Código inválido!"]);

        }
        $submit->setCode(file_get_contents($code));

        $user->addSubmit($submit);

        $arena->addSubmit($submit);

        $this->_dm->persist($submit);
        $this->_dm->flush();

        return $response->withRedirect($router->pathFor('wanda.home.index'));

    }


}