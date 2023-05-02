<?php

namespace ContainerR57H4SB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_Channel_PushService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.channel.push' shared service.
     *
     * @return \Symfony\Component\Notifier\Channel\PushChannel
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'ChannelInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'AbstractChannel.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'PushChannel.php';

        $a = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->privates['notifier.channel.push'])) {
            return $container->privates['notifier.channel.push'];
        }

        return $container->privates['notifier.channel.push'] = new \Symfony\Component\Notifier\Channel\PushChannel(NULL, $a);
    }
}
