<?php

namespace ContainerCx6lvOm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xit_EQsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xit.eQs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xit.eQs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.xit.eQs.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.xit.eQs": it references class "App\\Entity\\Produit" but no such service exists.'],
            'rp' => ['privates', 'App\\Repository\\ReductionRepository', 'getReductionRepositoryService', true],
        ], [
            'produit' => 'App\\Entity\\Produit',
            'rp' => 'App\\Repository\\ReductionRepository',
        ]);
    }
}
