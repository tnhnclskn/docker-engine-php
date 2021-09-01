<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class SystemVersion extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/version';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Tnhnclskn\Docker\API\Exception\SystemVersionInternalServerErrorException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\SystemVersion
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\SystemVersion', 'json');
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\SystemVersionInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}