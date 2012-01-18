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

        // portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }
            return array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'portada',);
        }

        // prestamo
        if ($pathinfo === '/prestamo') {
            return array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PrestamoController::indexAction',  '_route' => 'prestamo',);
        }

        // prestamo_id
        if (0 === strpos($pathinfo, '/prestamo') && preg_match('#^/prestamo/(?P<persona_id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PrestamoController::prestamoAction',)), array('_route' => 'prestamo_id'));
        }

        // prestamo_new
        if ($pathinfo === '/newprestamo') {
            return array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PrestamoController::newAction',  '_route' => 'prestamo_new',);
        }

        // persona
        if ($pathinfo === '/persona') {
            return array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PersonaController::indexAction',  '_route' => 'persona',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
