<?php

namespace HCGCloud\Pterodactyl\Exceptions;

class AccessDeniedHttpException extends PterodactylSDKException
{
    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct('This action is unauthorized.');
    }
}
