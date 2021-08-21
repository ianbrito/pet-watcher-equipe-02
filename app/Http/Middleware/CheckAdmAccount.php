<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmAccount
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
      if(!auth()->check()){
         return redirect()->route('login');
      }

      $userType = auth()->user()->tipo_conta;
      if($userType == '1'){
         return $next($request);
      }
   }
}
