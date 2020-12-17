<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
use App\Models\City;
use App\Models\Tag;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // Ako trazim po TAG ID ona koristim whereHas
        if ($request->filled('tag_id')) {
            $query = Job::whereHas('tags', function($q) use ($request){
                $q->where('tag_id', '=', $request->tag_id);
            });

        }else{
            // Ako trazimo bez TAG ID
            $query = Job::with('tags');
        }

        // Dodatna provera filtera ako korisnik posalje
        if ($request->filled('cat_id')) {
            $query->where('category_id',$request->cat_id);
        }
        if ($request->filled('type_id')) {
            $query->where('type_id',$request->type_id);
        }
        if ($request->filled('level_id')) {
            $query->where('level_id',$request->level_id);
        }
        if ($request->filled('city_id')) {
            $query->where('city_id',$request->city_id);
        }

        $cities=City::all();
        $tags=Tag::all();

        // Rezultatu prikljucujem jos ime GRADA i ime Kompanije za svaki oglas
        $jobs = $query->with('company:id,name,user_id,logo_path')->with('city:id,name');
        $jobsCount = $jobs->count();


        return view('poslovi')->with('jobs',$jobs)->with('jobsCount',$jobsCount)->with('cities',$cities)->with('tags',$tags);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('admin/job/create')->with('categories',$categories)->with('tags',$tags);
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
        $job->title = ucwords(mb_strtolower($request->title));
        $job->text = $request->text;
        $job->user_id = Auth::id();
        $job->category_id = $request->category_id;
        $job->level_id = $request->level_id;
        $job->city_id = $request->city_id;
        $job->type_id = $request->type_id;
        $job->expired_at = $request->expired_at;
        $job->slug=Str::slug($request->title, '-');

        $job->save();

        $job->tags()->sync($request->tags,false);

        return redirect()->route('adminEmp')->with('status', 'Uspješno kreiran novi oglas!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug) {

        $job = Job::where('id', $id)->with(['level:id,name','company:id,user_id,name,logo_path','type:id,name','city:id,name'])->first();

        return view('single', compact('job'));
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $job=Job::findOrFail($id);
        $categories=Category::all();
        $tags=Tag::all();

        return view('admin/job/edit')->with('job',$job)->with('categories',$categories)->with('tags',$tags);

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
        $job->title = ucwords(mb_strtolower($request->title));
        $job->text = $request->text;
        $job->user_id = Auth::id();
        $job->category_id = $request->category_id;
        $job->level_id = $request->level_id;
        $job->city_id = $request->city_id;
        $job->type_id = $request->type_id;
        $job->expired_at = $request->expired_at;
        $job->save();
    
        $job->tags()->sync($request->tags);

        return redirect()->route('adminEmp')->with('status', 'Uspješno promijenjen oglas!');

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
