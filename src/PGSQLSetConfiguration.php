<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   15:29
*/


namespace Foamycastle\Config;

interface PGSQLSetConfiguration
{
    function setDriver(?string $driver):self;
    function setCharset(?string $charset):self;
    function setUser(?string $user):self;
    function setPassword(?string $password):self;
    function setPort(?int $port):self;
    function setHost(?string $host):self;
    function setDBName(?string $dbName):self;
    function setSSLMode(?string $sslMode):self;
    function setApplicationName(?string $applicationName):self;
    function setSSLKey(?string $sslKey):self;
    function setSSLCert(?string $sslCert):self;
    function setSSLCRL(?string $sslCRL):self;
    function setSSLRootCert(?string $sslRootCert):self;
    function setPersistent(bool $persistent = true):self;
    function setGSSEncMode(?string $gssEncMode):self;


}