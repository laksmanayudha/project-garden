<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsDesignerOrGardenerMiddleware
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
        $allowed_role = ['Designer', 'Gardener'];
        $user = auth()->user();
        if (in_array($user->role->name, $allowed_role)){
            return $next($request);
        }

        return back();
    }
}
