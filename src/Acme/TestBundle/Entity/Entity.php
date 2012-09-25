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
}