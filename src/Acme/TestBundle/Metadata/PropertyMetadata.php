<?php

namespace  Acme\TestBundle\Metadata;
 
use Metadata\PropertyMetadata as BasePropertyMetadata;
 
class PropertyMetadata extends BasePropertyMetadata
{
	public $name;
	public $class;
    protected $attributeName;
    protected $type;
    protected $default;

    public function getAttributeName()
    {
        return $this->attributeName;
    }
    
    public function setAttributeName($name)
    {
        $this->attributeName = $name;
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