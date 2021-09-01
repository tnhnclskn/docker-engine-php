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
    * The mode used for services with a finite number of tasks that run
    to a completed state.
    
    *
    * @var ServiceSpecModeReplicatedJob|null
    */
    protected $replicatedJob;
    /**
    * The mode used for services which run a task to the completed state
    on each valid node.
    
    *
    * @var mixed|null
    */
    protected $globalJob;
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
    /**
    * The mode used for services with a finite number of tasks that run
    to a completed state.
    
    *
    * @return ServiceSpecModeReplicatedJob|null
    */
    public function getReplicatedJob() : ?ServiceSpecModeReplicatedJob
    {
        return $this->replicatedJob;
    }
    /**
    * The mode used for services with a finite number of tasks that run
    to a completed state.
    
    *
    * @param ServiceSpecModeReplicatedJob|null $replicatedJob
    *
    * @return self
    */
    public function setReplicatedJob(?ServiceSpecModeReplicatedJob $replicatedJob) : self
    {
        $this->replicatedJob = $replicatedJob;
        return $this;
    }
    /**
    * The mode used for services which run a task to the completed state
    on each valid node.
    
    *
    * @return mixed
    */
    public function getGlobalJob()
    {
        return $this->globalJob;
    }
    /**
    * The mode used for services which run a task to the completed state
    on each valid node.
    
    *
    * @param mixed $globalJob
    *
    * @return self
    */
    public function setGlobalJob($globalJob) : self
    {
        $this->globalJob = $globalJob;
        return $this;
    }
}