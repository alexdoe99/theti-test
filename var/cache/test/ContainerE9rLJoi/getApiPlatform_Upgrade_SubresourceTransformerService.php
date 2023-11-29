<?php

namespace ContainerE9rLJoi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Upgrade_SubresourceTransformerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.upgrade.subresource_transformer' shared service.
     *
     * @return \ApiPlatform\Core\Upgrade\SubresourceTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'SubresourceTransformer.php';

        return $container->privates['api_platform.upgrade.subresource_transformer'] = new \ApiPlatform\Core\Upgrade\SubresourceTransformer();
    }
}