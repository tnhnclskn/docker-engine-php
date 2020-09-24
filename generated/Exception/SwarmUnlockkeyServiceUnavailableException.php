<?php

namespace Tnhnclskn\Docker\API\Exception;

class SwarmUnlockkeyServiceUnavailableException extends \RuntimeException implements ServerException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('node is not part of a swarm', 503);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}