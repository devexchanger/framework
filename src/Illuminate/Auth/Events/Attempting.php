<?php

namespace Illuminate\Auth\Events;

class Attempting
{
    /**
     * Create a new event instance.
     *
     * @param  string  $guard
     * @param  array  $credentials
     * @param  bool  $remember
     * @return void
     */
    public function __construct(
        string $guard,
        array $credentials,
        bool $remember)
    {
        //
    }
}
