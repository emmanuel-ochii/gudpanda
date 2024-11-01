<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);

        $response = $next($request);

        // Set CORS headers
        $response->headers->set('Access-Control-Allow-Origin', ['http://localhost:8000', 'http://127.0.0.1:8000']);
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        return $response;
    }

    // public function handle(Request $request, Closure $next)
    // {
    //     // Define allowed origins
    //     $allowedOrigins = ['http://localhost:8000', 'http://127.0.0.1:8000'];
    //     $origin = $request->headers->get('origin');

    //     // Check if the request origin is allowed
    //     if (in_array($origin, $allowedOrigins)) {
    //         if ($request->isMethod('OPTIONS')) {
    //             $response = response('', 200);
    //             $response->headers->set('Access-Control-Allow-Origin', $origin);
    //             $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    //             $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    //             return $response;
    //         }

    //         // Continue processing for non-OPTIONS requests
    //         $response = $next($request);
    //         $response->headers->set('Access-Control-Allow-Origin', $origin);
    //         $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    //         $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

    //         return $response;
    //     }

    //     // Block requests from non-allowed origins
    //     return response('Unauthorized', 403);
    // }

}
