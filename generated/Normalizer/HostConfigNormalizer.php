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
class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tnhnclskn\\Docker\\API\\Model\\HostConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tnhnclskn\\Docker\\API\\Model\\HostConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Tnhnclskn\Docker\API\Model\HostConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CpuShares', $data) && $data['CpuShares'] !== null) {
            $object->setCpuShares($data['CpuShares']);
        }
        elseif (\array_key_exists('CpuShares', $data) && $data['CpuShares'] === null) {
            $object->setCpuShares(null);
        }
        if (\array_key_exists('Memory', $data) && $data['Memory'] !== null) {
            $object->setMemory($data['Memory']);
        }
        elseif (\array_key_exists('Memory', $data) && $data['Memory'] === null) {
            $object->setMemory(null);
        }
        if (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] !== null) {
            $object->setCgroupParent($data['CgroupParent']);
        }
        elseif (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] === null) {
            $object->setCgroupParent(null);
        }
        if (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] !== null) {
            $object->setBlkioWeight($data['BlkioWeight']);
        }
        elseif (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] === null) {
            $object->setBlkioWeight(null);
        }
        if (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] !== null) {
            $values = array();
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Tnhnclskn\\Docker\\API\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        }
        elseif (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] === null) {
            $object->setBlkioWeightDevice(null);
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] !== null) {
            $values_1 = array();
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Tnhnclskn\\Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        }
        elseif (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] === null) {
            $object->setBlkioDeviceReadBps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] !== null) {
            $values_2 = array();
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Tnhnclskn\\Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        }
        elseif (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] === null) {
            $object->setBlkioDeviceWriteBps(null);
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] !== null) {
            $values_3 = array();
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Tnhnclskn\\Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        }
        elseif (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] === null) {
            $object->setBlkioDeviceReadIOps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] !== null) {
            $values_4 = array();
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Tnhnclskn\\Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        }
        elseif (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] === null) {
            $object->setBlkioDeviceWriteIOps(null);
        }
        if (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] !== null) {
            $object->setCpuPeriod($data['CpuPeriod']);
        }
        elseif (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] === null) {
            $object->setCpuPeriod(null);
        }
        if (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] !== null) {
            $object->setCpuQuota($data['CpuQuota']);
        }
        elseif (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] === null) {
            $object->setCpuQuota(null);
        }
        if (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] !== null) {
            $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
        }
        elseif (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] === null) {
            $object->setCpuRealtimePeriod(null);
        }
        if (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] !== null) {
            $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
        }
        elseif (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] === null) {
            $object->setCpuRealtimeRuntime(null);
        }
        if (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] !== null) {
            $object->setCpusetCpus($data['CpusetCpus']);
        }
        elseif (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] === null) {
            $object->setCpusetCpus(null);
        }
        if (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] !== null) {
            $object->setCpusetMems($data['CpusetMems']);
        }
        elseif (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] === null) {
            $object->setCpusetMems(null);
        }
        if (\array_key_exists('Devices', $data) && $data['Devices'] !== null) {
            $values_5 = array();
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Tnhnclskn\\Docker\\API\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        }
        elseif (\array_key_exists('Devices', $data) && $data['Devices'] === null) {
            $object->setDevices(null);
        }
        if (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] !== null) {
            $values_6 = array();
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        }
        elseif (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] === null) {
            $object->setDeviceCgroupRules(null);
        }
        if (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] !== null) {
            $values_7 = array();
            foreach ($data['DeviceRequests'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Tnhnclskn\\Docker\\API\\Model\\DeviceRequest', 'json', $context);
            }
            $object->setDeviceRequests($values_7);
        }
        elseif (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] === null) {
            $object->setDeviceRequests(null);
        }
        if (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] !== null) {
            $object->setKernelMemory($data['KernelMemory']);
        }
        elseif (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] === null) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] !== null) {
            $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
        }
        elseif (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] === null) {
            $object->setKernelMemoryTCP(null);
        }
        if (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] !== null) {
            $object->setMemoryReservation($data['MemoryReservation']);
        }
        elseif (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] === null) {
            $object->setMemoryReservation(null);
        }
        if (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] !== null) {
            $object->setMemorySwap($data['MemorySwap']);
        }
        elseif (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] === null) {
            $object->setMemorySwap(null);
        }
        if (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] !== null) {
            $object->setMemorySwappiness($data['MemorySwappiness']);
        }
        elseif (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] === null) {
            $object->setMemorySwappiness(null);
        }
        if (\array_key_exists('NanoCpus', $data) && $data['NanoCpus'] !== null) {
            $object->setNanoCpus($data['NanoCpus']);
        }
        elseif (\array_key_exists('NanoCpus', $data) && $data['NanoCpus'] === null) {
            $object->setNanoCpus(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
            $object->setOomKillDisable($data['OomKillDisable']);
        }
        elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
            $object->setInit($data['Init']);
        }
        elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
            $object->setInit(null);
        }
        if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
            $object->setPidsLimit($data['PidsLimit']);
        }
        elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('Ulimits', $data) && $data['Ulimits'] !== null) {
            $values_8 = array();
            foreach ($data['Ulimits'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Tnhnclskn\\Docker\\API\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_8);
        }
        elseif (\array_key_exists('Ulimits', $data) && $data['Ulimits'] === null) {
            $object->setUlimits(null);
        }
        if (\array_key_exists('CpuCount', $data) && $data['CpuCount'] !== null) {
            $object->setCpuCount($data['CpuCount']);
        }
        elseif (\array_key_exists('CpuCount', $data) && $data['CpuCount'] === null) {
            $object->setCpuCount(null);
        }
        if (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] !== null) {
            $object->setCpuPercent($data['CpuPercent']);
        }
        elseif (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] === null) {
            $object->setCpuPercent(null);
        }
        if (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] !== null) {
            $object->setIOMaximumIOps($data['IOMaximumIOps']);
        }
        elseif (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] === null) {
            $object->setIOMaximumIOps(null);
        }
        if (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] !== null) {
            $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
        }
        elseif (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] === null) {
            $object->setIOMaximumBandwidth(null);
        }
        if (\array_key_exists('Binds', $data) && $data['Binds'] !== null) {
            $values_9 = array();
            foreach ($data['Binds'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setBinds($values_9);
        }
        elseif (\array_key_exists('Binds', $data) && $data['Binds'] === null) {
            $object->setBinds(null);
        }
        if (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] !== null) {
            $object->setContainerIDFile($data['ContainerIDFile']);
        }
        elseif (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] === null) {
            $object->setContainerIDFile(null);
        }
        if (\array_key_exists('LogConfig', $data) && $data['LogConfig'] !== null) {
            $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], 'Tnhnclskn\\Docker\\API\\Model\\HostConfigLogConfig', 'json', $context));
        }
        elseif (\array_key_exists('LogConfig', $data) && $data['LogConfig'] === null) {
            $object->setLogConfig(null);
        }
        if (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] !== null) {
            $object->setNetworkMode($data['NetworkMode']);
        }
        elseif (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] === null) {
            $object->setNetworkMode(null);
        }
        if (\array_key_exists('PortBindings', $data) && $data['PortBindings'] !== null) {
            $values_10 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['PortBindings'] as $key => $value_10) {
                $values_11 = array();
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, 'Tnhnclskn\\Docker\\API\\Model\\PortBinding', 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $object->setPortBindings($values_10);
        }
        elseif (\array_key_exists('PortBindings', $data) && $data['PortBindings'] === null) {
            $object->setPortBindings(null);
        }
        if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Tnhnclskn\\Docker\\API\\Model\\RestartPolicy', 'json', $context));
        }
        elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
            $object->setRestartPolicy(null);
        }
        if (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] !== null) {
            $object->setAutoRemove($data['AutoRemove']);
        }
        elseif (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] === null) {
            $object->setAutoRemove(null);
        }
        if (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] !== null) {
            $object->setVolumeDriver($data['VolumeDriver']);
        }
        elseif (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] === null) {
            $object->setVolumeDriver(null);
        }
        if (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] !== null) {
            $values_12 = array();
            foreach ($data['VolumesFrom'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setVolumesFrom($values_12);
        }
        elseif (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] === null) {
            $object->setVolumesFrom(null);
        }
        if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
            $values_13 = array();
            foreach ($data['Mounts'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Tnhnclskn\\Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_13);
        }
        elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
            $object->setMounts(null);
        }
        if (\array_key_exists('CapAdd', $data) && $data['CapAdd'] !== null) {
            $values_14 = array();
            foreach ($data['CapAdd'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setCapAdd($values_14);
        }
        elseif (\array_key_exists('CapAdd', $data) && $data['CapAdd'] === null) {
            $object->setCapAdd(null);
        }
        if (\array_key_exists('CapDrop', $data) && $data['CapDrop'] !== null) {
            $values_15 = array();
            foreach ($data['CapDrop'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setCapDrop($values_15);
        }
        elseif (\array_key_exists('CapDrop', $data) && $data['CapDrop'] === null) {
            $object->setCapDrop(null);
        }
        if (\array_key_exists('CgroupnsMode', $data) && $data['CgroupnsMode'] !== null) {
            $object->setCgroupnsMode($data['CgroupnsMode']);
        }
        elseif (\array_key_exists('CgroupnsMode', $data) && $data['CgroupnsMode'] === null) {
            $object->setCgroupnsMode(null);
        }
        if (\array_key_exists('Dns', $data) && $data['Dns'] !== null) {
            $values_16 = array();
            foreach ($data['Dns'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setDns($values_16);
        }
        elseif (\array_key_exists('Dns', $data) && $data['Dns'] === null) {
            $object->setDns(null);
        }
        if (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] !== null) {
            $values_17 = array();
            foreach ($data['DnsOptions'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setDnsOptions($values_17);
        }
        elseif (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] === null) {
            $object->setDnsOptions(null);
        }
        if (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] !== null) {
            $values_18 = array();
            foreach ($data['DnsSearch'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setDnsSearch($values_18);
        }
        elseif (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] === null) {
            $object->setDnsSearch(null);
        }
        if (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] !== null) {
            $values_19 = array();
            foreach ($data['ExtraHosts'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setExtraHosts($values_19);
        }
        elseif (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] === null) {
            $object->setExtraHosts(null);
        }
        if (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] !== null) {
            $values_20 = array();
            foreach ($data['GroupAdd'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setGroupAdd($values_20);
        }
        elseif (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] === null) {
            $object->setGroupAdd(null);
        }
        if (\array_key_exists('IpcMode', $data) && $data['IpcMode'] !== null) {
            $object->setIpcMode($data['IpcMode']);
        }
        elseif (\array_key_exists('IpcMode', $data) && $data['IpcMode'] === null) {
            $object->setIpcMode(null);
        }
        if (\array_key_exists('Cgroup', $data) && $data['Cgroup'] !== null) {
            $object->setCgroup($data['Cgroup']);
        }
        elseif (\array_key_exists('Cgroup', $data) && $data['Cgroup'] === null) {
            $object->setCgroup(null);
        }
        if (\array_key_exists('Links', $data) && $data['Links'] !== null) {
            $values_21 = array();
            foreach ($data['Links'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setLinks($values_21);
        }
        elseif (\array_key_exists('Links', $data) && $data['Links'] === null) {
            $object->setLinks(null);
        }
        if (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] !== null) {
            $object->setOomScoreAdj($data['OomScoreAdj']);
        }
        elseif (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] === null) {
            $object->setOomScoreAdj(null);
        }
        if (\array_key_exists('PidMode', $data) && $data['PidMode'] !== null) {
            $object->setPidMode($data['PidMode']);
        }
        elseif (\array_key_exists('PidMode', $data) && $data['PidMode'] === null) {
            $object->setPidMode(null);
        }
        if (\array_key_exists('Privileged', $data) && $data['Privileged'] !== null) {
            $object->setPrivileged($data['Privileged']);
        }
        elseif (\array_key_exists('Privileged', $data) && $data['Privileged'] === null) {
            $object->setPrivileged(null);
        }
        if (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] !== null) {
            $object->setPublishAllPorts($data['PublishAllPorts']);
        }
        elseif (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] === null) {
            $object->setPublishAllPorts(null);
        }
        if (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] !== null) {
            $object->setReadonlyRootfs($data['ReadonlyRootfs']);
        }
        elseif (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] === null) {
            $object->setReadonlyRootfs(null);
        }
        if (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] !== null) {
            $values_22 = array();
            foreach ($data['SecurityOpt'] as $value_22) {
                $values_22[] = $value_22;
            }
            $object->setSecurityOpt($values_22);
        }
        elseif (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] === null) {
            $object->setSecurityOpt(null);
        }
        if (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] !== null) {
            $values_23 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['StorageOpt'] as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $object->setStorageOpt($values_23);
        }
        elseif (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] === null) {
            $object->setStorageOpt(null);
        }
        if (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] !== null) {
            $values_24 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Tmpfs'] as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $object->setTmpfs($values_24);
        }
        elseif (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] === null) {
            $object->setTmpfs(null);
        }
        if (\array_key_exists('UTSMode', $data) && $data['UTSMode'] !== null) {
            $object->setUTSMode($data['UTSMode']);
        }
        elseif (\array_key_exists('UTSMode', $data) && $data['UTSMode'] === null) {
            $object->setUTSMode(null);
        }
        if (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] !== null) {
            $object->setUsernsMode($data['UsernsMode']);
        }
        elseif (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] === null) {
            $object->setUsernsMode(null);
        }
        if (\array_key_exists('ShmSize', $data) && $data['ShmSize'] !== null) {
            $object->setShmSize($data['ShmSize']);
        }
        elseif (\array_key_exists('ShmSize', $data) && $data['ShmSize'] === null) {
            $object->setShmSize(null);
        }
        if (\array_key_exists('Sysctls', $data) && $data['Sysctls'] !== null) {
            $values_25 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $object->setSysctls($values_25);
        }
        elseif (\array_key_exists('Sysctls', $data) && $data['Sysctls'] === null) {
            $object->setSysctls(null);
        }
        if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
            $object->setRuntime($data['Runtime']);
        }
        elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] !== null) {
            $values_26 = array();
            foreach ($data['ConsoleSize'] as $value_26) {
                $values_26[] = $value_26;
            }
            $object->setConsoleSize($values_26);
        }
        elseif (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] === null) {
            $object->setConsoleSize(null);
        }
        if (\array_key_exists('Isolation', $data) && $data['Isolation'] !== null) {
            $object->setIsolation($data['Isolation']);
        }
        elseif (\array_key_exists('Isolation', $data) && $data['Isolation'] === null) {
            $object->setIsolation(null);
        }
        if (\array_key_exists('MaskedPaths', $data) && $data['MaskedPaths'] !== null) {
            $values_27 = array();
            foreach ($data['MaskedPaths'] as $value_27) {
                $values_27[] = $value_27;
            }
            $object->setMaskedPaths($values_27);
        }
        elseif (\array_key_exists('MaskedPaths', $data) && $data['MaskedPaths'] === null) {
            $object->setMaskedPaths(null);
        }
        if (\array_key_exists('ReadonlyPaths', $data) && $data['ReadonlyPaths'] !== null) {
            $values_28 = array();
            foreach ($data['ReadonlyPaths'] as $value_28) {
                $values_28[] = $value_28;
            }
            $object->setReadonlyPaths($values_28);
        }
        elseif (\array_key_exists('ReadonlyPaths', $data) && $data['ReadonlyPaths'] === null) {
            $object->setReadonlyPaths(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCpuShares()) {
            $data['CpuShares'] = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data['Memory'] = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data['CgroupParent'] = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data['BlkioWeight'] = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = array();
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BlkioWeightDevice'] = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = array();
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['BlkioDeviceReadBps'] = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = array();
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['BlkioDeviceWriteBps'] = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = array();
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['BlkioDeviceReadIOps'] = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = array();
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['BlkioDeviceWriteIOps'] = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data['CpuPeriod'] = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data['CpuQuota'] = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data['CpusetCpus'] = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data['CpusetMems'] = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = array();
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Devices'] = $values_5;
        }
        if (null !== $object->getDeviceCgroupRules()) {
            $values_6 = array();
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['DeviceCgroupRules'] = $values_6;
        }
        if (null !== $object->getDeviceRequests()) {
            $values_7 = array();
            foreach ($object->getDeviceRequests() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['DeviceRequests'] = $values_7;
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if (null !== $object->getKernelMemoryTCP()) {
            $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
        }
        if (null !== $object->getMemoryReservation()) {
            $data['MemoryReservation'] = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data['MemorySwap'] = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data['MemorySwappiness'] = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCpus()) {
            $data['NanoCpus'] = $object->getNanoCpus();
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if (null !== $object->getInit()) {
            $data['Init'] = $object->getInit();
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_8 = array();
            foreach ($object->getUlimits() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['Ulimits'] = $values_8;
        }
        if (null !== $object->getCpuCount()) {
            $data['CpuCount'] = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data['CpuPercent'] = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
        }
        if (null !== $object->getBinds()) {
            $values_9 = array();
            foreach ($object->getBinds() as $value_9) {
                $values_9[] = $value_9;
            }
            $data['Binds'] = $values_9;
        }
        if (null !== $object->getContainerIDFile()) {
            $data['ContainerIDFile'] = $object->getContainerIDFile();
        }
        if (null !== $object->getLogConfig()) {
            $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkMode()) {
            $data['NetworkMode'] = $object->getNetworkMode();
        }
        if (null !== $object->getPortBindings()) {
            $values_10 = array();
            foreach ($object->getPortBindings() as $key => $value_10) {
                $values_11 = array();
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $data['PortBindings'] = $values_10;
        }
        if (null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getAutoRemove()) {
            $data['AutoRemove'] = $object->getAutoRemove();
        }
        if (null !== $object->getVolumeDriver()) {
            $data['VolumeDriver'] = $object->getVolumeDriver();
        }
        if (null !== $object->getVolumesFrom()) {
            $values_12 = array();
            foreach ($object->getVolumesFrom() as $value_12) {
                $values_12[] = $value_12;
            }
            $data['VolumesFrom'] = $values_12;
        }
        if (null !== $object->getMounts()) {
            $values_13 = array();
            foreach ($object->getMounts() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data['Mounts'] = $values_13;
        }
        if (null !== $object->getCapAdd()) {
            $values_14 = array();
            foreach ($object->getCapAdd() as $value_14) {
                $values_14[] = $value_14;
            }
            $data['CapAdd'] = $values_14;
        }
        if (null !== $object->getCapDrop()) {
            $values_15 = array();
            foreach ($object->getCapDrop() as $value_15) {
                $values_15[] = $value_15;
            }
            $data['CapDrop'] = $values_15;
        }
        if (null !== $object->getCgroupnsMode()) {
            $data['CgroupnsMode'] = $object->getCgroupnsMode();
        }
        if (null !== $object->getDns()) {
            $values_16 = array();
            foreach ($object->getDns() as $value_16) {
                $values_16[] = $value_16;
            }
            $data['Dns'] = $values_16;
        }
        if (null !== $object->getDnsOptions()) {
            $values_17 = array();
            foreach ($object->getDnsOptions() as $value_17) {
                $values_17[] = $value_17;
            }
            $data['DnsOptions'] = $values_17;
        }
        if (null !== $object->getDnsSearch()) {
            $values_18 = array();
            foreach ($object->getDnsSearch() as $value_18) {
                $values_18[] = $value_18;
            }
            $data['DnsSearch'] = $values_18;
        }
        if (null !== $object->getExtraHosts()) {
            $values_19 = array();
            foreach ($object->getExtraHosts() as $value_19) {
                $values_19[] = $value_19;
            }
            $data['ExtraHosts'] = $values_19;
        }
        if (null !== $object->getGroupAdd()) {
            $values_20 = array();
            foreach ($object->getGroupAdd() as $value_20) {
                $values_20[] = $value_20;
            }
            $data['GroupAdd'] = $values_20;
        }
        if (null !== $object->getIpcMode()) {
            $data['IpcMode'] = $object->getIpcMode();
        }
        if (null !== $object->getCgroup()) {
            $data['Cgroup'] = $object->getCgroup();
        }
        if (null !== $object->getLinks()) {
            $values_21 = array();
            foreach ($object->getLinks() as $value_21) {
                $values_21[] = $value_21;
            }
            $data['Links'] = $values_21;
        }
        if (null !== $object->getOomScoreAdj()) {
            $data['OomScoreAdj'] = $object->getOomScoreAdj();
        }
        if (null !== $object->getPidMode()) {
            $data['PidMode'] = $object->getPidMode();
        }
        if (null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getPublishAllPorts()) {
            $data['PublishAllPorts'] = $object->getPublishAllPorts();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
        }
        if (null !== $object->getSecurityOpt()) {
            $values_22 = array();
            foreach ($object->getSecurityOpt() as $value_22) {
                $values_22[] = $value_22;
            }
            $data['SecurityOpt'] = $values_22;
        }
        if (null !== $object->getStorageOpt()) {
            $values_23 = array();
            foreach ($object->getStorageOpt() as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $data['StorageOpt'] = $values_23;
        }
        if (null !== $object->getTmpfs()) {
            $values_24 = array();
            foreach ($object->getTmpfs() as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $data['Tmpfs'] = $values_24;
        }
        if (null !== $object->getUTSMode()) {
            $data['UTSMode'] = $object->getUTSMode();
        }
        if (null !== $object->getUsernsMode()) {
            $data['UsernsMode'] = $object->getUsernsMode();
        }
        if (null !== $object->getShmSize()) {
            $data['ShmSize'] = $object->getShmSize();
        }
        if (null !== $object->getSysctls()) {
            $values_25 = array();
            foreach ($object->getSysctls() as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $data['Sysctls'] = $values_25;
        }
        if (null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if (null !== $object->getConsoleSize()) {
            $values_26 = array();
            foreach ($object->getConsoleSize() as $value_26) {
                $values_26[] = $value_26;
            }
            $data['ConsoleSize'] = $values_26;
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if (null !== $object->getMaskedPaths()) {
            $values_27 = array();
            foreach ($object->getMaskedPaths() as $value_27) {
                $values_27[] = $value_27;
            }
            $data['MaskedPaths'] = $values_27;
        }
        if (null !== $object->getReadonlyPaths()) {
            $values_28 = array();
            foreach ($object->getReadonlyPaths() as $value_28) {
                $values_28[] = $value_28;
            }
            $data['ReadonlyPaths'] = $values_28;
        }
        return $data;
    }
}