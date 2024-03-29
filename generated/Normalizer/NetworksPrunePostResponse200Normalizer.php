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
class NetworksPrunePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\NetworksPrunePostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\NetworksPrunePostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\NetworksPrunePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NetworksDeleted', $data) && $data['NetworksDeleted'] !== null) {
            $values = array();
            foreach ($data['NetworksDeleted'] as $value) {
                $values[] = $value;
            }
            $object->setNetworksDeleted($values);
        }
        elseif (\array_key_exists('NetworksDeleted', $data) && $data['NetworksDeleted'] === null) {
            $object->setNetworksDeleted(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNetworksDeleted()) {
            $values = array();
            foreach ($object->getNetworksDeleted() as $value) {
                $values[] = $value;
            }
            $data['NetworksDeleted'] = $values;
        }
        return $data;
    }
}