<?php
/**
 * This file is part of OwnPass. (https://github.com/ownpass/)
 *
 * @link https://github.com/ownpass/api-server for the canonical source repository
 * @copyright Copyright (c) 2016-2017 OwnPass. (https://github.com/ownpass/)
 * @license https://raw.githubusercontent.com/ownpass/api-server/master/LICENSE MIT
 */

namespace OwnPassApplication\Controller\Service;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use OwnPassApplication\Controller\UserCli;
use Zend\Crypt\Password\PasswordInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class UserCliFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get(EntityManager::class);

        $crypter = $container->get(PasswordInterface::class);

        return new UserCli($entityManager, $crypter);
    }
}
