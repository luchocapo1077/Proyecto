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
        $pathinfo = rawurldecode($pathinfo);

        // proyecto_extension_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'proyecto_extension_homepage'));
        }

        // mdw_demo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MDW\\DemoBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'mdw_demo_homepage'));
        }

        // articulo_listar
        if ($pathinfo === '/articulos/listar') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\ArticulosController::listarAction',  '_route' => 'articulo_listar',);
        }

        // articulo_crear
        if ($pathinfo === '/articulos/crear') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\ArticulosController::crearAction',  '_route' => 'articulo_crear',);
        }

        // articulo_editar
        if (0 === strpos($pathinfo, '/articulos/editar') && preg_match('#^/articulos/editar/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MDW\\DemoBundle\\Controller\\ArticulosController::editarAction',)), array('_route' => 'articulo_editar'));
        }

        // articulo_visualizar
        if (0 === strpos($pathinfo, '/articulos/visualizar') && preg_match('#^/articulos/visualizar/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MDW\\DemoBundle\\Controller\\ArticulosController::visualizarAction',)), array('_route' => 'articulo_visualizar'));
        }

        // articulo_borrar
        if (0 === strpos($pathinfo, '/articulos/borrar') && preg_match('#^/articulos/borrar/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MDW\\DemoBundle\\Controller\\ArticulosController::borrarAction',)), array('_route' => 'articulo_borrar'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
