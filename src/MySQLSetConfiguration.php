<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   14:33
*/


namespace Foamycastle\Config;

interface MySQLSetConfiguration
{
    function setCharset(?string $charset):self;
    function setUser(?string $user):self;
    function setPassword(?string $password):self;
    function setPort(?int $port):self;
    function setHost(?string $host):self;
    function setDBName(?string $dbName):self;
    function setUnixSocket(?string $unixSocket):self;
    function setPersistent(bool $persistent = true):self;
    function setSSLKey(?string $sslKey):self;
    function setSSLCert(?string $sslCert):self;
    function setSSLCA(?string $sslCA):self;
    function setSSLCipher(?string $sslCipher):self;
    function setSSLCaPath(?string $sslCaPath):self;
    function setDriverOptions(int $driverOptions):self;
}