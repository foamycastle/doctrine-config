<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   14:36
*/


namespace Foamycastle\Config;

class Key
{
    public const HOST = 'host';
    public const PORT = 'port';
    public const USER = 'user';
    public const PASSWORD = 'password';
    public const DBNAME = 'dbname';
    public const CHARSET = 'charset';
    public const UNIX_SOCKET = 'unix_socket';
    public const PERSISTENT = 'persistent';
    public const PG_SSL_ROOTCERT = 'sslrootcert';
    public const PG_SSL_CERT = 'sslcert';
    public const PG_SSL_KEY = 'sslkey';
    public const PG_SSL_MODE = 'sslmode';
    public const PG_APP_NAME = 'application_name';
    public const PG_GSS_ENCMODE = 'gssencmode';
    public const PG_SSL_CRL = 'sslcrl';
    public const SSL_CERT = 'ssl_cert';
    public const SSL_CA = 'ssl_ca';
    public const SSL_KEY = 'ssl_key';
    public const SSL_CAPATH = 'ssl_capath';
    public const SSL_CIPHER = 'ssl_cipher';
    public const PATH = 'path';
    public const IN_MEMORY = 'in_memory';
    public const DRIVER_OPTIONS = 'driverOptions';
    public const OCI_SERVICE_NAME = 'service_name';
    public const OCI_SERVICE = 'service';
    public const OCI_POOLED = 'pooled';
    public const OCI_INSTANCE_NAME = 'instancename';
    public const OCI_CONNECT_STRING = 'connectstring';
}