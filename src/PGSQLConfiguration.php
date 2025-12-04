<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   15:28
*/


namespace Foamycastle\Config;

use Foamycastle\Config\BaseConfig;

class PGSQLConfiguration extends DoctrineConfiguration implements PGSQLSetConfiguration, PGSQLGetConfiguration
{
    public const NAME = 'pgsql_configuration';
    public const KEYS = [
        Key::DRIVER,
        Key::USER,
        Key::PASSWORD,
        Key::PORT,
        Key::HOST,
        Key::DBNAME,
        Key::PG_SSL_MODE,
        Key::PG_APP_NAME,
        Key::PG_SSL_KEY,
        Key::PG_SSL_CERT,
        Key::PG_SSL_CRL,
        Key::PG_SSL_ROOTCERT,
        Key::PERSISTENT,
        Key::PG_GSS_ENCMODE,
        Key::CHARSET
    ];
    public function __construct(?string $name = null)
    {
        parent::__construct($name ?? self::NAME);
    }
    function setDriver(?string $driver): PGSQLSetConfiguration
    {
        $this->set(Key::DRIVER, $driver);
        return $this;
    }
    function setCharset(?string $charset): PGSQLSetConfiguration
    {
        $this->set(Key::CHARSET, $charset);
        return $this;
    }

    function setUser(?string $user): PGSQLSetConfiguration
    {
        $this->set(Key::USER, $user);
        return $this;
    }

    function setPassword(?string $password): PGSQLSetConfiguration
    {
        $this->set(Key::PASSWORD, $password);
        return $this;
    }

    function setPort(?int $port): PGSQLSetConfiguration
    {
        $this->set(Key::PORT, $port);
        return $this;
    }

    function setHost(?string $host): PGSQLSetConfiguration
    {
        $this->set(Key::HOST, $host);
        return $this;

    }

    function setDBName(?string $dbName): PGSQLSetConfiguration
    {
        $this->set(Key::DBNAME, $dbName);
        return $this;

    }

    function setSSLMode(?string $sslMode): PGSQLSetConfiguration
    {
        $this->set(Key::PG_SSL_MODE, $sslMode);
        return $this;
    }

    function setApplicationName(?string $applicationName): PGSQLSetConfiguration
    {
        $this->set(Key::PG_APP_NAME, $applicationName);
        return $this;
    }

    function setSSLKey(?string $sslKey): PGSQLSetConfiguration
    {
        $this->set(Key::PG_SSL_KEY, $sslKey);
        return $this;
    }

    function setSSLCert(?string $sslCert): PGSQLSetConfiguration
    {
        $this->set(Key::PG_SSL_CERT, $sslCert);
        return $this;

    }

    function setSSLCRL(?string $sslCRL): PGSQLSetConfiguration
    {
        $this->set(Key::PG_SSL_CRL, $sslCRL);
        return $this;

    }

    function setSSLRootCert(?string $sslRootCert): PGSQLSetConfiguration
    {
        $this->set(Key::PG_SSL_ROOTCERT, $sslRootCert);
        return $this;
    }

    function setPersistent(bool $persistent = true): PGSQLSetConfiguration
    {
        $this->set(Key::PERSISTENT, $persistent);
        return $this;
    }

    function setGSSEncMode(?string $gssEncMode): PGSQLSetConfiguration
    {
        $this->set(Key::PG_GSS_ENCMODE, $gssEncMode);
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

    function getSSLMode(): ?string
    {
        return $this->get(Key::PG_SSL_MODE);
    }

    function getCharset(): ?string
    {
        return $this->get(Key::CHARSET);
    }

    function getApplicationName(): ?string
    {
        return $this->get(Key::PG_APP_NAME);
    }

    function getPersistent(): ?bool
    {
        return $this->get(Key::PERSISTENT);
    }

    function getGSSEncMode(): ?string
    {
        return $this->get(Key::PG_GSS_ENCMODE);
    }

    function getSSLRootCert(): ?string
    {
        return $this->get(Key::PG_SSL_ROOTCERT);
    }

    function getSSLKey(): ?string
    {
        return $this->get(Key::PG_SSL_KEY);
    }

    function getSSLCert(): ?string
    {
        return $this->get(Key::PG_SSL_CERT);
    }

    function getSSLCRL(): ?string
    {
        return $this->get(Key::PG_SSL_CRL);
    }

    /**
     * @param array{
     *     driver?: string,
     *     user?: string,
     *     password?: string,
     *     port?: int,
     *     host?: string,
     *     dbname?: string,
     *     charset?: string,
     *     persistent?: bool,
     *     sslmode?: string,
     *     sslcert?: string,
     *     sslkey?: string,
     *     sslrootcert?: string,
     *     sslcrl?: string,
     *     application_name?: string,
     *     gssencmode?: string
     * } $config
     * @return static
     */
    public static function fromArray(array $config): static
    {
        $instance = new static(self::NAME);
        $instance->setCharset($config[Key::CHARSET] ?? null);
        $instance->setUser($config[Key::USER] ?? null);
        $instance->setPassword($config[Key::PASSWORD] ?? null);
        $instance->setPort($config[Key::PORT] ?? null);
        $instance->setHost($config[Key::HOST] ?? null);
        $instance->setDBName($config[Key::DBNAME] ?? null);
        $instance->setApplicationName($config[Key::PG_APP_NAME] ?? null);
        $instance->setSSLMode($config[Key::PG_SSL_MODE] ?? null);
        $instance->setSSLKey($config[Key::PG_SSL_KEY] ?? null);
        $instance->setSSLCert($config[Key::PG_SSL_CERT] ?? null);
        $instance->setSSLCRL($config[Key::PG_SSL_CRL] ?? null);
        $instance->setSSLRootCert($config[Key::PG_SSL_ROOTCERT] ?? null);
        $instance->setPersistent($config[Key::PERSISTENT] ?? true);
        $instance->setGSSEncMode($config[Key::PG_GSS_ENCMODE] ?? null);
        return $instance;
    }
}