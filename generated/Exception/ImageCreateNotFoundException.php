<?php

namespace Tnhnclskn\Docker\API\Exception;

class ImageCreateNotFoundException extends NotFoundException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('repository does not exist or no read access', 404);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}