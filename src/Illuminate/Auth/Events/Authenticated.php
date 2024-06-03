<?php

namespace Illuminate\Auth\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Auth\Authenticatable;

class Authenticated
{
    use SerializesModels;

    
    /**
     * Create a new event instance.
     *
     * @param  string  $guard
     * @param  Authenticatable  $user
     * @return void
     */
    public function __construct(
        public string $guard,
        public Authenticatable $user)
    {
        //
    }
}
