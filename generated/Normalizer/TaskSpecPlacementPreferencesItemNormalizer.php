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
class TaskSpecPlacementPreferencesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecPlacementPreferencesItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecPlacementPreferencesItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\TaskSpecPlacementPreferencesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Spread', $data) && $data['Spread'] !== null) {
            $object->setSpread($this->denormalizer->denormalize($data['Spread'], 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecPlacementPreferencesItemSpread', 'json', $context));
        }
        elseif (\array_key_exists('Spread', $data) && $data['Spread'] === null) {
            $object->setSpread(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSpread()) {
            $data['Spread'] = $this->normalizer->normalize($object->getSpread(), 'json', $context);
        }
        return $data;
    }
}