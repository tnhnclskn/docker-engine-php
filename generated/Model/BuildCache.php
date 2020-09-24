<?php

namespace Tnhnclskn\Docker\API\Model;

class BuildCache
{
    /**
     * 
     *
     * @var string|null
     */
    protected $iD;
    /**
     * 
     *
     * @var string|null
     */
    protected $parent;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $inUse;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shared;
    /**
     * Amount of disk space used by the build cache (in bytes).
     *
     * @var int|null
     */
    protected $size;
    /**
    * Date and time at which the build cache was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $createdAt;
    /**
    * Date and time at which the build cache was last used in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $lastUsedAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $usageCount;
    /**
     * 
     *
     * @return string|null
     */
    public function getID() : ?string
    {
        return $this->iD;
    }
    /**
     * 
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD) : self
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParent() : ?string
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param string|null $parent
     *
     * @return self
     */
    public function setParent(?string $parent) : self
    {
        $this->parent = $parent;
        return $this;
    }
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
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getInUse() : ?bool
    {
        return $this->inUse;
    }
    /**
     * 
     *
     * @param bool|null $inUse
     *
     * @return self
     */
    public function setInUse(?bool $inUse) : self
    {
        $this->inUse = $inUse;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShared() : ?bool
    {
        return $this->shared;
    }
    /**
     * 
     *
     * @param bool|null $shared
     *
     * @return self
     */
    public function setShared(?bool $shared) : self
    {
        $this->shared = $shared;
        return $this;
    }
    /**
     * Amount of disk space used by the build cache (in bytes).
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * Amount of disk space used by the build cache (in bytes).
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
    /**
    * Date and time at which the build cache was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
    * Date and time at which the build cache was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string|null $createdAt
    *
    * @return self
    */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
    * Date and time at which the build cache was last used in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getLastUsedAt() : ?string
    {
        return $this->lastUsedAt;
    }
    /**
    * Date and time at which the build cache was last used in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string|null $lastUsedAt
    *
    * @return self
    */
    public function setLastUsedAt(?string $lastUsedAt) : self
    {
        $this->lastUsedAt = $lastUsedAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsageCount() : ?int
    {
        return $this->usageCount;
    }
    /**
     * 
     *
     * @param int|null $usageCount
     *
     * @return self
     */
    public function setUsageCount(?int $usageCount) : self
    {
        $this->usageCount = $usageCount;
        return $this;
    }
}