<?php

namespace  Acme\TestBundle\Metadata;
 
use Metadata\PropertyMetadata as BasePropertyMetadata;
 
class PropertyMetadata extends BasePropertyMetadata
{
    public $name;
    public $type;
    public $default;
}