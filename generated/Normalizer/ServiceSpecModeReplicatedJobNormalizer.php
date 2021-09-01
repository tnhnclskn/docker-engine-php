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
class ServiceSpecModeReplicatedJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\ServiceSpecModeReplicatedJob';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\ServiceSpecModeReplicatedJob';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\ServiceSpecModeReplicatedJob();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('MaxConcurrent', $data) && $data['MaxConcurrent'] !== null) {
            $object->setMaxConcurrent($data['MaxConcurrent']);
        }
        elseif (\array_key_exists('MaxConcurrent', $data) && $data['MaxConcurrent'] === null) {
            $object->setMaxConcurrent(null);
        }
        if (\array_key_exists('TotalCompletions', $data) && $data['TotalCompletions'] !== null) {
            $object->setTotalCompletions($data['TotalCompletions']);
        }
        elseif (\array_key_exists('TotalCompletions', $data) && $data['TotalCompletions'] === null) {
            $object->setTotalCompletions(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMaxConcurrent()) {
            $data['MaxConcurrent'] = $object->getMaxConcurrent();
        }
        if (null !== $object->getTotalCompletions()) {
            $data['TotalCompletions'] = $object->getTotalCompletions();
        }
        return $data;
    }
}