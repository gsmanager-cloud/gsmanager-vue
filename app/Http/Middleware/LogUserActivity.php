<?php

namespace App\Http\Middleware;

use Closure;
use GSManager\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogUserActivity
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->isMethod('get') && !$request->ajax()) {
            // Игнорируем только AJAX и внутренние запросы
            $this->logPageView($request);
        }

        return $response;
    }

    protected function logPageView(Request $request): void
    {
        try {
            log_user_action('page.view', [
                'path'     => $request->path(),
                'query'    => $request->query(),
            ]);
        } catch (\Throwable $e) {
            logger()->warning('Log middleware failed: ' . $e->getMessage());
        }
    }
}
