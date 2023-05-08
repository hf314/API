<?php

namespace App\Http\Middleware;

use App\Models\Key;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('Authorization');
        $key = Key::where('key', $apiKey)->first();

        if (!$key) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
