<?php

namespace ContainerCx6lvOm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DQANm3wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DQANm3w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DQANm3w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reduction' => ['privates', '.errored..service_locator.DQANm3w.App\\Entity\\Reduction', NULL, 'Cannot autowire service ".service_locator.DQANm3w": it references class "App\\Entity\\Reduction" but no such service exists.'],
        ], [
            'reduction' => 'App\\Entity\\Reduction',
        ]);
    }
}
