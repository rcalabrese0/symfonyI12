<?php

namespace ContainerEVfwbl2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R7FAiB3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R7FAiB3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R7FAiB3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'habilitante' => ['privates', '.errored..service_locator.R7FAiB3.App\\Entity\\Habilitante', NULL, 'Cannot autowire service ".service_locator.R7FAiB3": it needs an instance of "App\\Entity\\Habilitante" but this type has been excluded in "config/services.yaml".'],
        ], [
            'habilitante' => 'App\\Entity\\Habilitante',
        ]);
    }
}
