<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/03/25
 *  Time:   18:39
*/


namespace Foamycastle\Config\Tests;

use Foamycastle\Config\SQLSrvConfiguration;
use Foamycastle\Config\SQLSrvGetConfiguration;
use Foamycastle\Config\SQLSrvSetConfiguration;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertTrue;

class SQLSrvConfigurationTest extends TestCase
{

    public function testGetDSNString()
    {
        $new = SQLSrvConfiguration::fromArray([
            'driver' => 'sqlsrv',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'dbname' => 'test'
        ]);
        $string = $new->getDSNString();
    }

    public function test__construct()
    {
        $new = new SQLSrvConfiguration('sqlsrv');
        assertTrue($new instanceof SQLSrvConfiguration);
        assertTrue($new instanceof SQLSrvGetConfiguration);
        assertTrue($new instanceof SQLSrvSetConfiguration);
        assertTrue($new->getName() === 'sqlsrv');
        $new = SQLSrvConfiguration::fromArray([
            'driver' => 'sqlsrv',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'dbname' => 'test'
        ]);
        assertTrue($new->getHost()=='localhost');
        $array = $new->toArray();
        assertTrue($array['host'] === 'localhost');
    }
}
