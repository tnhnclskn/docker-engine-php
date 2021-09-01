<?php

namespace Tnhnclskn\Docker\API\Model;

class TaskSpecResources
{
    /**
     * An object describing a limit on resources which can be requested by a task.
     *
     * @var Limit|null
     */
    protected $limits;
    /**
    * An object describing the resources which can be advertised by a node and
    requested by a task.
    
    *
    * @var ResourceObject|null
    */
    protected $reservation;
    /**
     * An object describing a limit on resources which can be requested by a task.
     *
     * @return Limit|null
     */
    public function getLimits() : ?Limit
    {
        return $this->limits;
    }
    /**
     * An object describing a limit on resources which can be requested by a task.
     *
     * @param Limit|null $limits
     *
     * @return self
     */
    public function setLimits(?Limit $limits) : self
    {
        $this->limits = $limits;
        return $this;
    }
    /**
    * An object describing the resources which can be advertised by a node and
    requested by a task.
    
    *
    * @return ResourceObject|null
    */
    public function getReservation() : ?ResourceObject
    {
        return $this->reservation;
    }
    /**
    * An object describing the resources which can be advertised by a node and
    requested by a task.
    
    *
    * @param ResourceObject|null $reservation
    *
    * @return self
    */
    public function setReservation(?ResourceObject $reservation) : self
    {
        $this->reservation = $reservation;
        return $this;
    }
}