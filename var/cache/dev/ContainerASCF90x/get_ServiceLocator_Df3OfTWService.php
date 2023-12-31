<?php

namespace ContainerASCF90x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Df3OfTWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.df3OfTW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.df3OfTW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'todo' => ['privates', '.errored..service_locator.df3OfTW.App\\Entity\\Todo', NULL, 'Cannot autowire service ".service_locator.df3OfTW": it needs an instance of "App\\Entity\\Todo" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'todo' => 'App\\Entity\\Todo',
        ]);
    }
}
