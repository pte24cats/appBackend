<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;

class CheckForMaintenanceMode
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function handle($request, Closure $next)
    {
        if ($this->app->isDownForMaintenance()) {
            // Handle the case when the application is in maintenance mode.
        }

        return $next($request);
    }
}