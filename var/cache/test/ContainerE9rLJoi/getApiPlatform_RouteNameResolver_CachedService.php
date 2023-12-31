<?php

namespace ContainerE9rLJoi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_RouteNameResolver_CachedService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.route_name_resolver.cached' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'RouteNameResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'CachedRouteNameResolver.php';

        return $container->privates['api_platform.route_name_resolver.cached'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(($container->privates['api_platform.cache.route_name_resolver'] ?? $container->getApiPlatform_Cache_RouteNameResolverService()), ($container->privates['api_platform.route_name_resolver.cached.inner'] ?? $container->load('getApiPlatform_RouteNameResolver_Cached_InnerService')));
    }
}
