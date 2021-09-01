<?php

namespace Tnhnclskn\Docker\API\Exception;

class ServiceCreateForbiddenException extends ForbiddenException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('network is not eligible for services', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}