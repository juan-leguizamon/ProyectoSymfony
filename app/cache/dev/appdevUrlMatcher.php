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

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
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

        // servicio_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:Default:index',)), array('_route' => 'servicio_homepage'));
        }

        if (0 === strpos($pathinfo, '/aereo')) {
            // aereo
            if (rtrim($pathinfo, '/') === '/aereo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'aereo');
                }

                return array (  '_controller' => 'servicioBundle:Aereo:index',  '_route' => 'aereo',);
            }

            // aereo_show
            if (preg_match('#^/aereo/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:Aereo:show',)), array('_route' => 'aereo_show'));
            }

            // aereo_new
            if ($pathinfo === '/aereo/new') {
                return array (  '_controller' => 'servicioBundle:Aereo:new',  '_route' => 'aereo_new',);
            }

            // aereo_create
            if ($pathinfo === '/aereo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aereo_create;
                }

                return array (  '_controller' => 'servicioBundle:Aereo:create',  '_route' => 'aereo_create',);
            }
            not_aereo_create:

            // aereo_edit
            if (preg_match('#^/aereo/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:Aereo:edit',)), array('_route' => 'aereo_edit'));
            }

            // aereo_update
            if (preg_match('#^/aereo/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aereo_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:Aereo:update',)), array('_route' => 'aereo_update'));
            }
            not_aereo_update:

            // aereo_delete
            if (preg_match('#^/aereo/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aereo_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:Aereo:delete',)), array('_route' => 'aereo_delete'));
            }
            not_aereo_delete:

        }

        if (0 === strpos($pathinfo, '/destino')) {
            // destino
            if (rtrim($pathinfo, '/') === '/destino') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'destino');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\DestinatarioController::indexAction',  '_route' => 'destino',);
            }

            // destino_show
            if (preg_match('#^/destino/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\DestinatarioController::showAction',)), array('_route' => 'destino_show'));
            }

            // destino_new
            if ($pathinfo === '/destino/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\DestinatarioController::newAction',  '_route' => 'destino_new',);
            }

            // destino_create
            if ($pathinfo === '/destino/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_destino_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\DestinatarioController::createAction',  '_route' => 'destino_create',);
            }
            not_destino_create:

            // destino_edit
            if (preg_match('#^/destino/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\DestinatarioController::editAction',)), array('_route' => 'destino_edit'));
            }

            // destino_update
            if (preg_match('#^/destino/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_destino_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\DestinatarioController::updateAction',)), array('_route' => 'destino_update'));
            }
            not_destino_update:

            // destino_delete
            if (preg_match('#^/destino/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_destino_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\DestinatarioController::deleteAction',)), array('_route' => 'destino_delete'));
            }
            not_destino_delete:

        }

        if (0 === strpos($pathinfo, '/envio')) {
            // envio
            if (rtrim($pathinfo, '/') === '/envio') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'envio');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EnvioController::indexAction',  '_route' => 'envio',);
            }

            // envio_show
            if (preg_match('#^/envio/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EnvioController::showAction',)), array('_route' => 'envio_show'));
            }

            // envio_new
            if ($pathinfo === '/envio/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EnvioController::newAction',  '_route' => 'envio_new',);
            }

            // envio_create
            if ($pathinfo === '/envio/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_envio_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EnvioController::createAction',  '_route' => 'envio_create',);
            }
            not_envio_create:

            // envio_edit
            if (preg_match('#^/envio/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EnvioController::editAction',)), array('_route' => 'envio_edit'));
            }

            // envio_update
            if (preg_match('#^/envio/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_envio_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EnvioController::updateAction',)), array('_route' => 'envio_update'));
            }
            not_envio_update:

            // envio_delete
            if (preg_match('#^/envio/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_envio_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EnvioController::deleteAction',)), array('_route' => 'envio_delete'));
            }
            not_envio_delete:

        }

        if (0 === strpos($pathinfo, '/paquete')) {
            // paquete
            if (rtrim($pathinfo, '/') === '/paquete') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'paquete');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PaqueteController::indexAction',  '_route' => 'paquete',);
            }

            // paquete_show
            if (preg_match('#^/paquete/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PaqueteController::showAction',)), array('_route' => 'paquete_show'));
            }

            // paquete_new
            if ($pathinfo === '/paquete/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PaqueteController::newAction',  '_route' => 'paquete_new',);
            }

            // paquete_create
            if ($pathinfo === '/paquete/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paquete_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PaqueteController::createAction',  '_route' => 'paquete_create',);
            }
            not_paquete_create:

            // paquete_edit
            if (preg_match('#^/paquete/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PaqueteController::editAction',)), array('_route' => 'paquete_edit'));
            }

            // paquete_update
            if (preg_match('#^/paquete/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paquete_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PaqueteController::updateAction',)), array('_route' => 'paquete_update'));
            }
            not_paquete_update:

            // paquete_delete
            if (preg_match('#^/paquete/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paquete_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PaqueteController::deleteAction',)), array('_route' => 'paquete_delete'));
            }
            not_paquete_delete:

        }

        if (0 === strpos($pathinfo, '/politicas')) {
            // politica
            if (rtrim($pathinfo, '/') === '/politicas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'politica');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PoliticaCostoController::indexAction',  '_route' => 'politica',);
            }

            // politica_show
            if (preg_match('#^/politicas/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PoliticaCostoController::showAction',)), array('_route' => 'politica_show'));
            }

            // politica_new
            if ($pathinfo === '/politicas/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PoliticaCostoController::newAction',  '_route' => 'politica_new',);
            }

            // politica_create
            if ($pathinfo === '/politicas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_politica_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PoliticaCostoController::createAction',  '_route' => 'politica_create',);
            }
            not_politica_create:

            // politica_edit
            if (preg_match('#^/politicas/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PoliticaCostoController::editAction',)), array('_route' => 'politica_edit'));
            }

            // politica_update
            if (preg_match('#^/politicas/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_politica_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PoliticaCostoController::updateAction',)), array('_route' => 'politica_update'));
            }
            not_politica_update:

            // politica_delete
            if (preg_match('#^/politicas/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_politica_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\PoliticaCostoController::deleteAction',)), array('_route' => 'politica_delete'));
            }
            not_politica_delete:

        }

        if (0 === strpos($pathinfo, '/formulario')) {
            // formulario
            if (rtrim($pathinfo, '/') === '/formulario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formulario');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormularioController::indexAction',  '_route' => 'formulario',);
            }

            // formulario_show
            if (preg_match('#^/formulario/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormularioController::showAction',)), array('_route' => 'formulario_show'));
            }

            // formulario_new
            if ($pathinfo === '/formulario/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormularioController::newAction',  '_route' => 'formulario_new',);
            }

            // formulario_create
            if ($pathinfo === '/formulario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formulario_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormularioController::createAction',  '_route' => 'formulario_create',);
            }
            not_formulario_create:

            // formulario_edit
            if (preg_match('#^/formulario/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormularioController::editAction',)), array('_route' => 'formulario_edit'));
            }

            // formulario_update
            if (preg_match('#^/formulario/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formulario_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormularioController::updateAction',)), array('_route' => 'formulario_update'));
            }
            not_formulario_update:

            // formulario_delete
            if (preg_match('#^/formulario/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formulario_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormularioController::deleteAction',)), array('_route' => 'formulario_delete'));
            }
            not_formulario_delete:

        }

        if (0 === strpos($pathinfo, '/remitente')) {
            // remitente
            if (rtrim($pathinfo, '/') === '/remitente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'remitente');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\RemitenteController::indexAction',  '_route' => 'remitente',);
            }

            // remitente_show
            if (preg_match('#^/remitente/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\RemitenteController::showAction',)), array('_route' => 'remitente_show'));
            }

            // remitente_new
            if ($pathinfo === '/remitente/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\RemitenteController::newAction',  '_route' => 'remitente_new',);
            }

            // remitente_create
            if ($pathinfo === '/remitente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_remitente_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\RemitenteController::createAction',  '_route' => 'remitente_create',);
            }
            not_remitente_create:

            // remitente_edit
            if (preg_match('#^/remitente/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\RemitenteController::editAction',)), array('_route' => 'remitente_edit'));
            }

            // remitente_update
            if (preg_match('#^/remitente/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_remitente_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\RemitenteController::updateAction',)), array('_route' => 'remitente_update'));
            }
            not_remitente_update:

            // remitente_delete
            if (preg_match('#^/remitente/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_remitente_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\RemitenteController::deleteAction',)), array('_route' => 'remitente_delete'));
            }
            not_remitente_delete:

        }

        if (0 === strpos($pathinfo, '/tiporemitente')) {
            // tiporemitente
            if (rtrim($pathinfo, '/') === '/tiporemitente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tiporemitente');
                }

                return array (  '_controller' => 'servicioBundle:TipoRemitente:index',  '_route' => 'tiporemitente',);
            }

            // tiporemitente_show
            if (preg_match('#^/tiporemitente/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:TipoRemitente:show',)), array('_route' => 'tiporemitente_show'));
            }

            // tiporemitente_new
            if ($pathinfo === '/tiporemitente/new') {
                return array (  '_controller' => 'servicioBundle:TipoRemitente:new',  '_route' => 'tiporemitente_new',);
            }

            // tiporemitente_create
            if ($pathinfo === '/tiporemitente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tiporemitente_create;
                }

                return array (  '_controller' => 'servicioBundle:TipoRemitente:create',  '_route' => 'tiporemitente_create',);
            }
            not_tiporemitente_create:

            // tiporemitente_edit
            if (preg_match('#^/tiporemitente/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:TipoRemitente:edit',)), array('_route' => 'tiporemitente_edit'));
            }

            // tiporemitente_update
            if (preg_match('#^/tiporemitente/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tiporemitente_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:TipoRemitente:update',)), array('_route' => 'tiporemitente_update'));
            }
            not_tiporemitente_update:

            // tiporemitente_delete
            if (preg_match('#^/tiporemitente/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tiporemitente_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'servicioBundle:TipoRemitente:delete',)), array('_route' => 'tiporemitente_delete'));
            }
            not_tiporemitente_delete:

        }

        if (0 === strpos($pathinfo, '/mensajero')) {
            // mensajero
            if (rtrim($pathinfo, '/') === '/mensajero') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mensajero');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\MensajeroController::indexAction',  '_route' => 'mensajero',);
            }

            // mensajero_show
            if (preg_match('#^/mensajero/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\MensajeroController::showAction',)), array('_route' => 'mensajero_show'));
            }

            // mensajero_new
            if ($pathinfo === '/mensajero/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\MensajeroController::newAction',  '_route' => 'mensajero_new',);
            }

            // mensajero_create
            if ($pathinfo === '/mensajero/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mensajero_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\MensajeroController::createAction',  '_route' => 'mensajero_create',);
            }
            not_mensajero_create:

            // mensajero_edit
            if (preg_match('#^/mensajero/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\MensajeroController::editAction',)), array('_route' => 'mensajero_edit'));
            }

            // mensajero_update
            if (preg_match('#^/mensajero/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mensajero_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\MensajeroController::updateAction',)), array('_route' => 'mensajero_update'));
            }
            not_mensajero_update:

            // mensajero_delete
            if (preg_match('#^/mensajero/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mensajero_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\MensajeroController::deleteAction',)), array('_route' => 'mensajero_delete'));
            }
            not_mensajero_delete:

        }

        if (0 === strpos($pathinfo, '/formaspago')) {
            // formaspago
            if (rtrim($pathinfo, '/') === '/formaspago') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formaspago');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasPagoController::indexAction',  '_route' => 'formaspago',);
            }

            // formaspago_show
            if (preg_match('#^/formaspago/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasPagoController::showAction',)), array('_route' => 'formaspago_show'));
            }

            // formaspago_new
            if ($pathinfo === '/formaspago/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasPagoController::newAction',  '_route' => 'formaspago_new',);
            }

            // formaspago_create
            if ($pathinfo === '/formaspago/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formaspago_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasPagoController::createAction',  '_route' => 'formaspago_create',);
            }
            not_formaspago_create:

            // formaspago_edit
            if (preg_match('#^/formaspago/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasPagoController::editAction',)), array('_route' => 'formaspago_edit'));
            }

            // formaspago_update
            if (preg_match('#^/formaspago/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formaspago_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasPagoController::updateAction',)), array('_route' => 'formaspago_update'));
            }
            not_formaspago_update:

            // formaspago_delete
            if (preg_match('#^/formaspago/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formaspago_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasPagoController::deleteAction',)), array('_route' => 'formaspago_delete'));
            }
            not_formaspago_delete:

        }

        if (0 === strpos($pathinfo, '/formasenvio')) {
            // formasenvio
            if (rtrim($pathinfo, '/') === '/formasenvio') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formasenvio');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasEnvioController::indexAction',  '_route' => 'formasenvio',);
            }

            // formasenvio_show
            if (preg_match('#^/formasenvio/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasEnvioController::showAction',)), array('_route' => 'formasenvio_show'));
            }

            // formasenvio_new
            if ($pathinfo === '/formasenvio/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasEnvioController::newAction',  '_route' => 'formasenvio_new',);
            }

            // formasenvio_create
            if ($pathinfo === '/formasenvio/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formasenvio_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasEnvioController::createAction',  '_route' => 'formasenvio_create',);
            }
            not_formasenvio_create:

            // formasenvio_edit
            if (preg_match('#^/formasenvio/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasEnvioController::editAction',)), array('_route' => 'formasenvio_edit'));
            }

            // formasenvio_update
            if (preg_match('#^/formasenvio/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formasenvio_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasEnvioController::updateAction',)), array('_route' => 'formasenvio_update'));
            }
            not_formasenvio_update:

            // formasenvio_delete
            if (preg_match('#^/formasenvio/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formasenvio_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FormasEnvioController::deleteAction',)), array('_route' => 'formasenvio_delete'));
            }
            not_formasenvio_delete:

        }

        if (0 === strpos($pathinfo, '/facturacion')) {
            // facturacion
            if (rtrim($pathinfo, '/') === '/facturacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'facturacion');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FacturacionController::indexAction',  '_route' => 'facturacion',);
            }

            // facturacion_show
            if (preg_match('#^/facturacion/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FacturacionController::showAction',)), array('_route' => 'facturacion_show'));
            }

            // facturacion_new
            if ($pathinfo === '/facturacion/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FacturacionController::newAction',  '_route' => 'facturacion_new',);
            }

            // facturacion_create
            if ($pathinfo === '/facturacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_facturacion_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FacturacionController::createAction',  '_route' => 'facturacion_create',);
            }
            not_facturacion_create:

            // facturacion_edit
            if (preg_match('#^/facturacion/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FacturacionController::editAction',)), array('_route' => 'facturacion_edit'));
            }

            // facturacion_update
            if (preg_match('#^/facturacion/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_facturacion_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FacturacionController::updateAction',)), array('_route' => 'facturacion_update'));
            }
            not_facturacion_update:

            // facturacion_delete
            if (preg_match('#^/facturacion/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_facturacion_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\FacturacionController::deleteAction',)), array('_route' => 'facturacion_delete'));
            }
            not_facturacion_delete:

        }

        if (0 === strpos($pathinfo, '/estado')) {
            // estado
            if (rtrim($pathinfo, '/') === '/estado') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estado');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EstadoController::indexAction',  '_route' => 'estado',);
            }

            // estado_show
            if (preg_match('#^/estado/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EstadoController::showAction',)), array('_route' => 'estado_show'));
            }

            // estado_new
            if ($pathinfo === '/estado/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EstadoController::newAction',  '_route' => 'estado_new',);
            }

            // estado_create
            if ($pathinfo === '/estado/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_estado_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EstadoController::createAction',  '_route' => 'estado_create',);
            }
            not_estado_create:

            // estado_edit
            if (preg_match('#^/estado/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EstadoController::editAction',)), array('_route' => 'estado_edit'));
            }

            // estado_update
            if (preg_match('#^/estado/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_estado_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EstadoController::updateAction',)), array('_route' => 'estado_update'));
            }
            not_estado_update:

            // estado_delete
            if (preg_match('#^/estado/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_estado_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EstadoController::deleteAction',)), array('_route' => 'estado_delete'));
            }
            not_estado_delete:

        }

        if (0 === strpos($pathinfo, '/empresaasociada')) {
            // empresaasociada
            if (rtrim($pathinfo, '/') === '/empresaasociada') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empresaasociada');
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EmpresaAsociadaController::indexAction',  '_route' => 'empresaasociada',);
            }

            // empresaasociada_show
            if (preg_match('#^/empresaasociada/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EmpresaAsociadaController::showAction',)), array('_route' => 'empresaasociada_show'));
            }

            // empresaasociada_new
            if ($pathinfo === '/empresaasociada/new') {
                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EmpresaAsociadaController::newAction',  '_route' => 'empresaasociada_new',);
            }

            // empresaasociada_create
            if ($pathinfo === '/empresaasociada/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empresaasociada_create;
                }

                return array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EmpresaAsociadaController::createAction',  '_route' => 'empresaasociada_create',);
            }
            not_empresaasociada_create:

            // empresaasociada_edit
            if (preg_match('#^/empresaasociada/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EmpresaAsociadaController::editAction',)), array('_route' => 'empresaasociada_edit'));
            }

            // empresaasociada_update
            if (preg_match('#^/empresaasociada/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empresaasociada_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EmpresaAsociadaController::updateAction',)), array('_route' => 'empresaasociada_update'));
            }
            not_empresaasociada_update:

            // empresaasociada_delete
            if (preg_match('#^/empresaasociada/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empresaasociada_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'piloto\\servicioBundle\\Controller\\EmpresaAsociadaController::deleteAction',)), array('_route' => 'empresaasociada_delete'));
            }
            not_empresaasociada_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
