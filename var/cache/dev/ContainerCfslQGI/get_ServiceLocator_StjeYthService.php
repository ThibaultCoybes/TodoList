<?php

namespace ContainerCfslQGI;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_StjeYthService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.stjeYth' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.stjeYth'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TodoController::delete' => ['privates', '.service_locator.df3OfTW', 'get_ServiceLocator_Df3OfTWService', true],
            'App\\Controller\\TodoController::edit' => ['privates', '.service_locator.df3OfTW', 'get_ServiceLocator_Df3OfTWService', true],
            'App\\Controller\\TodoController::index' => ['privates', '.service_locator.ShAr6ah', 'get_ServiceLocator_ShAr6ahService', true],
            'App\\Controller\\TodoController::new' => ['privates', '.service_locator.OHLk6_9', 'get_ServiceLocator_OHLk69Service', true],
            'App\\Controller\\TodoController::show' => ['privates', '.service_locator.IWR2fbh', 'get_ServiceLocator_IWR2fbhService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.l8nzxEW', 'get_ServiceLocator_L8nzxEWService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TodoController:delete' => ['privates', '.service_locator.df3OfTW', 'get_ServiceLocator_Df3OfTWService', true],
            'App\\Controller\\TodoController:edit' => ['privates', '.service_locator.df3OfTW', 'get_ServiceLocator_Df3OfTWService', true],
            'App\\Controller\\TodoController:index' => ['privates', '.service_locator.ShAr6ah', 'get_ServiceLocator_ShAr6ahService', true],
            'App\\Controller\\TodoController:new' => ['privates', '.service_locator.OHLk6_9', 'get_ServiceLocator_OHLk69Service', true],
            'App\\Controller\\TodoController:show' => ['privates', '.service_locator.IWR2fbh', 'get_ServiceLocator_IWR2fbhService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.l8nzxEW', 'get_ServiceLocator_L8nzxEWService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TodoController::delete' => '?',
            'App\\Controller\\TodoController::edit' => '?',
            'App\\Controller\\TodoController::index' => '?',
            'App\\Controller\\TodoController::new' => '?',
            'App\\Controller\\TodoController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TodoController:delete' => '?',
            'App\\Controller\\TodoController:edit' => '?',
            'App\\Controller\\TodoController:index' => '?',
            'App\\Controller\\TodoController:new' => '?',
            'App\\Controller\\TodoController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
