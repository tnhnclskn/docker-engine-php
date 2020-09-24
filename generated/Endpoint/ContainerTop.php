<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class ContainerTop extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * On Unix systems, this is done by running the `ps` command. This endpoint
    is not supported on Windows.
    
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var string $ps_args The arguments to pass to `ps`. For example, `aux`
    * }
    */
    public function __construct(string $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/containers/{id}/top');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('ps_args'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('ps_args' => '-ef'));
        $optionsResolver->setAllowedTypes('ps_args', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Tnhnclskn\Docker\API\Exception\ContainerTopNotFoundException
     * @throws \Tnhnclskn\Docker\API\Exception\ContainerTopInternalServerErrorException
     *
     * @return null|\Tnhnclskn\Docker\API\Model\ContainersIdTopGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ContainersIdTopGetResponse200', 'json');
        }
        if (404 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ContainerTopNotFoundException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\ContainerTopInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}