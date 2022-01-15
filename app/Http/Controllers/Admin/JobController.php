<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Category;
use App\Models\City;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Company;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route as RoutingRoute;

class JobController extends Controller
{

    // ADMIN JOBS PAGE
    public function index(Request $request)
    {   

        $search = $request->search;

        $jobs = Job::select('id', 'title','company_id', 'category_id', 'expired_at', 'slug', 'status')
            ->with(['company:id,name', 'category'])
            ->when($search, function ($query, $search) {
                return $query->search('title', $search);
            })
            ->latest()
            ->paginate(8);

        return view('admin/index')->with('jobs',$jobs);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $companies = Company::all();
        $cities = City::all();

        
        return view('admin/job/create')->with('categories',$categories)->with('tags',$tags)->with('companies',$companies)->with('cities',$cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|max:50',
        //     'company_id' => 'required',
        //     'category_id' => 'required',
        //     'level_id' => 'required',
        //     'city_id' => 'required',
        //     'type_id' => 'required',
        //     'expired_id' => 'required',
        //     'tags' => 'required|array'
        // ]);

        $job = new Job;
        $job->title = $request->title;
        $job->text = $request->text;
        $job->user_id = Auth::id();
        $job->company_id = $request->company_id;
        $job->category_id = $request->category_id;
        $job->level_id = $request->level_id;
        $job->city_id = $request->city_id;
        $job->type_id = $request->type_id;
        $job->status = $request->status;
        $job->expired_at = $request->expired_at;
        $job->slug=Str::slug($request->title, '-');

        $job->save();

        $job->tags()->sync($request->tags,false);

        return redirect()->route('admin.jobs.index')->with('status', 'Uspješno kreiran novi oglas!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $job = Job::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        $companies = Company::all();
        $cities = City::all();


        return view('admin/job/edit')->with('job',$job)->with('categories',$categories)->with('tags',$tags)->with('companies',$companies)->with('cities',$cities);

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

        $job = Job::find($id);
        $job->title = $request->title;
        $job->text = $request->text;
        $job->user_id = Auth::id();
        $job->company_id = $request->company_id;
        $job->category_id = $request->category_id;
        $job->level_id = $request->level_id;
        $job->city_id = $request->city_id;
        $job->type_id = $request->type_id;
        $job->status = $request->status;
        $job->expired_at = $request->expired_at;
        $job->slug=Str::slug($request->title, '-');
        $job->save();
    
        $job->tags()->sync($request->tags);

        return redirect()->route('admin.jobs.index')->with('status', 'Uspješno promijenjen oglas!');

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


    /**
     * Update status for expired jobs.
     * 
     */
    public function updateExpired()
    {
        Job::where('expired_at', '<', date('Y-m-d'))->update(array('status' => 0));

    }
}
