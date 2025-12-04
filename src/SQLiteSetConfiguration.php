<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   14:10
*/


namespace Foamycastle\Config;

interface SQLiteSetConfiguration
{
    function setDriver(?string $driver):self;
    function setUser(?string $user):self;
    function setPassword(?string $password):self;
    function setPath(?string $path):self;
    function setInMemory(?bool $inMemory):self;
}