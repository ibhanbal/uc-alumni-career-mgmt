<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $verification)
    {
        if (! $request->user()->verificationStatus($verification)) {
            return redirect('/verification');
        }

        return $next($request);
    }
}
