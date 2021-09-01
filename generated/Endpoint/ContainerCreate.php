<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class ContainerCreate extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param \Tnhnclskn\Docker\API\Model\ContainersCreatePostBody $body Container to create
    * @param array $queryParameters {
    *     @var string $name Assign the specified name to the container. Must match
    `/?[a-zA-Z0-9][a-zA-Z0-9_.-]+`.
    
    * }
    */
    public function __construct(\Tnhnclskn\Docker\API\Model\ContainersCreatePostBody $body, array $queryParameters = array())
    {
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/containers/create';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('name'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('name', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Tnhnclskn\Docker\API\Exception\ContainerCreateBadRequestException
     * @throws \Tnhnclskn\Docker\API\Exception\ContainerCreateNotFoundException
     * @throws \Tnhnclskn\Docker\API\Exception\ContainerCreateConflictException
     * @throws \Tnhnclskn\Docker\API\Exception\ContainerCreateInternalServerErrorException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\ContainersCreatePostResponse201
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ContainersCreatePostResponse201', 'json');
        }
        if (400 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ContainerCreateBadRequestException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ContainerCreateNotFoundException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (409 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ContainerCreateConflictException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ContainerCreateInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}