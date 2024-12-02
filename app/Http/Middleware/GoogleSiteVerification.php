<?php

namespace App\Http\Middleware;

use Closure;

class GoogleSiteVerification
{
    public function handle($request, Closure $next)
    {
        view()->share('googleSiteVerification', 'GsCwMwPQZfUHc_SXFjPI5mA0R9Ng7-Jur0VD62cu2nU');
        return $next($request);
    }
}
