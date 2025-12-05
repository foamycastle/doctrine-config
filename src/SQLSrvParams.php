<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   16:08
*/


namespace Foamycastle\Config;



use Foamycastle\Utilities\Arr;

class SQLSrvParams extends DoctrineParams implements SQLSrvGetParams, SQLSrvSetParams
{
    public const NAME = 'sqlsrv_configuration';
    public const DSN_STRING='{driver}://{user}:{password}@{host}:{port}/{dbname}';
    public const KEYS = [
        Key::DRIVER,
        Key::USER,
        Key::PASSWORD,
        Key::PORT,
        Key::HOST,
        Key::DBNAME,
        Key::DRIVER_OPTIONS
    ];
    function __construct(?string $name = null)
    {
        parent::__construct($name ?? self::NAME);
    }
    function setDriver(?string $driver): SQLSrvSetParams
    {
        $this->set(Key::DRIVER, $driver);
        return $this;
    }
    function setUser(?string $user): SQLSrvSetParams
    {
        $this->set(Key::USER, $user);
        return $this;
    }

    function setPassword(?string $password): SQLSrvSetParams
    {
        $this->set(Key::PASSWORD, $password);
        return $this;
    }

    function setPort(?int $port): SQLSrvSetParams
    {
        $this->set(Key::PORT, $port);
        return $this;
    }

    function setHost(?string $host): SQLSrvSetParams
    {
        $this->set(Key::HOST, $host);
        return $this;
    }

    function setDBName(?string $dbName): SQLSrvSetParams
    {
        $this->set(Key::DBNAME, $dbName);
        return $this;
    }

    function setDriverOptions(array $driverOptions): SQLSrvSetParams
    {
        $this->set(Key::DRIVER_OPTIONS, $driverOptions);
        return $this;
    }
    function getDriver(): ?string
    {
        return $this->get(Key::DRIVER);
    }
    function getUserName(): ?string
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

    /**
     * @param array{
     *     driver?: string,
     *     user?: string,
     *     password?: string,
     *     port?: int,
     *     host?: string,
     *     dbname?: string,
     *     driver_options?: array
     * } $path
     * @return static
     */

    public static function fromArray(array $path): static
    {
        $instance = new static(self::NAME);
        $instance->setDriver('sqlsrv');
        $instance->setUser($path[Key::USER] ?? null);
        $instance->setPassword($path[Key::PASSWORD] ?? null);
        $instance->setPort(1433 ?? null);
        $instance->setHost($path[Key::HOST] ?? null);
        $instance->setDBName($path[Key::DBNAME] ?? null);
        $instance->setDriverOptions($path[Key::DRIVER_OPTIONS] ?? []);
        return $instance;
    }

}