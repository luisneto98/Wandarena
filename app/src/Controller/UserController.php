<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 3/1/18
 * Time: 10:41 AM
 */

namespace App\Controller;
use App\Mapper\User;
use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class UserController
 * @package App\Controller
 * @Controller
 * @Router("/usuario")
 */

class UserController extends AbstractController
{
    /**
     * UserController constructor.
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
     * @Get(name="/registrar", alias="wanda.user.register" , middleware={"App\Middleware\SessionMiddleware"})
     */
    public function registerAction(Request $request, Response $response) {
        return $this->view->render($response,"View/User/registerUser.twig",["admin" => true]);
    }
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Post(name="/salvar", alias="wanda.user.save" , middleware={"App\Middleware\SessionMiddleware"})
     */
    public function testeAction(Request $request, Response $response) {
        $user = new User();
        if($request->getParam("password") != $request->getParam("confirmPassword"))
            return $this->view->render($response,"View/User/registerUser.twig",["admin" => true, "passwordinval"=>true]);

        if(count($this->_dm->getRepository(User::class)->getUserWithUsername($request->getParam("username"))) > 0)
            return $this->view->render($response,"View/User/registerUser.twig",["admin" => true, "usernameinval"=>true]);

        $user->setUsername($request->getParam("username"));
        $user->setName($request->getParam("name"));
        $user->setPassword(md5($request->getParam("password")));
        $user->setAdmin($request->getParam("typeUser"));

        $this->_dm->persist($user);
        $this->_dm->flush();

        $router = $this->_ci->get('router');
        return $response->withRedirect($router->pathFor('wanda.home.index'));
    }


}