<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Job;
use App\Models\Company;

class EmployerController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $user = User::find($id);
        $jobs = Job::where("user_id", "=", $user->id)->get();

		return view('admin/employer/dashboard')->with('jobs',$jobs);

    }
      public function editMyCompany()
    {
        $user_id=Auth::user()->id;
        $company = Company::where('user_id', $user_id)->first();

        return view('admin/employer/mycompany')->with('company',$company);
    }
      public function updateMyCompany(Request $request)
    {
        $company = Company::where('user_id', Auth::id())->first();
        $company->name=$request->name;
        $company->description=$request->description;
        $company->phone=$request->phone;
        $company->email=$request->email;
        $company->adress=$request->adress;

        if($request->hasFile('logo')){
            $imgfile=$request->file('logo');
            $custom_name = $company->user_id.'.'.$imgfile->getClientOriginalExtension();
            $request->file('logo')->storeAs('public/logos', $custom_name);
            $company->logo_path='logos/'.$custom_name;

        }

        $company->save();

        return redirect()->route('mycompany.edit')->with('status', 'Uspješno sačuvani novi podaci!');
 ;


    }

  
}
