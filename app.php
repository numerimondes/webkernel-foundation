<?php declare(strict_types=1);
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

require_once __DIR__ . '/../webkernel/boot/functions/load-fn-globals.php';
require_once __DIR__ . '/../webkernel/boot/functions/load-fn-paths.php';

return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(web: __DIR__ . '/../routes/web.php', commands: __DIR__ . '/../routes/console.php', health: '/up')
  ->withMiddleware(function (Middleware $middleware): void {
    //
  })
  ->withExceptions(function (Exceptions $exceptions): void {
    //
  })
  ->create();
