<?php

namespace ContainerR57H4SB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyNamerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Vich\UploaderBundle\Naming\PropertyNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'NamerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'Polyfill'.\DIRECTORY_SEPARATOR.'FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'PropertyNamer.php';

        return $container->services['Vich\\UploaderBundle\\Naming\\PropertyNamer'] = new \Vich\UploaderBundle\Naming\PropertyNamer(($container->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $container->load('getTransliteratorService')));
    }
}
