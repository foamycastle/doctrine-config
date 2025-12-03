<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   15:50
*/


namespace Foamycastle\Config;

class OCIConfiguration extends BaseConfig implements OCIGetConfiguration, OCISetConfiguration
{
    function __construct(?string $name = null)
    {
        parent::__construct($name ?? self::NAME);
    }
    function setUser(?string $user): OCISetConfiguration
    {
        $this->set(Key::USER, $user);
        return $this;
    }

    function setPassword(?string $password): OCISetConfiguration
    {
        $this->set(Key::PASSWORD, $password);
        return $this;
    }

    function setPort(?int $port): OCISetConfiguration
    {
        $this->set(Key::PORT, $port);
        return $this;
    }

    function setHost(?string $host): OCISetConfiguration
    {
        $this->set(Key::HOST, $host);
        return $this;
    }

    function setDBName(?string $dbName): OCISetConfiguration
    {
        $this->set(Key::DBNAME, $dbName);
        return $this;
    }

    function setPooled(bool $pooled = true): OCISetConfiguration
    {
        $this->set(Key::OCI_POOLED, $pooled);
        return $this;
    }

    function setConnectionString(?string $connectionString): OCISetConfiguration
    {
        $this->set(Key::OCI_CONNECT_STRING, $connectionString);
        return $this;
    }

    function setPersistent(bool $persistent = true): OCISetConfiguration
    {
        $this->set(Key::PERSISTENT, $persistent);
        return $this;
    }

    function setServiceName(?string $serviceName): OCISetConfiguration
    {
        $this->set(Key::OCI_SERVICE_NAME, $serviceName);
        return $this;
    }

    function setService(?string $service): OCISetConfiguration
    {
        $this->set(Key::OCI_SERVICE, $service);
        return $this;
    }

    function setCharset(?string $charset): OCISetConfiguration
    {
        $this->set(Key::CHARSET, $charset);
        return $this;
    }

    function setInstanceName(?string $instanceName): OCISetConfiguration
    {
        $this->set(Key::OCI_INSTANCE_NAME, $instanceName);
        return $this;
    }

    function setDriverOptions(array $driverOptions): OCISetConfiguration
    {
        $this->set(Key::DRIVER_OPTIONS, $driverOptions);
        return $this;
    }

    function getCharset(): ?string
    {
        return $this->get(Key::CHARSET);
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

    function getPooled(): ?bool
    {
        return $this->get(Key::OCI_POOLED);
    }

    function getConnectionString(): ?string
    {
        return $this->get(Key::OCI_CONNECT_STRING);
    }

    function getPersistent(): ?bool
    {
        return $this->get(Key::PERSISTENT);
    }

    function getServiceName(): ?string
    {
        return $this->get(Key::OCI_SERVICE_NAME);
    }

    function getService(): ?string
    {
        return $this->get(Key::OCI_SERVICE);
    }

    function getInstanceName(): ?string
    {
        return $this->get(Key::OCI_INSTANCE_NAME);
    }

    function getDriverOptions(): ?array
    {
        return $this->get(Key::DRIVER_OPTIONS);
    }

    /**
     * @param array{
     *     user?: string,
     *     password?: string,
     *     port?: int,
     *     host?: string,
     *     dbname?: string,
     *     pooled?: bool,
     *     charset?: string,
     *     connectionString?: string,
     *     persistent?: bool,
     *     serviceName?: string,
     *     service?: string,
     *     instanceName?: string,
     *     driverOptions?: array,
     * } $path
     * @return static
     */
    public static function fromArray(array $path): static
    {
        $instance = new static(self::NAME);
        $instance->setUser($path[Key::USER] ?? null);
        $instance->setPassword($path[Key::PASSWORD] ?? null);
        $instance->setPort($path[Key::PORT] ?? null);
        $instance->setHost($path[Key::HOST] ?? null);
        $instance->setDBName($path[Key::DBNAME] ?? null);
        $instance->setPooled($path[Key::OCI_POOLED] ?? null);
        $instance->setPersistent($path[Key::PERSISTENT] ?? null);
        $instance->setConnectionString($path[Key::OCI_CONNECT_STRING] ?? null);
        $instance->setPersistent($path[Key::PERSISTENT] ?? null);
        $instance->setServiceName($path[Key::OCI_SERVICE_NAME] ?? null);
        $instance->setService($path[Key::OCI_SERVICE] ?? null);
        $instance->setInstanceName($path[Key::OCI_INSTANCE_NAME] ?? null);
        $instance->setDriverOptions($path[Key::DRIVER_OPTIONS] ?? []);
        return $instance;
    }
}