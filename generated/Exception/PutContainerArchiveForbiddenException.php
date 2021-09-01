<?php

namespace Tnhnclskn\Docker\API\Exception;

class PutContainerArchiveForbiddenException extends ForbiddenException
{
    private $errorResponse;
    public function __construct(\Tnhnclskn\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Permission denied, the volume or container rootfs is marked as read-only.', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}