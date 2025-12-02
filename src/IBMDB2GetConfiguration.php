<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   16:15
*/


namespace Foamycastle\Config;

interface IBMDB2GetConfiguration
{
    function getUser():?string;
    function getPassword():?string;
    function getPort():?int;
    function getHost():?string;
    function getDBName():?string;
    function getDriverOptions():array;
    function getPersistent():?bool;
}