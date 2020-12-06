<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CandidateController extends Controller
{
    public function index()
    {

		if (empty(Auth::user()->role_id)){
			
			$user = Auth::user();
   			$user->role_id = '0';
   			$user->save();
		}

		return view('admin/candidate/dashboard');



	}
}
