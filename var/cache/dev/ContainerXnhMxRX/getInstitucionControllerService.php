<?php

namespace ContainerXnhMxRX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstitucionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\InstitucionController' shared autowired service.
     *
     * @return \App\Controller\InstitucionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/InstitucionController.php';

        $container->services['App\\Controller\\InstitucionController'] = $instance = new \App\Controller\InstitucionController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\InstitucionController', $container));

        return $instance;
    }
}
