<?php

namespace ContainerFRAyIBB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6RhudBKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6RhudBK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6RhudBK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'idEchan' => ['privates', '.errored..service_locator.6RhudBK.App\\Entity\\Echange', NULL, 'Cannot autowire service ".service_locator.6RhudBK": it references class "App\\Entity\\Echange" but no such service exists.'],
            'notifier' => ['privates', 'notifier', 'getNotifierService', true],
        ], [
            'entityManager' => '?',
            'idEchan' => 'App\\Entity\\Echange',
            'notifier' => '?',
        ]);
    }
}
