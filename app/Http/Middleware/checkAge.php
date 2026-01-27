<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->has('age')) {
        return $next($request);
    }

    $age = (int) $request->age;

    if ($age < 13) {
        return redirect('/under-age');
    }

    if ($age < 18) {
        return redirect('/teen');
    }

    return $next($request);
    }
}
