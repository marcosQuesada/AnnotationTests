<?php
namespace Acme\TestBundle\Data;
 
use Metadata\MetadataFactoryInterface;
 
class DefaultValueProcessor
{
    private $metadataFactory;
 
    public function __construct(MetadataFactoryInterface $metadataFactory)
    {
        $this->metadataFactory = $metadataFactory;
    }
 
    public function fillObjectWithDefaultValues($object)
    {
        ladybug_dump($object);
        if (!is_object($object)) {
            throw new \InvalidArgumentException('No object provided');
        }
 
        $classMetadata = $this->metadataFactory->getMetadataForClass(get_class($object));

        $entity = new \Acme\TestBundle\Entity\Entity();
        foreach ($classMetadata->propertyMetadata as $propertyMetadata) {
            if (isset($propertyMetadata->name)) 
            {
                $entity->add($propertyMetadata->getAttributeName(), $propertyMetadata->getDefault(), $propertyMetadata->getType());
                
                // $propertyMetadata->setValue($object, $propertyMetadata->name);
            }                                   
        }

        return $entity;
    }
}