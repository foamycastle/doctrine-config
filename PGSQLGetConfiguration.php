<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   15:29
*/


namespace Foamycastle\Config;

interface PGSQLGetConfiguration
{
    function getUser():?string;
    function getPassword():?string;
    function getPort():?int;
    function getHost():?string;
    function getDBName():?string;
    function getSSLMode():?string;
    function getCharset():?string;
    function getApplicationName():?string;
    function getPersistent():?bool;
    function getGSSEncMode():?string;
    function getSSLRootCert():?string;
    function getSSLKey():?string;
    function getSSLCert():?string;
    function getSSLCRL():?string;

}