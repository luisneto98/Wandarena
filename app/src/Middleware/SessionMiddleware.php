<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 3/1/18
 * Time: 3:47 PM
 */
namespace App\Middleware;


use App\Facilitator\App\ContainerFacilitator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use RKA\Session;
use Slim\Http\Request;
use Slim\Http\Response;

class SessionMiddleware
{

    /**
     * @param Request $request
     * @param Response $response
     * @param callable $next
     *
     * @return Response
     */
    public function __invoke($request, $response, $next)
    {

        $_ci = ContainerFacilitator::getContainer();

        $session = new Session();
        $arraySession = $session->get('wandarena-session');
        if (count($arraySession) == 0) {
            if ($request->isXhr()) {
                return $response->withStatus(500, utf8_decode('Sessão expirou. Atualize a página!'));
            }

            $router = $_ci->get('router');
            return $response->withRedirect($router->pathFor('wanda.home.login'));
        }
        $response = $next($request, $response);
        return $response;
    }

}
