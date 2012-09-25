<?php
namespace Acme\AnnotationsBundle\Entity;

use Acme\AnnotationsBundle\Annotation\StandardObject;

class Person
{
    /**
     * @StandardObject("name", dataType="string")
     */
    public function getName()
    {
        return 'Matthias Noback';
    }
}