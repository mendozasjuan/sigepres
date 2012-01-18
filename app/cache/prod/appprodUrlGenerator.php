<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'portada' => true,
       'prestamo' => true,
       'prestamo_id' => true,
       'prestamo_new' => true,
       'persona' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getportadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getprestamoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PrestamoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/prestamo',  ),));
    }

    private function getprestamo_idRouteInfo()
    {
        return array(array (  0 => 'persona_id',), array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PrestamoController::prestamoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'persona_id',  ),  1 =>   array (    0 => 'text',    1 => '/prestamo',  ),));
    }

    private function getprestamo_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PrestamoController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/newprestamo',  ),));
    }

    private function getpersonaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Prestamo\\PrestamoBundle\\Controller\\PersonaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/persona',  ),));
    }
}
