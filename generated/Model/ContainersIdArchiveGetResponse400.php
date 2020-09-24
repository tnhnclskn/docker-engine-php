<?php

namespace Tnhnclskn\Docker\API\Model;

class ContainersIdArchiveGetResponse400
{
    /**
    * The error message. Either "must specify path parameter"
    (path cannot be empty) or "not a directory" (path was
    asserted to be a directory but exists as a file).
    
    *
    * @var string|null
    */
    protected $message;
    /**
    * The error message. Either "must specify path parameter"
    (path cannot be empty) or "not a directory" (path was
    asserted to be a directory but exists as a file).
    
    *
    * @return string|null
    */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
    * The error message. Either "must specify path parameter"
    (path cannot be empty) or "not a directory" (path was
    asserted to be a directory but exists as a file).
    
    *
    * @param string|null $message
    *
    * @return self
    */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}