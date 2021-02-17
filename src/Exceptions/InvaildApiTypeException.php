<?php

namespace HCGCloud\Pterodactyl\Exceptions;

class InvaildApiTypeException extends PterodactylSDKException
{
    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct('The apiType is invaild.');
    }
}
