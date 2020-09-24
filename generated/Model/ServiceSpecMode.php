<?php

namespace Tnhnclskn\Docker\API\Model;

class ServiceSpecMode
{
    /**
     * 
     *
     * @var ServiceSpecModeReplicated|null
     */
    protected $replicated;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $global;
    /**
     * 
     *
     * @return ServiceSpecModeReplicated|null
     */
    public function getReplicated() : ?ServiceSpecModeReplicated
    {
        return $this->replicated;
    }
    /**
     * 
     *
     * @param ServiceSpecModeReplicated|null $replicated
     *
     * @return self
     */
    public function setReplicated(?ServiceSpecModeReplicated $replicated) : self
    {
        $this->replicated = $replicated;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getGlobal()
    {
        return $this->global;
    }
    /**
     * 
     *
     * @param mixed $global
     *
     * @return self
     */
    public function setGlobal($global) : self
    {
        $this->global = $global;
        return $this;
    }
}