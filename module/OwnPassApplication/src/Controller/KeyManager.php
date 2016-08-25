<?php
/**
 * This file is part of Own Pass. (https://github.com/ownpass/)
 *
 * @link https://github.com/ownpass/ownpass for the canonical source repository
 * @copyright Copyright (c) 2016-2017 Own Pass. (https://github.com/ownpass/)
 * @license https://raw.githubusercontent.com/ownpass/ownpass/master/LICENSE MIT
 */

namespace OwnPassApplication\Controller;

use OwnPassApplication\TaskService\KeyManager as KeyManagerTaskService;
use Zend\Mvc\Console\Controller\AbstractConsoleController;

class KeyManager extends AbstractConsoleController
{
    /**
     * @var KeyManagerTaskService
     */
    private $keyManager;

    public function __construct(KeyManagerTaskService $keyManager)
    {
        $this->keyManager = $keyManager;
    }

    public function generateAction()
    {
        $this->keyManager->generate();
    }

    public function removeAction()
    {
        $this->keyManager->remove();
    }
}
