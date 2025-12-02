## Doctrine Connection Config

Use this package to configure Doctrine connections by using Symfony-style PHP configuration files.
### Usage

```php
use Foamycastle\Config\MySQLConfiguration;use Foamycastle\Config\MySQLSetConfiguration;

$config = MySQLConfiguration::fromConfigFile('configFile.php');

//configFile.php

return static function (MySQLSetConfiguration $config) {
    $config
        ->setHost('db_host.com')
        ->setUser('db_user')
        ->setPassword(env('DB_PASSWORD'))
        ->setPort(3306)
        ->setDatabase('db_name')
        ->setCharset('utf8mb4');
}
```