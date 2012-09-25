<?php

namespace  Acme\TestBundle\Metadata;
 
use Metadata\PropertyMetadata as BasePropertyMetadata;
 
class PropertyMetadata extends BasePropertyMetadata
{
    public $name;
    public $type;
    public $default;

    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
    
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getDefault()
    {
        return $this->default;
    }
    
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }
}