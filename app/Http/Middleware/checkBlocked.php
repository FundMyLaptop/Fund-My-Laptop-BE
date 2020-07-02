<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class checkBlocked
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
      if(auth()->check() && auth()->user()->blocked_until && now()->lessThan(auth()->user()->blocked_until)){
        $blocked_days = now()->diffInDays(auth()->user()->blocked_until);
        $message = "Your account has been blocked,please contact an admin";
        auth()->logout();
        return redirect()->route('login')->withMessage($message);
      }

        return $next($request);
    }
}
