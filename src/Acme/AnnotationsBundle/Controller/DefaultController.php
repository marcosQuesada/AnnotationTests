<?php

namespace Acme\AnnotationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\Common\Annotations\AnnotationReader;
use Acme\AnnotationsBundle\Conversion\StandardObjectConverter;
use Acme\AnnotationsBundle\Entity\Person;

/**
 * @Route("/test")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $reader = $this->container->get('annotation_reader');
        $converter = new StandardObjectConverter($reader);
        ladybug_dump($converter);
        $person = new Person();
        $standardObject = $converter->convert($person);        
    	echo "HELLO";
    	ladybug_dump($standardObject);

        $this->test = 'test';

        $this->test();
        return array('name' => $name);
    }

    protected function test()
    {
        
        ladybug_dump($this);
    }
}
