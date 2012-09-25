<?php

namespace Acme\TestBundle\Domain;
 
use Acme\TestBundle\Annotation\DefaultValue;
 
class DomainClass
{
   /**
     * @DefaultValue(name="Test annotations", type="integer", default=5)
     */
    private $name;

    /**
     * @DefaultValue(name="idu", type="string", default="a")
     */
    protected $idUnit;  
}
