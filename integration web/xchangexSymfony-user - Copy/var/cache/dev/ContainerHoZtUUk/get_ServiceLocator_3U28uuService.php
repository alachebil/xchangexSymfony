<?php

namespace ContainerHoZtUUk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3U28uuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3_U28uu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3_U28uu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'id' => ['privates', '.errored..service_locator.3_U28uu.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.3_U28uu": it references class "App\\Entity\\Evenement" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'id' => 'App\\Entity\\Evenement',
        ]);
    }
}
