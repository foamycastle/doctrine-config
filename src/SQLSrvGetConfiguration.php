<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   16:09
*/


namespace Foamycastle\Config;

interface SQLSrvGetConfiguration
{
    function getUserName():?string;
    function getPassword():?string;
    function getPort():?int;
    function getHost():?string;
    function getDBName():?string;
    function getDriverOptions():array;
}