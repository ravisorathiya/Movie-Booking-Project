<?php

namespace App\Http\Middleware;
use Closure;

class Adminsecurity
{
    public function handle($request, closure $next)
    {
        if(!session()->get('admin'))
        {
            return redirect('Admin-Authentication');
        }
        return $next($request);
    }
}