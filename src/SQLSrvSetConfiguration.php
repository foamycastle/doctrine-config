<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   16:09
*/


namespace Foamycastle\Config;

interface SQLSrvSetConfiguration
{
    function setDriver(?string $driver):self;
    function setUser(?string $user):self;
    function setPassword(?string $password):self;
    function setPort(?int $port):self;
    function setHost(?string $host):self;
    function setDBName(?string $dbName):self;
    function setDriverOptions(array $driverOptions):self;
}