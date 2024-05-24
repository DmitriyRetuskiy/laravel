<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Person
{

     static ?string $dir;

//    public function getDir(): ?string
//    {
//        return $this->dir;
//    }
//
//    public function setDir(?string $dir): void
//    {
//        $this->dir = $dir;
//    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        self::$dir = 'Controller';

        if(isset($request->roll))
        {
            return $next($request);
        }

        return \response('проверь миддле варе');

    }
}
