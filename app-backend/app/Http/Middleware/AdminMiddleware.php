<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle(Request $request, Closure $next)
        {
            if (! $request->user() || ! $request->user()->admin) {
                // Redirect non-admin users to a different route or show a 403 error
                return redirect('home');
            }
    
            return $next($request);
        }
}
