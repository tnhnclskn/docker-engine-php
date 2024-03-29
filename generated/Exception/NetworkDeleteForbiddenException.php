<?php

namespace Tnhnclskn\Docker\API\Exception;

class NetworkDeleteForbiddenException extends ForbiddenException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('operation not supported for pre-defined networks', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}