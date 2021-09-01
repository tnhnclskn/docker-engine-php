<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class ExecInspect extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Return low-level information about an exec instance.
     *
     * @param string $id Exec instance ID
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/exec/{id}/json');
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
     * @throws \Tnhnclskn\Docker\API\Exception\ExecInspectNotFoundException
     * @throws \Tnhnclskn\Docker\API\Exception\ExecInspectInternalServerErrorException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\ExecIdJsonGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ExecIdJsonGetResponse200', 'json');
        }
        if (404 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ExecInspectNotFoundException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ExecInspectInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}