<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FeatureEnabled
{
    public function handle(Request $request, Closure $next, string $feature)
    {
        if (!config("features.$feature")) {
            abort(404);
        }

        return $next($request);
    }
}
