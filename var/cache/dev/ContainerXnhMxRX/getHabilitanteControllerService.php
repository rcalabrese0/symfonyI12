<?php

namespace ContainerXnhMxRX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabilitanteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HabilitanteController' shared autowired service.
     *
     * @return \App\Controller\HabilitanteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HabilitanteController.php';

        $container->services['App\\Controller\\HabilitanteController'] = $instance = new \App\Controller\HabilitanteController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\HabilitanteController', $container));

        return $instance;
    }
}
