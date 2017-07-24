<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;
use App\User as User;


class CheckIfRestaurant {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if (Auth::user()->restaurants->count() > 0) {
            //error_log("entra");
        }else{
            return redirect('home')->with('message','No tienes ningún restaurante');
        }
            return $next($request);

    }
}
