<?php

namespace Tnhnclskn\Docker\API\Model;

class Limit
{
    /**
     * 
     *
     * @var int|null
     */
    protected $nanoCPUs;
    /**
     * 
     *
     * @var int|null
     */
    protected $memoryBytes;
    /**
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     *
     * @var int|null
     */
    protected $pids = 0;
    /**
     * 
     *
     * @return int|null
     */
    public function getNanoCPUs() : ?int
    {
        return $this->nanoCPUs;
    }
    /**
     * 
     *
     * @param int|null $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(?int $nanoCPUs) : self
    {
        $this->nanoCPUs = $nanoCPUs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMemoryBytes() : ?int
    {
        return $this->memoryBytes;
    }
    /**
     * 
     *
     * @param int|null $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(?int $memoryBytes) : self
    {
        $this->memoryBytes = $memoryBytes;
        return $this;
    }
    /**
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     *
     * @return int|null
     */
    public function getPids() : ?int
    {
        return $this->pids;
    }
    /**
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     *
     * @param int|null $pids
     *
     * @return self
     */
    public function setPids(?int $pids) : self
    {
        $this->pids = $pids;
        return $this;
    }
}