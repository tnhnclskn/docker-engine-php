<?php

namespace Tnhnclskn\Docker\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Tnhnclskn\Docker\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BuildPrunePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\BuildPrunePostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\BuildPrunePostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\BuildPrunePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CachesDeleted', $data) && $data['CachesDeleted'] !== null) {
            $values = array();
            foreach ($data['CachesDeleted'] as $value) {
                $values[] = $value;
            }
            $object->setCachesDeleted($values);
        }
        elseif (\array_key_exists('CachesDeleted', $data) && $data['CachesDeleted'] === null) {
            $object->setCachesDeleted(null);
        }
        if (\array_key_exists('SpaceReclaimed', $data) && $data['SpaceReclaimed'] !== null) {
            $object->setSpaceReclaimed($data['SpaceReclaimed']);
        }
        elseif (\array_key_exists('SpaceReclaimed', $data) && $data['SpaceReclaimed'] === null) {
            $object->setSpaceReclaimed(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCachesDeleted()) {
            $values = array();
            foreach ($object->getCachesDeleted() as $value) {
                $values[] = $value;
            }
            $data['CachesDeleted'] = $values;
        }
        if (null !== $object->getSpaceReclaimed()) {
            $data['SpaceReclaimed'] = $object->getSpaceReclaimed();
        }
        return $data;
    }
}