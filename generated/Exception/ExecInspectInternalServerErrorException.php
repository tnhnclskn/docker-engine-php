<?php

namespace Tnhnclskn\Docker\API\Exception;

class ExecInspectInternalServerErrorException extends InternalServerErrorException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Server error', 500);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}