<?php
namespace App\Controller;


use Doctrine\ODM\MongoDB\DocumentManager;
use Interop\Container\ContainerInterface;
use RKA\Session;
use Slim\Views\Twig;

abstract class AbstractController
{
    /**
     * @var DocumentManager
     */
    protected $_dm;

    /**
     * @var ContainerInterface $_ci
     */
    protected $_ci;

    /**
     * @var Session
     */
    protected $session;

    /**
     * @var Twig
     */
    protected $view;

    /**
     * AbstractAction constructor.
     * @param ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        $this->_ci = $ci;
        $this->_dm = $ci->get('database');
        $this->session = $this->_ci->get('session');
        $this->view = $this->_ci->get('view');
    }
}
