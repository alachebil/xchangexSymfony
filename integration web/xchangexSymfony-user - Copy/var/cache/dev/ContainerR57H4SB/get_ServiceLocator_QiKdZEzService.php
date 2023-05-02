<?php

namespace ContainerR57H4SB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QiKdZEzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qiKdZEz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qiKdZEz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clubRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'clubRepository' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
