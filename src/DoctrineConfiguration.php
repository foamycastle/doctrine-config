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
    public const DSN_STRING='{driver}://{user}:{password}@{host}:{port}/{dbname}';
    protected Connection $conn;

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
        foreach(self::KEYS as $key){
            if($this->get($key!==null)){
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
    function getDSNString():string
    {
        $localVars=$this->toArray();
        $key_array=array_map(function($key) {
            return '#{'.$key.'}#';
            },
            $localVars,ARRAY_FILTER_USE_KEY
        );
        return preg_replace($key_array,array_values($localVars), self::DSN_STRING);
    }
}