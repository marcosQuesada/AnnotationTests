<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Conf;

use Acme\TestBundle\Domain\DomainClass;

/**
 * Route preffix affects only new (not overloaded) actions or if route name matches
 * @Conf\Route("/testbundle")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $processor = $this->container->get('sp_annotation.default_value_processor');
        $object = new DomainClass;
        $entity = $processor->fillObjectWithDefaultValues($object);
         
         ladybug_dump($entity);
        return array('name' => $name);
    }
}
