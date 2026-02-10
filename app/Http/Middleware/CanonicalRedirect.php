<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanonicalRedirect
{
    /**
     * Enforce canonical scheme/host based on APP_URL.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (app()->environment('local')) {
            return $next($request);
        }

        $appUrl = config('app.url');
        if (!$appUrl) {
            return $next($request);
        }

        $parsed = parse_url($appUrl);
        if (!isset($parsed['scheme'], $parsed['host'])) {
            return $next($request);
        }

        $canonicalHost = $parsed['host'];
        $canonicalScheme = $parsed['scheme'];
        $canonicalPort = $parsed['port'] ?? null;

        $hostMatches = $request->getHost() === $canonicalHost;
        $schemeMatches = $request->getScheme() === $canonicalScheme;
        $portMatches = $canonicalPort === null || $request->getPort() === $canonicalPort;

        if ($hostMatches && $schemeMatches && $portMatches) {
            return $next($request);
        }

        $base = $canonicalScheme . '://' . $canonicalHost;
        if ($canonicalPort !== null) {
            $base .= ':' . $canonicalPort;
        }

        return redirect()->to($base . $request->getRequestUri(), 301);
    }
}
