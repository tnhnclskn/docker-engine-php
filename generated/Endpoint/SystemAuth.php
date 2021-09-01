<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class SystemAuth extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    /**
    * Validate credentials for a registry and, if available, get an identity
    token for accessing the registry without password.
    
    *
    * @param \Tnhnclskn\Docker\API\Model\AuthConfig $authConfig Authentication to check
    */
    public function __construct(\Tnhnclskn\Docker\API\Model\AuthConfig $authConfig)
    {
        $this->body = $authConfig;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/auth';
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
     * @throws \Tnhnclskn\Docker\API\Exception\SystemAuthInternalServerErrorException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\AuthPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\AuthPostResponse200', 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\SystemAuthInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}