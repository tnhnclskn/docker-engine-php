<?php

namespace Tnhnclskn\Docker\API\Exception;

class NetworkConnectForbiddenException extends ForbiddenException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Operation not supported for swarm scoped networks', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}