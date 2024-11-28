<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/principale/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/principale/vendor/autoload.php';

// Bootstrap Laravel and handleRequest the request...
(require_once __DIR__.'/principale/bootstrap/app.php')
    ->handleRequest(Request::capture());
