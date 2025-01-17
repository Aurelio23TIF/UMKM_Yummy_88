<?php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        // ... other middlewares
        'check.role' => \App\Http\Middleware\CheckUserRole::class,
    ];
}
?>
