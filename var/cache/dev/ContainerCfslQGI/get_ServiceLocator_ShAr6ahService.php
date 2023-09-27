<?php

namespace ContainerCfslQGI;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ShAr6ahService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ShAr6ah' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ShAr6ah'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'todoRepository' => ['privates', 'App\\Repository\\TodoRepository', 'getTodoRepositoryService', true],
        ], [
            'authenticationUtils' => '?',
            'em' => '?',
            'todoRepository' => 'App\\Repository\\TodoRepository',
        ]);
    }
}