<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $umur = $request->session()->get('age'); //mendapatkan nilai umur

        if ($umur >= 18) {
            return $next($request);
        }

        return redirect()
        ->route('umur.form')
        ->with('fail', 'Umur anda tidak mencukupi');

    }
}
