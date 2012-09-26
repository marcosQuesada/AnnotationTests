<?php

namespace Acme\TestBundle\Entity;
 
class Entity
{
    public function add($key, $value, $type)
    {
        settype($value, $type);
        $this->$key = $value;
        
        return $this;
    }

    public function __call($arg1, $arg2)
    {

    }

    public function __set($arg1, $arg2)
    {

    }
}