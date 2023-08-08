<?php

namespace ContainerXnhMxRX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BsKw_92Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bsKw.92' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bsKw.92'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'provincium' => ['privates', '.errored..service_locator.bsKw.92.App\\Entity\\Provincia', NULL, 'Cannot autowire service ".service_locator.bsKw.92": it needs an instance of "App\\Entity\\Provincia" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'provincium' => 'App\\Entity\\Provincia',
        ]);
    }
}
