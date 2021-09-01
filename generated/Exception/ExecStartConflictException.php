<?php

namespace Tnhnclskn\Docker\API\Exception;

class ExecStartConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Container is stopped or paused', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}