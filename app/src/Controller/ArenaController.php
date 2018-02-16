<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 2/14/18
 * Time: 11:25 PM
 */

namespace App\Controller;
use App\Mapper\Arena;
use App\Mapper\Repository\ArenaRepository;
use App\Mapper\Repository\UserRepository;
use App\Model\Consoles\CardsGame\Game\JoKenPo\Game;
use App\Model\Consoles\CardsGame\GameConsole;
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
     * @Get(name="/registrar", alias="wanda.arena.register.index")
     */
    public function registerAction(Request $request, Response $response) {

        return $this->view->render($response,"View/Arena/registerArena.twig",["admin" => true,"timeActual"=>date("Y-m-d\TH:i",time())]);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Post(name="/salvar", alias="wanda.arena.register.save")
     */
    public function saveAction(Request $request, Response $response) {
        $arena = new Arena();
        $arena->getId($request->getParam("id"));
        $arena->setConsole("App\Model\Consoles\CardsGame\GameConsole");
        $arena->setDescription($request->getParam("description"));
        $arena->setDate(new \MongoDate(strtotime($request->getParam("date"))));
        var_dump(date("Y-m-d\TH:i",strtotime($request->getParam("date"))));
        $arena->setTitle($request->getParam("title"));
        if($request->getParam("game") == "Jo-Ken-Po")
           $arena->setGame("App\Model\Consoles\CardsGame\Game\JoKenPo\Game");
        $this->_dm->persist($arena);

        $this->_dm->flush();
        $arenas = $this->_dm->getRepository(Arena::class)->findAll();
        return $this->view->render($response,"View/Arena/registerArena.twig",["admin" => true]);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/", alias="wanda.arena.control.index")
     */
    public function listAction(Request $request, Response $response) {
        $arenas = $this->_dm->getRepository(Arena::class)->findAll();
        return $this->view->render($response,"View/Arena/arenasControl.twig",["admin" => true,"arenas"=>$arenas]);
    }
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/deletar/{id}", alias="wanda.arena.control.delete")
     */
    public function deleteAction(Request $request, Response $response) {
        $id = $request->getAttribute("id");
        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($id);
        $this->_dm->remove($arena[0]);
        $this->_dm->flush();

        $router = $this->_ci->get('router');
        return $response->withRedirect($router->pathFor('wanda.arena.control.index'));

    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/alterar/{id}", alias="wanda.arena.control.change")
     */
    public function changeAction(Request $request, Response $response) {
        $id = $request->getAttribute("id");
        $arena = $this->_dm->getRepository(Arena::class)->getArenaWithId($id);

        $router = $this->_ci->get('router');
        return $this->view->render($response,"View/Arena/registerArena.twig",["admin" => true,"arena"=>$arena[0]]);

    }

}