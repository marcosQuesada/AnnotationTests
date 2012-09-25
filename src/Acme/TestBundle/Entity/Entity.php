<?php

namespace Acme\TestBundle\Entity;
 
class Entity
{
    public function add($key, $value, $type)
    {
        if ($type == 'integer')
            $this->$key = (int)$value;
        if ($type == 'string')
            $this->$key = (string)$value;       
        if ($type == 'boolean')
            $this->$key = (bool)$value; 
        return $this;
    }

    public function __call($arg1, $arg2)
    {

    }

    public function __set($arg1, $arg2)
    {

    }
}