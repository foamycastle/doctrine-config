<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   15:50
*/


namespace Foamycastle\Config;

interface OCIGetConfiguration
{
    function getCharset():?string;
    function getUser():?string;
    function getPassword():?string;
    function getPort():?int;
    function getHost():?string;
    function getDBName():?string;
    function getPooled():?bool;
    function getConnectionString():?string;
    function getPersistent():?bool;
    function getServiceName():?string;
    function getService():?string;
    function getInstanceName():?string;
    function getDriverOptions():?array;
}