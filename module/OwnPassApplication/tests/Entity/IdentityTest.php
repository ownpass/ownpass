<?php
/**
 * This file is part of OwnPass. (https://github.com/ownpass/)
 *
 * @link https://github.com/ownpass/api-server for the canonical source repository
 * @copyright Copyright (c) 2016-2017 OwnPass. (https://github.com/ownpass/)
 * @license https://raw.githubusercontent.com/ownpass/api-server/master/LICENSE MIT
 */

namespace OwnPassApplicationTest\Entity;

use DateTimeInterface;
use OwnPassApplication\Entity\Account;
use OwnPassApplication\Entity\Identity;
use PHPUnit_Framework_TestCase;
use Ramsey\Uuid\UuidInterface;

class IdentityTest extends PHPUnit_Framework_TestCase
{
    private $account;

    protected function setUp()
    {
        $this->account = new Account('name', 'credential', 'email');
    }

    /**
     * @covers OwnPassApplication\Entity\Identity::__construct
     * @covers OwnPassApplication\Entity\Identity::getId
     */
    public function testGetId()
    {
        // Arrange
        $identity = new Identity($this->account, 'directory', 'identity');

        // Act
        $result = $identity->getId();

        // Assert
        $this->assertInstanceOf(UuidInterface::class, $result);
    }

    /**
     * @covers OwnPassApplication\Entity\Identity::__construct
     * @covers OwnPassApplication\Entity\Identity::getCreationDate
     */
    public function testGetCreationDate()
    {
        // Arrange
        $identity = new Identity($this->account, 'directory', 'identity');

        // Act
        $result = $identity->getCreationDate();

        // Assert
        $this->assertInstanceOf(DateTimeInterface::class, $result);
    }

    /**
     * @covers OwnPassApplication\Entity\Identity::__construct
     * @covers OwnPassApplication\Entity\Identity::getAccount
     */
    public function testGetAccount()
    {
        // Arrange
        $identity = new Identity($this->account, 'directory', 'identity');

        // Act
        $result = $identity->getAccount();

        // Assert
        $this->assertEquals($this->account, $result);
    }

    /**
     * @covers OwnPassApplication\Entity\Identity::__construct
     * @covers OwnPassApplication\Entity\Identity::getDirectory
     */
    public function testGetDirectory()
    {
        // Arrange
        $identity = new Identity($this->account, 'directory', 'identity');

        // Act
        $result = $identity->getDirectory();

        // Assert
        $this->assertEquals('directory', $result);
    }

    /**
     * @covers OwnPassApplication\Entity\Identity::setDirectory
     */
    public function testSetDirectory()
    {
        // Arrange
        $identity = new Identity($this->account, 'directory', 'identity');

        // Act
        $identity->setDirectory('other');

        // Assert
        $this->assertEquals('other', $identity->getDirectory());
    }

    /**
     * @covers OwnPassApplication\Entity\Identity::__construct
     * @covers OwnPassApplication\Entity\Identity::getIdentity
     */
    public function testGetIdentity()
    {
        // Arrange
        $identity = new Identity($this->account, 'directory', 'identity');

        // Act
        $result = $identity->getIdentity();

        // Assert
        $this->assertEquals('identity', $result);
    }

    /**
     * @covers OwnPassApplication\Entity\Identity::setIdentity
     */
    public function testSetIdentity()
    {
        // Arrange
        $identity = new Identity($this->account, 'directory', 'identity');

        // Act
        $identity->setIdentity('other');

        // Assert
        $this->assertEquals('other', $identity->getIdentity());
    }
}
