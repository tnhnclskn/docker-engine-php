<?php

namespace Tnhnclskn\Docker\API\Model;

class NetworkingConfig
{
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @var EndpointSettings[]|null
     */
    protected $endpointsConfig;
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @return EndpointSettings[]|null
     */
    public function getEndpointsConfig() : ?iterable
    {
        return $this->endpointsConfig;
    }
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @param EndpointSettings[]|null $endpointsConfig
     *
     * @return self
     */
    public function setEndpointsConfig(?iterable $endpointsConfig) : self
    {
        $this->endpointsConfig = $endpointsConfig;
        return $this;
    }
}