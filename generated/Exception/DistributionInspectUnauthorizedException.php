<?php

namespace Tnhnclskn\Docker\API\Exception;

class DistributionInspectUnauthorizedException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Failed authentication or no image found', 401);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}