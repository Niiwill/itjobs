<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckRole
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
        $role = Auth::user()->role_id; 
        if(isset($role)){
            if($role == '0'){
                return redirect('/admin/candidate');
            }elseif ($role == '1') {
                return redirect('/admin/employer');
            }
        }else{
            return redirect('/pre-auth');
        }
    }
        
}
