<?php

namespace Tnhnclskn\Docker\API\Exception;

class PluginUpgradeInternalServerErrorException extends \RuntimeException implements ServerException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('server error', 500);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}