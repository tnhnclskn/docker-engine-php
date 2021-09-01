<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class NetworkCreate extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Tnhnclskn\Docker\API\Model\NetworksCreatePostBody $networkConfig Network configuration
     */
    public function __construct(\Tnhnclskn\Docker\API\Model\NetworksCreatePostBody $networkConfig)
    {
        $this->body = $networkConfig;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/networks/create';
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
     * @throws \Tnhnclskn\Docker\API\Exception\NetworkCreateForbiddenException
     * @throws \Tnhnclskn\Docker\API\Exception\NetworkCreateNotFoundException
     * @throws \Tnhnclskn\Docker\API\Exception\NetworkCreateInternalServerErrorException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\NetworksCreatePostResponse201
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\NetworksCreatePostResponse201', 'json');
        }
        if (403 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\NetworkCreateForbiddenException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\NetworkCreateNotFoundException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\NetworkCreateInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}