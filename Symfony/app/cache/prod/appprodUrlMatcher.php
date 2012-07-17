<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // AcmeSepaBlogBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'AcmeSepaBlogBundle_homepage'));
        }

        // task
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::createAction',  '_route' => 'task',);
        }

        // type
        if ($pathinfo === '/type') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::typeAction',  '_route' => 'type',);
        }

        // Game1D
        if ($pathinfo === '/D1') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::D1Action',  '_route' => 'Game1D',);
        }

        // Game2D
        if ($pathinfo === '/D2') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::D2Action',  '_route' => 'Game2D',);
        }

        // Game3D
        if ($pathinfo === '/D3') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::D3Action',  '_route' => 'Game3D',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
        }

        // help
        if ($pathinfo === '/help') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::helpAction',  '_route' => 'help',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
