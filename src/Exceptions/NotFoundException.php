<?php

namespace HCGCloud\Pterodactyl\Exceptions;

class NotFoundException extends PterodactylSDKException
{
    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct('The resource you are looking for could not be found.');
    }
}
