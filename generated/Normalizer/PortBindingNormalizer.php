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
class PortBindingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\PortBinding';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\PortBinding';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\PortBinding();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('HostIp', $data) && $data['HostIp'] !== null) {
            $object->setHostIp($data['HostIp']);
        }
        elseif (\array_key_exists('HostIp', $data) && $data['HostIp'] === null) {
            $object->setHostIp(null);
        }
        if (\array_key_exists('HostPort', $data) && $data['HostPort'] !== null) {
            $object->setHostPort($data['HostPort']);
        }
        elseif (\array_key_exists('HostPort', $data) && $data['HostPort'] === null) {
            $object->setHostPort(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHostIp()) {
            $data['HostIp'] = $object->getHostIp();
        }
        if (null !== $object->getHostPort()) {
            $data['HostPort'] = $object->getHostPort();
        }
        return $data;
    }
}