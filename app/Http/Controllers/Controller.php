<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;




class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkPost(Request $request){

    	$role_id=$request->role_id;
    	if (empty(Auth::user()->role_id)){
			$user = Auth::user();
   			$user->role_id = $role_id;
   			$user->save();
   			if($role_id == '1'){
   				$company = new Company;
        		  $company->user_id =Auth::id();
        	    $company->name =Auth::user()->name;
        	    $company->save();
   			}
		}
		return redirect('/admin');
    }
}
