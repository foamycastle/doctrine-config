<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/03/25
 *  Time:   18:39
*/


namespace Foamycastle\Config\Tests;

use Foamycastle\Config\SQLSrvParams;
use Foamycastle\Config\SQLSrvGetParams;
use Foamycastle\Config\SQLSrvSetParams;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertTrue;

class SQLSrvConfigurationTest extends TestCase
{

    public function test__construct()
    {
        $new = new SQLSrvParams('sqlsrv');
        assertTrue($new instanceof SQLSrvParams);
        assertTrue($new instanceof SQLSrvGetParams);
        assertTrue($new instanceof SQLSrvSetParams);
        assertTrue($new->getName() === 'sqlsrv');
        $new = SQLSrvParams::fromArray([
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
