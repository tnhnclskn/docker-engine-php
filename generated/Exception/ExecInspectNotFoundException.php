<?php

namespace Tnhnclskn\Docker\API\Exception;

class ExecInspectNotFoundException extends NotFoundException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('No such exec instance', 404);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}