<?php

namespace ContainerNNEH38U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_UserPasswordHashService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.command.user_password_hash' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.command.user_password_hash'] = $instance = new \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand(($container->privates['security.password_hasher_factory'] ?? ($container->privates['security.password_hasher_factory'] = new \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory([]))), []);

        $instance->setName('security:hash-password');
        $instance->setDescription('Hash a user password');

        return $instance;
    }
}
