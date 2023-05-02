<?php

namespace ContainerR57H4SB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwilioServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\TwilioService' shared autowired service.
     *
     * @return \App\Service\TwilioService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TwilioService.php';

        return $container->privates['App\\Service\\TwilioService'] = new \App\Service\TwilioService($container->getEnv('TWILIO_ACCOUNT_SID'), $container->getEnv('TWILIO_AUTH_TOKEN'));
    }
}
