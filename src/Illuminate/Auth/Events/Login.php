<?php

namespace Illuminate\Auth\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Auth\Authenticatable;

class Login
{
    use SerializesModels;
    
    /**
     * Create a new event instance.
     *
     * @param  string  $guard
     * @param  Authenticatable  $user
     * @param  bool  $remember
     * @return void
     */
    public function __construct(
        string $guard,
        Authenticatable $user, 
        bool $remember)
    {
        //
    }
}
