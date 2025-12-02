<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   14:33
*/


namespace Foamycastle\Config;

interface MySQLGetConfiguration
{
    function getCharset():?string;
    function getUser():?string;
    function getPassword():?string;
    function getPort():?int;
    function getHost():?string;
    function getDBName():?string;
    function getUnixSocket():?string;
    function getPersistent():?bool;
    function getSSLKey():?string;
    function getSSLCert():?string;
    function getSSLCA():?string;
    function getSSLCipher():?string;
    function getSSLCaPath():?string;
    function getDriverOptions():?int;
}