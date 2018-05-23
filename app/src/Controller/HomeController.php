<?php

namespace App\Controller;

use App\AuthAdapters\AuthAdapterUser;

use App\Facilitator\App\SessionFacilitator;
use App\Mapper\Arena;
use App\Mapper\User;
use App\Mapper\Confrontation;
use App\Model\Consoles\CardsGame\Game\JoKenPo\Game;
use App\Model\Consoles\CardsGame\GameConsole;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use SlimAuth\SlimAuthFacade;
use App\Validator\LoginFieldsValidator;

/**
 * Class HomeController
 * @package App\Controller
 * @Controller
 * @Router("/")
 */
class HomeController extends AbstractController
{
    /**
     * HomeController constructor.
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
     * @Get(name="/", alias="wanda.home.index" , middleware={"App\Middleware\SessionMiddleware"})
     */
    public function indexAction(Request $request, Response $response) {
        $router = $this->_ci->get('router');
        return $response->withRedirect($router->pathFor('wanda.home.listar'));
    }
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/login", alias="wanda.home.login")
     */
    public function loginAction(Request $request, Response $response) {
        $flash = $this->_ci->get('flash');

        $message = $flash->getMessage('return');
        $error = false;

        if($message!=NULL) $error = true;

        return $this->view->render($response,"View/login.twig",['error'=>$error,'errMessage'=>$message[0]]);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Post(name="/auth", alias="auth")
     */
    public function authenticateAction(Request $request, Response $response) {

        $inputValid = new LoginFieldsValidator();

        $arrayR = ["user" => $request->getParam("username"),
            "password" => $request->getParam("password")];

        if(!($inputValid->isValid($arrayR))) {
            $arrayMessage = $inputValid->getMessages();
            $flash = $this->_ci->get('flash');
            $flash->addMessage('return', array_shift($arrayMessage));
            $router = $this->_ci->get('router');
            return $response->withRedirect($router->pathFor('wanda.home.login'));
        }

        $session = SessionFacilitator::getSession();

        $username = $request->getParam("username");
        $password = md5($request->getParam("password"));

        $authAdapter = new AuthAdapterUser($username, $password);
        $auth = new SlimAuthFacade($authAdapter, $session);

        try {
            $auth->auth();
            if ($auth->isValid()) {
                $router = $this->_ci->get('router');
                return $response->withRedirect($router->pathFor('wanda.home.index'));
            } else {
                $flash = $this->_ci->get('flash');
                $flash->addMessage('return', 'Usuário ou senha incorretos.');

                $router = $this->_ci->get('router');

                return $response->withRedirect($router->pathFor('wanda.home.login'));
            }
        } catch (\Exception $e) {
            $flash = $this->_ci->get('flash');
            $flash->addMessage('return', 'Usuário ou senha incorretos.');

            $router = $this->_ci->get('router');
            return $response->withRedirect($router->pathFor('wanda.home.login'));
        }

    }
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/logout", alias="logout")
     */
    public function logoutAction(Request $request, Response $response) {
        SessionFacilitator::destroy();
        $router = $this->_ci->get('router');
        return $response->withRedirect($router->pathFor('wanda.home.login'));
    }


    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     * @Get(name="/listar", alias="wanda.home.listar", middleware={"App\Middleware\SessionMiddleware"})
     */
    public function listAction(ServerRequestInterface $request, ResponseInterface $response) {
        $arenas = $this->_dm->getRepository(Arena::class)->findAll();
        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserAdmin = $sessionUser["admin"];
        return $this->view->render($response,"View/Arena/arenaList.twig",["admin" => $sessionUserAdmin,"arenas"=>$arenas]);
    }
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     * @Get(name="/praticar", alias="wanda.home.practice" , middleware={"App\Middleware\SessionMiddleware"})
     */
    public function practiceAction(ServerRequestInterface $request, ResponseInterface $response) {
        $sessionUser = SessionFacilitator::getAttributeSession();
        $sessionUserAdmin = $sessionUser["admin"];
        return $this->view->render($response,"View/Practice/practice.twig",["admin" => $sessionUserAdmin]);
    }
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Post(name="/teste", alias="wanda.home.teste" , middleware={"App\Middleware\SessionMiddleware"})
     */
    public function testeAction(Request $request, Response $response) {
        $code = $request->getUploadedFiles();
       // var_dump(file_get_contents($code["code"]->file));
        $confronto = new Confrontation();
        $confronto->setPlayer1($code["code"]->file)->setPlayer2($code["code"]->file);
        $game = $confronto->start(Game::class);
        $cardsimage = json_decode(json_encode(Game::getImagesCards()));
        $gameimages = Game::getImagesPerson();
        $imagebg = Game::getImageBG();
        return $this->view->render($response,"View/Arena/cardsGamePlayer.twig",["admin" => true,"cardsimage"=>$cardsimage,
            "gameimages"=>$gameimages,"imagebg"=>$imagebg,"game"=>$game,"matchs"=>Game::getMatchs(),"rounds"=>Game::getRounds(),"qtdCards"=>Game::COUNTCARDS]);
    }


}
