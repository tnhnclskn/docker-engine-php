<?php

namespace Tnhnclskn\Docker\API\Model;

class SystemInfoDefaultAddressPoolsItem
{
    /**
     * The network address in CIDR format
     *
     * @var string|null
     */
    protected $base;
    /**
     * The network pool size
     *
     * @var int|null
     */
    protected $size;
    /**
     * The network address in CIDR format
     *
     * @return string|null
     */
    public function getBase() : ?string
    {
        return $this->base;
    }
    /**
     * The network address in CIDR format
     *
     * @param string|null $base
     *
     * @return self
     */
    public function setBase(?string $base) : self
    {
        $this->base = $base;
        return $this;
    }
    /**
     * The network pool size
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * The network pool size
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
}