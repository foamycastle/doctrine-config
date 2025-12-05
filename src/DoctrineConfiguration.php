<?php
/*
 *  Author: Aaron Sollman
 *  Email:  unclepong@gmail.com
 *  Date:   12/02/25
 *  Time:   13:45
*/


namespace Foamycastle\Config;

use Doctrine\DBAL\Connection;

abstract class DoctrineConfiguration extends BaseConfig
{
    public const NAME = 'doctrine_configuration';
    public const KEYS=[];

    public function __construct(?string $name = null)
    {
        parent::__construct($name ?? self::NAME);
    }
    public function getName(): string
    {
        return parent::getName();
    }
    public function __serialize(): array
    {
        $output=[];
        foreach(static::KEYS as $key){
            if($this->get($key)!==null){
                $output[$key]=$this->get($key);
            }
        }
        return $output;
    }
    public function toArray():array{
        return $this->__serialize();
    }
    public function __unserialize(array $data): void
    {
        foreach($data as $key=>$value){
            $this->set($key,$value);
        }
    }
}