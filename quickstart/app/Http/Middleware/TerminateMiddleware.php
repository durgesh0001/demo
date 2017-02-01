<?php

namespace durgesh\Http\Middleware;

use Closure;

class TerminateMiddleware {
   public function handle($request, Closure $next) {
      echo "Executing statements of handle method of TerminateMiddleware.";
          return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
      return $next($request);
   }
   
   public function terminate($request, $response){
      echo "<br>Executing statements of terminate method of TerminateMiddleware.";
   }
}
