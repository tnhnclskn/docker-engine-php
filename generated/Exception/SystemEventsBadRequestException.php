<?php

namespace Tnhnclskn\Docker\API\Exception;

class SystemEventsBadRequestException extends BadRequestException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('bad parameter', 400);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}