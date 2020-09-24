<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class SecretCreate extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Tnhnclskn\Docker\API\Model\SecretsCreatePostBody $body 
     */
    public function __construct(\Tnhnclskn\Docker\API\Model\SecretsCreatePostBody $body)
    {
        $this->body = $body;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/secrets/create';
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
     * @throws \Tnhnclskn\Docker\API\Exception\SecretCreateConflictException
     * @throws \Tnhnclskn\Docker\API\Exception\SecretCreateInternalServerErrorException
     * @throws \Tnhnclskn\Docker\API\Exception\SecretCreateServiceUnavailableException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\IdResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\IdResponse', 'json');
        }
        if (409 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\SecretCreateConflictException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\SecretCreateInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\SecretCreateServiceUnavailableException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}