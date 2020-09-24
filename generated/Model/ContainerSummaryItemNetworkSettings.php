<?php

namespace Tnhnclskn\Docker\API\Model;

class ContainerSummaryItemNetworkSettings
{
    /**
     * 
     *
     * @var EndpointSettings[]|null
     */
    protected $networks;
    /**
     * 
     *
     * @return EndpointSettings[]|null
     */
    public function getNetworks() : ?iterable
    {
        return $this->networks;
    }
    /**
     * 
     *
     * @param EndpointSettings[]|null $networks
     *
     * @return self
     */
    public function setNetworks(?iterable $networks) : self
    {
        $this->networks = $networks;
        return $this;
    }
}