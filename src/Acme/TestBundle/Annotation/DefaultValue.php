<?php
namespace Acme\TestBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class DefaultValue
{
	protected $name;
	protected $type;
	protected $default;

    public function __construct(array $data)
    {
    	$this->name = $data['name'];
    	$this->type = $data['type'];
    	$this->default = $data['default'];
    }

    public function getName()
    {
    	return $this->name;
    }

    public function getType()
    {
    	return $this->type;
    }

    public function getDefault()
    {
    	return $this->default;
    }        
}