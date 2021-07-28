<?php

namespace ContainerF5A8xHc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_SystemService extends App_KernelDevlsDebugContainer
{
    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('14UxI5rKow', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools'), ($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService()));
    }
}
