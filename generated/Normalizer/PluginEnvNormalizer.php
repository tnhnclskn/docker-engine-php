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
class PluginEnvNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\PluginEnv';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\PluginEnv';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\PluginEnv();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        }
        elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('Settable', $data) && $data['Settable'] !== null) {
            $values = array();
            foreach ($data['Settable'] as $value) {
                $values[] = $value;
            }
            $object->setSettable($values);
        }
        elseif (\array_key_exists('Settable', $data) && $data['Settable'] === null) {
            $object->setSettable(null);
        }
        if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
            $object->setValue($data['Value']);
        }
        elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
            $object->setValue(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['Name'] = $object->getName();
        $data['Description'] = $object->getDescription();
        $values = array();
        foreach ($object->getSettable() as $value) {
            $values[] = $value;
        }
        $data['Settable'] = $values;
        $data['Value'] = $object->getValue();
        return $data;
    }
}