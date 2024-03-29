<?php

namespace Tnhnclskn\Docker\API\Exception;

class ConfigCreateConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('name conflicts with an existing object', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}