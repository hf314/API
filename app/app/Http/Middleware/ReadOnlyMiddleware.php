<?php

namespace App\Http\Middleware;

use App\Models\Key;
use Closure;

class ReadOnlyMiddleware
{
    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('authorization');
        $key = Key::where('key', $apiKey)->first();

        if (!$key) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $key = Key::where('key', $apiKey)->where('permissions', 'observer')->orWhere('permissions', 'editor')->first();
        if (!$key) {
            return response()->json(['message' => 'Access denied'], 403);
        }

        return $next($request);
    }
}
