<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    public function handle($request, Closure $next)
    {
        $token = $request->header('Authorization');

        if ($token != 'ваш_условный_токен') {
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
