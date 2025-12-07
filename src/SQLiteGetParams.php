<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   14:10
*/


namespace Foamycastle\Config;

interface SQLiteGetParams
{
    function getDriver():?string;
    function getUser():?string;
    function getPassword():?string;
    function getPath():?string;
    function getInMemory():?bool;
}