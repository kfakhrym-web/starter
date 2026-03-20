<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $secretKey = 'Shamel_Shopping_Secret_2026'; 

    // التأكد إن المفتاح موجود في الـ Header وصحيح
    if ($request->header('X-Api-Key') !== $secretKey) {
        return response()->json([
            'message' => 'Invalid Secret Key. Access Denied.'
        ], 403);
    }

    return $next($request);
    }
}
