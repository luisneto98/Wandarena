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
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     * @Get(name="/", alias="cosmo.home.inicio")
     */
    public function indexAction(ServerRequestInterface $request, ResponseInterface $response) {
        $confronto = new Confrontation();
        $confronto->setPlayer1(Game::getBot())->setPlayer2(Game::getBot());
        $game = $confronto->start(Game::class);
        $cardsimage = json_decode(json_encode(Game::getImagesCards()));
        $gameimages = Game::getImagesPerson();
        $imagebg = Game::getImageBG();
        var_dump($cardsimage);
        return $this->view->render($response,"View/Arena/cardsGamePlayer.twig",["admin" => true,"cardsimage"=>$cardsimage,
            "gameimages"=>$gameimages,"imagebg"=>$imagebg,"game"=>$game,"matchs"=>Game::getMatchs(),"rounds"=>Game::getRounds(),"qtdCards"=>Game::COUNTCARDS]);
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     * @Get(name="/listar", alias="wanda.home.index")
     */
    public function listAction(ServerRequestInterface $request, ResponseInterface $response) {
        $arenas = $this->_dm->getRepository(Arena::class)->findAll();
        return $this->view->render($response,"View/Arena/arenaList.twig",["admin" => true,"arenas"=>$arenas]);
    }
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     * @Get(name="/praticar", alias="wanda.home.practice")
     */
    public function practiceAction(ServerRequestInterface $request, ResponseInterface $response) {
        return $this->view->render($response,"View/Practice/practice.twig",["admin" => true]);
    }


}
