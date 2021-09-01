<?php

namespace Tnhnclskn\Docker\API\Exception;

class SwarmInitServiceUnavailableException extends ServiceUnavailableException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('node is already part of a swarm', 503);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}