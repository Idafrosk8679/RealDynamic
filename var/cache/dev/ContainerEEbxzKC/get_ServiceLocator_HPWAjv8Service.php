<?php

namespace ContainerEEbxzKC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HPWAjv8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hPWAjv8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hPWAjv8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AddController::index' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\MainController::about' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController::contact' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController::gallery' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController::getUsuario' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController::index' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController::indexAction' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\MainController::login' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController::logueado' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AddController:index' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\MainController:about' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController:contact' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController:gallery' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController:getUsuario' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController:index' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController:indexAction' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\MainController:login' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\MainController:logueado' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AddController::index' => '?',
            'App\\Controller\\MainController::about' => '?',
            'App\\Controller\\MainController::contact' => '?',
            'App\\Controller\\MainController::gallery' => '?',
            'App\\Controller\\MainController::getUsuario' => '?',
            'App\\Controller\\MainController::index' => '?',
            'App\\Controller\\MainController::indexAction' => '?',
            'App\\Controller\\MainController::login' => '?',
            'App\\Controller\\MainController::logueado' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AddController:index' => '?',
            'App\\Controller\\MainController:about' => '?',
            'App\\Controller\\MainController:contact' => '?',
            'App\\Controller\\MainController:gallery' => '?',
            'App\\Controller\\MainController:getUsuario' => '?',
            'App\\Controller\\MainController:index' => '?',
            'App\\Controller\\MainController:indexAction' => '?',
            'App\\Controller\\MainController:login' => '?',
            'App\\Controller\\MainController:logueado' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
