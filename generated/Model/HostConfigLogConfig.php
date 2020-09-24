<?php

namespace Tnhnclskn\Docker\API\Model;

class HostConfigLogConfig
{
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $config;
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getConfig() : ?iterable
    {
        return $this->config;
    }
    /**
     * 
     *
     * @param string[]|null $config
     *
     * @return self
     */
    public function setConfig(?iterable $config) : self
    {
        $this->config = $config;
        return $this;
    }
}