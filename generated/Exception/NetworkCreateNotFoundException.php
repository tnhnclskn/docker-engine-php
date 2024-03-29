<?php

namespace Tnhnclskn\Docker\API\Exception;

class NetworkCreateNotFoundException extends NotFoundException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('plugin not found', 404);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}