<?php

namespace Tnhnclskn\Docker\API\Exception;

class PluginUpgradeNotFoundException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('plugin not installed', 404);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}