<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   16:14
*/


namespace Foamycastle\Config;

class IBMDB2Configuration extends DoctrineConfiguration implements IBMDB2GetConfiguration, IBMDB2SetConfiguration
{
    public const NAME = 'ibmdb2_configuration';
    public const KEYS = [
        Key::DRIVER,
        Key::USER,
        Key::PASSWORD,
        Key::PORT,
        Key::HOST,
        Key::DBNAME,
        Key::DRIVER_OPTIONS,
        Key::PERSISTENT
    ];
    public function __construct(?string $name = null)
    {
        parent::__construct($name ?? self::NAME);
    }
    function setDriver(?string $driver): IBMDB2SetConfiguration
    {
        $this->set(Key::DRIVER, $driver);
        return $this;
    }
    function setUser(?string $user): IBMDB2SetConfiguration
    {
        $this->set(Key::USER, $user);
        return $this;
    }

    function setPassword(?string $password): IBMDB2SetConfiguration
    {
        $this->set(Key::PASSWORD, $password);
        return $this;
    }

    function setPort(?int $port): IBMDB2SetConfiguration
    {
        $this->set(Key::PORT, $port);
        return $this;
    }

    function setHost(?string $host): IBMDB2SetConfiguration
    {
        $this->set(Key::HOST, $host);
        return $this;
    }

    function setDBName(?string $dbName): IBMDB2SetConfiguration
    {
        $this->set(Key::DBNAME, $dbName);
        return $this;
    }

    function setDriverOptions(array $driverOptions): IBMDB2SetConfiguration
    {
        $this->set(Key::DRIVER_OPTIONS, $driverOptions);
        return $this;
    }

    function setPersistent(bool $persistent = true): IBMDB2SetConfiguration
    {
        $this->set(Key::PERSISTENT, $persistent);
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

    function getPort(): ?int
    {
        return $this->get(Key::PORT);
    }

    function getHost(): ?string
    {
        return $this->get(Key::HOST);
    }

    function getDBName(): ?string
    {
        return $this->get(Key::DBNAME);
    }

    function getDriverOptions(): array
    {
        return $this->get(Key::DRIVER_OPTIONS);
    }

    function getPersistent(): ?bool
    {
        return $this->get(Key::PERSISTENT);
    }

    /**
     * @param array{
     *     driver?: string,
     *     user?: string,
     *     password?: string,
     *     port?: int,
     *     host?: string,
     *     dbname?: string,
     *     driverOptions?: array,
     *     persistent?: bool
     * } $path
     * @return static
     */
    public static function fromArray(array $path): static
    {
        $instance = new static(self::NAME);
        $instance->setDriver($path[Key::DRIVER] ?? null);
        $instance->setUser($path[Key::USER] ?? null);
        $instance->setPassword($path[Key::PASSWORD] ?? null);
        $instance->setPort($path[Key::PORT] ?? null);
        $instance->setHost($path[Key::HOST] ?? null);
        $instance->setDBName($path[Key::DBNAME] ?? null);
        $instance->setDriverOptions($path[Key::DRIVER_OPTIONS] ?? []);
        $instance->setPersistent($path[Key::PERSISTENT] ?? null);
        return $instance;
    }



}