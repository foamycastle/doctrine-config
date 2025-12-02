<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   15:50
*/


namespace Foamycastle\Config;

interface OCISetConfiguration
{
    function setUser(?string $user):self;
    function setPassword(?string $password):self;
    function setPort(?int $port):self;
    function setHost(?string $host):self;
    function setDBName(?string $dbName):self;
    function setPooled(bool $pooled = true):self;
    function setConnectionString(?string $connectionString):self;
    function setPersistent(bool $persistent = true):self;
    function setServiceName(?string $serviceName):self;
    function setService(?string $service):self;
    function setCharset(?string $charset):self;
    function setInstanceName(?string $instanceName):self;

    /**
     * @param array{
     *     exclusive?:bool,
     *     protocol?:string
     * } $driverOptions
     * @return self
     */
    function setDriverOptions(array $driverOptions):self;
}