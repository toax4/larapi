<?php

namespace App\Http\Middleware;

use App\Models\ApiLog;
use Closure;
use Illuminate\Http\Request;

class LogEndpoint
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        ApiLog::create([
            'ip_adress' => $request->ip(),
            'method' => $request->method(),
            'endpoint' => $request->path(),
            'data' => json_encode($request->all()),
        ]);

        // Récupère l'ip du client
        var_dump($request->getClientIp());
        var_dump($request->ip());
        // Récupère l'url du endpoint
        var_dump($request->getRequestUri());
        var_dump($request->path());
        var_dump($request->url());
        var_dump($request->fullUrl());
        // Récupère le type de méthode
        var_dump($request->method());
        // Récupère les paramètres de la requête
        var_dump($request->all());
        // dd($request);

        return $next($request);
    }
}
