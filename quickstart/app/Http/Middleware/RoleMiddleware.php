<?php

namespace durgesh\Http\Middleware;

use Closure;


class RoleMiddleware {
   public function handle($request, Closure $next, $role) {

    return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
   }
}
