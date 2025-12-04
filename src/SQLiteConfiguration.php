<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   14:09
*/


namespace Foamycastle\Config;

use Foamycastle\ConfigConfiguration;

class SQLiteConfiguration extends DoctrineConfiguration implements SQLiteSetConfiguration, SQLiteGetConfiguration
{
    public const NAME = 'sqlite_configuration';
    public const KEYS = [
        Key::DRIVER,
        Key::USER,
        Key::PASSWORD,
        Key::PATH,
        Key::IN_MEMORY
    ];
    public function __construct(?string $name = null)
    {
        parent::__construct($name ?? self::NAME);
    }
    function setDriver(?string $driver): SQLiteSetConfiguration
    {
        $this->set(Key::DRIVER, $driver);
        return $this;
    }
    function setUser(string|null $user): SQLiteSetConfiguration
    {
        $this->set(Key::USER, $user);
        return $this;
    }

    function setPassword(string|null $password): SQLiteSetConfiguration
    {
        $this->set(Key::PASSWORD, $password);
        return $this;
    }

    function setPath(string|null $path): SQLiteSetConfiguration
    {
        $this->set(Key::PATH, $path);
        return $this;
    }

    function setInMemory(bool|null $inMemory): SQLiteSetConfiguration
    {
        $this->set(Key::IN_MEMORY, $inMemory);
        return $this;
    }
    function getDriver(): ?string
    {
        return $this->get(Key::DRIVER);
    }
    function getUser(): ?string
    {
        return $this->get(Key::USER);
    }

    function getPassword(): ?string
    {
        return $this->get(Key::PASSWORD);
    }

    function getPath(): ?string
    {
        return $this->get(Key::PATH);
    }

    function getInMemory(): ?bool
    {
        return $this->get(Key::IN_MEMORY);
    }

    /**
     * @param array{
     *     driver?:string,
     *     user?:string,
     *     pass?:string,
     *     path?:string,
     *     in_memory?:bool
     * } $path
     * @return SQLiteGetConfiguration
     */
    public static function fromArray(array $path): static
    {
        /** @var SQLiteSetConfiguration $config */
        $config = new self(self::NAME);
        $config->setDriver('sqlite3');
        $config->setUser($path[Key::USER] ?? '');
        $config->setPassword($path[Key::PASSWORD] ?? '');
        $config->setPath($path[Key::PATH] ?? '');
        $config->setInMemory($path[Key::IN_MEMORY] ?? false);
        return $config;
    }
}