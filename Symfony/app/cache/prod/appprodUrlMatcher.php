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

        // Selection
        if ($pathinfo === '/3D') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::play3DAction',  '_route' => 'Selection',);
        }

        // Selection2D
        if ($pathinfo === '/2D') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::play2DAction',  '_route' => 'Selection2D',);
        }

        // Selection1D
        if ($pathinfo === '/1D') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::play1DAction',  '_route' => 'Selection1D',);
        }

        // Records
        if ($pathinfo === '/records') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::TopRecordsAction',  '_route' => 'Records',);
        }

        // Test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::helloAction',  '_route' => 'Test',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
