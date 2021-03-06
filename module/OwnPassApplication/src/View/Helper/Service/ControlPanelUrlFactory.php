<?php
/**
 * This file is part of OwnPass. (https://github.com/ownpass/)
 *
 * @link https://github.com/ownpass/api-server for the canonical source repository
 * @copyright Copyright (c) 2016-2017 OwnPass. (https://github.com/ownpass/)
 * @license https://raw.githubusercontent.com/ownpass/api-server/master/LICENSE MIT
 */

namespace OwnPassApplication\View\Helper\Service;

use Interop\Container\ContainerInterface;
use OwnPassApplication\View\Helper\ControlPanelUrl;
use Zend\ServiceManager\Factory\FactoryInterface;

class ControlPanelUrlFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('config');

        return new ControlPanelUrl($config['ownpass_security']['control_panel_url']);
    }
}
