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
class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecContainerSpecPrivileges';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecContainerSpecPrivileges';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\TaskSpecContainerSpecPrivileges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] !== null) {
            $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec', 'json', $context));
        }
        elseif (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] === null) {
            $object->setCredentialSpec(null);
        }
        if (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] !== null) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], 'Tnhnclskn\\Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext', 'json', $context));
        }
        elseif (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] === null) {
            $object->setSELinuxContext(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCredentialSpec()) {
            $data['CredentialSpec'] = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
        }
        if (null !== $object->getSELinuxContext()) {
            $data['SELinuxContext'] = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
        }
        return $data;
    }
}