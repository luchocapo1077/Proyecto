<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _demo_map
        if ($pathinfo === '/demo/map') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::mapAction',  '_route' => '_demo_map',);
        }

        // _demo_mapFilter
        if (0 === strpos($pathinfo, '/demo/mapFilter') && preg_match('#^/demo/mapFilter/(?<map>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::mapFilterAction',)), array('_route' => '_demo_mapFilter'));
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // proyecto_extension_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'proyecto_extension_homepage'));
        }

        if (0 === strpos($pathinfo, '/area')) {
            // area
            if (rtrim($pathinfo, '/') === '/area') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'area');
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\AreaController::indexAction',  '_route' => 'area',);
            }

            // area_show
            if (preg_match('#^/area/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\AreaController::showAction',)), array('_route' => 'area_show'));
            }

            // area_new
            if ($pathinfo === '/area/new') {
                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\AreaController::newAction',  '_route' => 'area_new',);
            }

            // area_create
            if ($pathinfo === '/area/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_area_create;
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\AreaController::createAction',  '_route' => 'area_create',);
            }
            not_area_create:

            // area_edit
            if (preg_match('#^/area/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\AreaController::editAction',)), array('_route' => 'area_edit'));
            }

            // area_update
            if (preg_match('#^/area/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_area_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\AreaController::updateAction',)), array('_route' => 'area_update'));
            }
            not_area_update:

            // area_delete
            if (preg_match('#^/area/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_area_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\AreaController::deleteAction',)), array('_route' => 'area_delete'));
            }
            not_area_delete:

        }

        if (0 === strpos($pathinfo, '/extension')) {
            // extension
            if (rtrim($pathinfo, '/') === '/extension') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'extension');
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ExtensionController::indexAction',  '_route' => 'extension',);
            }

            // extension_show
            if (preg_match('#^/extension/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ExtensionController::showAction',)), array('_route' => 'extension_show'));
            }

            // extension_new
            if ($pathinfo === '/extension/new') {
                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ExtensionController::newAction',  '_route' => 'extension_new',);
            }

            // extension_create
            if ($pathinfo === '/extension/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_extension_create;
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ExtensionController::createAction',  '_route' => 'extension_create',);
            }
            not_extension_create:

            // extension_edit
            if (preg_match('#^/extension/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ExtensionController::editAction',)), array('_route' => 'extension_edit'));
            }

            // extension_update
            if (preg_match('#^/extension/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_extension_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ExtensionController::updateAction',)), array('_route' => 'extension_update'));
            }
            not_extension_update:

            // extension_delete
            if (preg_match('#^/extension/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_extension_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ExtensionController::deleteAction',)), array('_route' => 'extension_delete'));
            }
            not_extension_delete:

        }

        if (0 === strpos($pathinfo, '/lugar')) {
            // lugar
            if (rtrim($pathinfo, '/') === '/lugar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lugar');
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\LugarController::indexAction',  '_route' => 'lugar',);
            }

            // lugar_show
            if (preg_match('#^/lugar/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\LugarController::showAction',)), array('_route' => 'lugar_show'));
            }

            // lugar_new
            if ($pathinfo === '/lugar/new') {
                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\LugarController::newAction',  '_route' => 'lugar_new',);
            }

            // lugar_create
            if ($pathinfo === '/lugar/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lugar_create;
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\LugarController::createAction',  '_route' => 'lugar_create',);
            }
            not_lugar_create:

            // lugar_edit
            if (preg_match('#^/lugar/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\LugarController::editAction',)), array('_route' => 'lugar_edit'));
            }

            // lugar_update
            if (preg_match('#^/lugar/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lugar_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\LugarController::updateAction',)), array('_route' => 'lugar_update'));
            }
            not_lugar_update:

            // lugar_delete
            if (preg_match('#^/lugar/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lugar_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\LugarController::deleteAction',)), array('_route' => 'lugar_delete'));
            }
            not_lugar_delete:

        }

        if (0 === strpos($pathinfo, '/periodo')) {
            // periodo
            if (rtrim($pathinfo, '/') === '/periodo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'periodo');
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\PeriodoController::indexAction',  '_route' => 'periodo',);
            }

            // periodo_show
            if (preg_match('#^/periodo/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\PeriodoController::showAction',)), array('_route' => 'periodo_show'));
            }

            // periodo_new
            if ($pathinfo === '/periodo/new') {
                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\PeriodoController::newAction',  '_route' => 'periodo_new',);
            }

            // periodo_create
            if ($pathinfo === '/periodo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_periodo_create;
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\PeriodoController::createAction',  '_route' => 'periodo_create',);
            }
            not_periodo_create:

            // periodo_edit
            if (preg_match('#^/periodo/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\PeriodoController::editAction',)), array('_route' => 'periodo_edit'));
            }

            // periodo_update
            if (preg_match('#^/periodo/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_periodo_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\PeriodoController::updateAction',)), array('_route' => 'periodo_update'));
            }
            not_periodo_update:

            // periodo_delete
            if (preg_match('#^/periodo/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_periodo_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\PeriodoController::deleteAction',)), array('_route' => 'periodo_delete'));
            }
            not_periodo_delete:

        }

        if (0 === strpos($pathinfo, '/proyecto')) {
            // proyecto
            if (rtrim($pathinfo, '/') === '/proyecto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proyecto');
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::indexAction',  '_route' => 'proyecto',);
            }

            // proyecto_show
            if (preg_match('#^/proyecto/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::showAction',)), array('_route' => 'proyecto_show'));
            }

            // proyecto_new
            if ($pathinfo === '/proyecto/new') {
                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::newAction',  '_route' => 'proyecto_new',);
            }

            // proyecto_create
            if ($pathinfo === '/proyecto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_create;
                }

                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::createAction',  '_route' => 'proyecto_create',);
            }
            not_proyecto_create:

            // proyecto_edit
            if (preg_match('#^/proyecto/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::editAction',)), array('_route' => 'proyecto_edit'));
            }

            // proyecto_update
            if (preg_match('#^/proyecto/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::updateAction',)), array('_route' => 'proyecto_update'));
            }
            not_proyecto_update:

            // proyecto_delete
            if (preg_match('#^/proyecto/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::deleteAction',)), array('_route' => 'proyecto_delete'));
            }
            not_proyecto_delete:

            // proyecto_map
            if ($pathinfo === '/proyecto/map') {
                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::mapAction',  '_route' => 'proyecto_map',);
            }

            // proyecto_mapFilter
            if ($pathinfo === '/proyecto/map/filter') {
                return array (  '_controller' => 'Proyecto\\ExtensionBundle\\Controller\\ProyectoController::mapFilterAction',  '_route' => 'proyecto_mapFilter',);
            }

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
