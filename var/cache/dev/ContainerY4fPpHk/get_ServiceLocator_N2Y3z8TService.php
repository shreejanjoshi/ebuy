<?php

namespace ContainerY4fPpHk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N2Y3z8TService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n2Y3z8T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n2Y3z8T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'doctrine' => '?',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
