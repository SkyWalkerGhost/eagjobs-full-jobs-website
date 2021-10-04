<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $guards = [];

        if (! $request->expectsJson()) {
            switch (current($guards)) {
                case 'company':
                    return route('front.account.index');
                default:
                    return route('front.index');
            }
        }
    }
}
