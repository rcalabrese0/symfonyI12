<?php

namespace ContainerEVfwbl2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaisControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PaisController' shared autowired service.
     *
     * @return \App\Controller\PaisController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PaisController.php';

        $container->services['App\\Controller\\PaisController'] = $instance = new \App\Controller\PaisController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PaisController', $container));

        return $instance;
    }
}
