<?php

namespace Tnhnclskn\Docker\API\Endpoint;

class PutContainerArchive extends \Tnhnclskn\Docker\API\Runtime\Client\BaseEndpoint implements \Tnhnclskn\Docker\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Upload a tar archive to be extracted to a path in the filesystem of container id.
    *
    * @param string $id ID or name of the container
    * @param string|resource|\Psr\Http\Message\StreamInterface $inputStream The input stream must be a tar archive compressed with one of the
    following algorithms: `identity` (no compression), `gzip`, `bzip2`,
    or `xz`.
    
    * @param array $queryParameters {
    *     @var string $path Path to a directory in the container to extract the archive’s contents into. 
    *     @var string $noOverwriteDirNonDir If `1`, `true`, or `True` then it will be an error if unpacking the
    given content would cause an existing directory to be replaced with
    a non-directory and vice versa.
    
    *     @var string $copyUIDGID If `1`, `true`, then it will copy UID/GID maps to the dest file or
    dir
    
    * }
    */
    public function __construct(string $id, $inputStream, array $queryParameters = array())
    {
        $this->id = $id;
        $this->body = $inputStream;
        $this->queryParameters = $queryParameters;
    }
    use \Tnhnclskn\Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/containers/{id}/archive');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), $this->body);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('path', 'noOverwriteDirNonDir', 'copyUIDGID'));
        $optionsResolver->setRequired(array('path'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('path', array('string'));
        $optionsResolver->setAllowedTypes('noOverwriteDirNonDir', array('string'));
        $optionsResolver->setAllowedTypes('copyUIDGID', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Tnhnclskn\Docker\API\Exception\PutContainerArchiveBadRequestException
     * @throws \Tnhnclskn\Docker\API\Exception\PutContainerArchiveForbiddenException
     * @throws \Tnhnclskn\Docker\API\Exception\PutContainerArchiveNotFoundException
     * @throws \Tnhnclskn\Docker\API\Exception\PutContainerArchiveInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\PutContainerArchiveBadRequestException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (403 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\PutContainerArchiveForbiddenException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\PutContainerArchiveNotFoundException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Tnhnclskn\Docker\API\Exception\PutContainerArchiveInternalServerErrorException($serializer->deserialize($body, 'Tnhnclskn\\Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}