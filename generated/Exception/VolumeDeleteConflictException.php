<?php

namespace Tnhnclskn\Docker\API\Exception;

class VolumeDeleteConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Volume is in use and cannot be removed', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}