<?php

namespace ContainerE9rLJoi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AkmE0pXService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.akmE0pX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.akmE0pX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'user' => ['privates', '.errored..service_locator.akmE0pX.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.akmE0pX": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'passwordHasher' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}