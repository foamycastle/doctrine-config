<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   14:32
*/


namespace Foamycastle\Config;

class MySQLConfiguration extends DoctrineConfiguration implements MySQLSetConfiguration, MySQLGetConfiguration
{
    public const NAME = 'mysql_configuration';
    public function __construct(?string $name = null)
    {
        parent::__construct($name ?? self::NAME);
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

    function getUnixSocket(): ?string
    {
        return $this->get(Key::UNIX_SOCKET);
    }

    function getPersistent(): ?bool
    {
        return $this->get(Key::PERSISTENT);
    }

    function getSSLKey(): ?string
    {
        return $this->get(Key::SSL_KEY);
    }

    function getSSLCert(): ?string
    {
        return $this->get(Key::SSL_CERT);
    }

    function getSSLCA(): ?string
    {
        return $this->get(Key::SSL_CA);
    }

    function getSSLCipher(): ?string
    {
        return $this->get(Key::SSL_CIPHER);
    }

    function getSSLCaPath(): ?string
    {
        return $this->get(Key::SSL_CAPATH);
    }

    function getDriverOptions(): ?int
    {
        return $this->get(Key::DRIVER_OPTIONS);
    }

    function setCharset(?string $charset=null): MySQLSetConfiguration
    {
        $this->set(Key::CHARSET, $charset);
        return $this;
    }

    function setUser(?string $user=null): MySQLSetConfiguration
    {
        $this->set(Key::USER, $user);
        return $this;
    }

    function setPassword(?string $password=null): MySQLSetConfiguration
    {
        $this->set(Key::PASSWORD, $password);
        return $this;
    }

    function setPort(?int $port=null): MySQLSetConfiguration
    {
        $this->set(Key::PORT, $port);
        return $this;
    }

    function setHost(?string $host=null): MySQLSetConfiguration
    {
        $this->set(Key::HOST, $host);
        return $this;
    }

    function setDBName(?string $dbName=null): MySQLSetConfiguration
    {
        $this->set(Key::DBNAME, $dbName);
        return $this;
    }

    function setUnixSocket(?string $unixSocket=null): MySQLSetConfiguration
    {
        $this->set(Key::UNIX_SOCKET, $unixSocket);
        return $this;
    }

    function setPersistent(bool $persistent = true): MySQLSetConfiguration
    {
        $this->set(Key::PERSISTENT, $persistent);
        return $this;
    }

    function setSSLKey(?string $sslKey=null): MySQLSetConfiguration
    {
        $this->set(Key::SSL_KEY, $sslKey);
        return $this;
    }

    function setSSLCert(?string $sslCert=null): MySQLSetConfiguration
    {
        $this->set(Key::SSL_CERT, $sslCert);
        return $this;
    }

    function setSSLCA(?string $sslCA=null): MySQLSetConfiguration
    {
        $this->set(Key::SSL_CA, $sslCA);
        return $this;
    }

    function setSSLCipher(?string $sslCipher=null): MySQLSetConfiguration
    {
        $this->set(Key::SSL_CIPHER, $sslCipher);
        return $this;
    }

    function setSSLCaPath(?string $sslCaPath=null): MySQLSetConfiguration
    {
        $this->set(Key::SSL_CAPATH, $sslCaPath);
        return $this;
    }

    function setDriverOptions(int $driverOptions=0): MySQLSetConfiguration
    {
        $this->set(Key::DRIVER_OPTIONS, $driverOptions);
        return $this;
    }


    /**
     * @param array{
     *     charset?: string,
     *     user?: string,
     *     password?: string,
     *     port?: int,
     *     host?: string,
     *     dbname?: string,
     *     unix_socket?: string,
     *     persistent?: bool,
     *     ssl_key?: string,
     *     ssl_cert?: string,
     *     ssl_ca?: string,
     *     ssl_cipher?: string,
     *     ssl_capath?: string,
     *     driver_options?: int
     * } $path
     * @return static
     */
    public static function fromArray(array $path): static
    {
        /** @var MySQLSetConfiguration $instance */
        $instance = new static(self::NAME);
        $instance->setCharset($path[Key::CHARSET] ?? null);
        $instance->setUser($path[Key::USER] ?? null);
        $instance->setPassword($path[Key::PASSWORD] ?? null);
        $instance->setPort($path[Key::PORT] ?? null);
        $instance->setHost($path[Key::HOST] ?? null);
        $instance->setDBName($path[Key::DBNAME] ?? null);
        $instance->setUnixSocket($path[Key::UNIX_SOCKET] ?? null);
        $instance->setPersistent($path[Key::PERSISTENT] ?? true);
        $instance->setSSLKey($path[Key::SSL_KEY] ?? null);
        $instance->setSSLCert($path[Key::SSL_CERT] ?? null);
        $instance->setSSLCA($path[Key::SSL_CA] ?? null);
        $instance->setSSLCipher($path[Key::SSL_CIPHER] ?? null);
        $instance->setSSLCaPath($path[Key::SSL_CAPATH] ?? null);
        $instance->setDriverOptions($path[Key::DRIVER_OPTIONS] ?? 0);
        return $instance;
    }
}