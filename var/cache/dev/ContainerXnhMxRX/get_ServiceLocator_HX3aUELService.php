<?php

namespace ContainerXnhMxRX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HX3aUELService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HX3aUEL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HX3aUEL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'titulo' => ['privates', '.errored..service_locator.HX3aUEL.App\\Entity\\Titulo', NULL, 'Cannot autowire service ".service_locator.HX3aUEL": it needs an instance of "App\\Entity\\Titulo" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'titulo' => 'App\\Entity\\Titulo',
        ]);
    }
}
