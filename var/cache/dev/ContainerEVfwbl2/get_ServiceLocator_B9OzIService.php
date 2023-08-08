<?php

namespace ContainerEVfwbl2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B9OzIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B9Oz__i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B9Oz__i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'habilitante' => ['privates', '.errored..service_locator.B9Oz__i.App\\Entity\\Habilitante', NULL, 'Cannot autowire service ".service_locator.B9Oz__i": it needs an instance of "App\\Entity\\Habilitante" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'habilitante' => 'App\\Entity\\Habilitante',
        ]);
    }
}
