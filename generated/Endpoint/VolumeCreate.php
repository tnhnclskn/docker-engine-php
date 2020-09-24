<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class VolumeCreate extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Tnhnclskn\Docker\API\Model\VolumesCreatePostBody $volumeConfig Volume configuration
     */
    public function __construct(\Tnhnclskn\Docker\API\Model\VolumesCreatePostBody $volumeConfig)
    {
        $this->body = $volumeConfig;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/volumes/create';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Tnhnclskn\Docker\API\Exception\VolumeCreateInternalServerErrorException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\Volume
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\Volume', 'json');
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\VolumeCreateInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}