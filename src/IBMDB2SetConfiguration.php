<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   16:14
*/


namespace Foamycastle\Config;

interface IBMDB2SetConfiguration
{
    function setUser(?string $user):self;
    function setPassword(?string $password):self;
    function setPort(?int $port):self;
    function setHost(?string $host):self;
    function setDBName(?string $dbName):self;
    function setDriverOptions(array $driverOptions):self;
    function setPersistent(bool $persistent = true):self;
}