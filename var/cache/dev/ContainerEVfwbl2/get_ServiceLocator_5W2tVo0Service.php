<?php

namespace ContainerEVfwbl2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5W2tVo0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5W2tVo0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5W2tVo0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'pai' => ['privates', '.errored..service_locator.5W2tVo0.App\\Entity\\Pais', NULL, 'Cannot autowire service ".service_locator.5W2tVo0": it needs an instance of "App\\Entity\\Pais" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'pai' => 'App\\Entity\\Pais',
        ]);
    }
}
