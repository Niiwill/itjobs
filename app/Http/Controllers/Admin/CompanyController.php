<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest('id')->get();

        return view('admin/company/index')->with('companies',$companies);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/company/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->user_id = Auth::id();
        $company->name = $request->name;
        $company->website = $request->website;
        $company->description = $request->description;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->slug=Str::slug($request->title, '-');

        if($request->hasFile('logo')){
            $imgfile = $request->file('logo');
            $custom_name = uniqid().'_'.$imgfile->getClientOriginalName();
            $request->file('logo')->storeAs('public/logos', $custom_name);
            $company->logo_path='logos/'.$custom_name;

        }

        $company->save();

        return redirect()->route('admin.companies.index')->with('status', 'Uspješno kreirana kompanija!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        
        return view('admin/company/edit')->with('company',$company);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->user_id = Auth::id();
        $company->name = $request->name;
        $company->website = $request->website;
        $company->description = $request->description;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->slug=Str::slug($request->title, '-');

        if($request->hasFile('logo')){
            $imgfile=$request->file('logo');
            $custom_name = uniqid().'_'.$imgfile->getClientOriginalName();
            $request->file('logo')->storeAs('public/logos', $custom_name);
            $company->logo_path='logos/'.$custom_name;

        }

        $company->save();


        return redirect()->route('admin.companies.index')->with('status', 'Uspješno izmenjena kompanija!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
