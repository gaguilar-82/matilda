<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UsersAccounts
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if ($user->role !== 'user' || $user->role !== 'admin') {
            //return $this->jsonErrorResponse('You are not allowed to access this resource.', [], 403);
        }
        
        return $next($request);
    }
}
