<?php

namespace Tnhnclskn\Docker\API\Exception;

class ContainerArchiveBadRequestException extends BadRequestException
{
    private $containersIdArchiveGetResponse400;
    public function __construct(\Tnhnclskn\Docker\API\Model\ContainersIdArchiveGetResponse400 $containersIdArchiveGetResponse400)
    {
        parent::__construct('Bad parameter', 400);
        $this->containersIdArchiveGetResponse400 = $containersIdArchiveGetResponse400;
    }
    public function getContainersIdArchiveGetResponse400()
    {
        return $this->containersIdArchiveGetResponse400;
    }
}