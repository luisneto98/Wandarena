<?php

namespace App\Controller;

use App\AuthAdapters\AuthAdapterUser;

use App\Facilitator\App\SessionFacilitator;
use App\Mapper\User;
use App\Mapper\Confrontation;
use App\Model\Consoles\CardsGame\Game\JoKenPo\Game;
use App\Model\Consoles\CardsGame\GameConsole;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use SlimAuth\SlimAuthFacade;

/**
 * Class HomeController
 * @package App\Controller
 * @Controller
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
        $confront = new Confrontation();
        $confront->setPlayer1(Game::BOT)
            ->setPlayer2(Game::BOT);
        var_dump($confront->start(Game::class));
        var_dump($confront->getWinner());
        return 0;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     * @Get(name="/mostrar", alias="cosmo.home.mostrar")
     */
    public function mostrarAction(ServerRequestInterface $request, ResponseInterface $response) {

        return $this->view->render($response,"View/Layout.twig",["admin" => true]);
    }

}
