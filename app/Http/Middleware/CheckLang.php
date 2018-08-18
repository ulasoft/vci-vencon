<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLang
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
        if($request->hasCookie('lang')){
            $lang = $request->cookie('lang');
        }else{
            $lang = 'en';
        }
        return response(view('site.redirect',compact('lang')))->cookie(
            'lang', $lang, '43200'
        );
        //return ;
        //return $next($request);
    }
}
