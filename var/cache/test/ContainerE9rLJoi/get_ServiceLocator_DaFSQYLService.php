<?php

namespace ContainerE9rLJoi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DaFSQYLService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.daFSQYL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.daFSQYL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'csrfTokenManager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'csrfTokenManager' => '?',
            'entityManager' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
