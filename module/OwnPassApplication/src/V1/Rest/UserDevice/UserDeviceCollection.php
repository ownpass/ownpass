<?php
/**
 * This file is part of OwnPass. (https://github.com/ownpass/)
 *
 * @link https://github.com/ownpass/api-server for the canonical source repository
 * @copyright Copyright (c) 2016-2017 OwnPass. (https://github.com/ownpass/)
 * @license https://raw.githubusercontent.com/ownpass/api-server/master/LICENSE MIT
 */

namespace OwnPassApplication\V1\Rest\UserDevice;

use OwnPassApplication\Paginator\AbstractProxy;

class UserDeviceCollection extends AbstractProxy
{
    protected function build($key, $value)
    {
        return new UserDeviceEntity($value);
    }
}
