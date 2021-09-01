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
class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\TaskSpecContainerSpecConfigsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('File', $data) && $data['File'] !== null) {
            $object->setFile($this->denormalizer->denormalize($data['File'], 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemFile', 'json', $context));
        }
        elseif (\array_key_exists('File', $data) && $data['File'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
            $object->setRuntime($data['Runtime']);
        }
        elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('ConfigID', $data) && $data['ConfigID'] !== null) {
            $object->setConfigID($data['ConfigID']);
        }
        elseif (\array_key_exists('ConfigID', $data) && $data['ConfigID'] === null) {
            $object->setConfigID(null);
        }
        if (\array_key_exists('ConfigName', $data) && $data['ConfigName'] !== null) {
            $object->setConfigName($data['ConfigName']);
        }
        elseif (\array_key_exists('ConfigName', $data) && $data['ConfigName'] === null) {
            $object->setConfigName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFile()) {
            $data['File'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if (null !== $object->getConfigID()) {
            $data['ConfigID'] = $object->getConfigID();
        }
        if (null !== $object->getConfigName()) {
            $data['ConfigName'] = $object->getConfigName();
        }
        return $data;
    }
}