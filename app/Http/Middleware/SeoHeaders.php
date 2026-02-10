<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SeoHeaders
{
    /**
     * Add SEO-friendly headers for HTML responses.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $contentType = $response->headers->get('Content-Type', '');
        if (str_contains($contentType, 'text/html')) {
            $response->headers->set('X-Robots-Tag', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1');
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            $response->headers->set('Cache-Control', 'public, max-age=300');
            $response->headers->set('Vary', 'Accept-Encoding');

            $content = $response->getContent();
            if ($content !== false && $content !== null) {
                $etag = '"' . sha1($content) . '"';
                $response->setEtag($etag);
            }
            if (!$response->headers->has('Last-Modified')) {
                $response->setLastModified(now());
            }
        }

        return $response;
    }
}
