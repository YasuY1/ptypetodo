<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $data = [
            ['name'=>'taro','mail'=>'taro@yamada'],
            ['name'=>'hanako','mail'=>'hanako@flower'],
            ['name'=>'sachiko','mail'=>'sachiko@happy'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
