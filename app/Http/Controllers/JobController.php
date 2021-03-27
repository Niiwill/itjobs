<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
use App\Models\City;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Company;
use \Cache;
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
                $q->where('tag_id', '=', $request->tag_id)->where('status', 1);
            });

        }else{
            // Ako trazimo bez TAG ID
            $query = Job::where('status', 1)->with('tags');
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
        $tags = Tag::all();

        // Rezultatu prikljucujem jos ime GRADA i ime Kompanije za svaki oglas
        $jobs = $query->with('company:id,name,user_id,logo_path')->with('city:id,name')->latest()->paginate(10);
        $jobsCount = $jobs->count();
        $jobsTotal = $jobs->total();


        return view('poslovi')->with('jobs',$jobs)->with('jobsCount',$jobsCount)->with('jobsTotal',$jobsTotal)->with('cities',$cities)->with('tags',$tags);

    }

    public function indexAdmin()
    {
        $jobs = Job::select('id', 'title', 'category_id', 'expired_at', 'slug', 'status')
                    ->latest()
                    ->paginate(8);

        return view('admin/index')->with('jobs',$jobs);

    }

      public function home(Request $request)
    {   
        $meseci=array();
        $meseci[1] = "Januar";
        $meseci[2] = "Februar";
        $meseci[3] = "Mart";
        $meseci[4] = "April";
        $meseci[5] = "Maj";
        $meseci[6] = "Jun";
        $meseci[7] = "Jul";
        $meseci[8] = "Avgust";
        $meseci[9] = "Septembar";
        $meseci[10] = "Oktobar";
        $meseci[11] = "Novembar";
        $meseci[12] = "Decembar";

        
        $programming_count = Cache::remember('programming_count', 60*24 ,function () {
            return Job::where('category_id', 1)->count();
        });

        $design_count = Cache::remember('design_count', 60*24 ,function () {
            return Job::where('category_id', 2)->count();
        });

        $qa_count = Cache::remember('qa_count', 60*24 ,function () {
            return Job::where('category_id', 5)->count();
        });

        $intership_count = Cache::remember('intership_count', 60*24 ,function () {
            return Job::where('category_id', 8)->count();
        });

        // SECTION - FEATURED JOBS
        $jobs = Cache::remember('jobs', 60*120 ,function () {
            return Job::where('expired_at', '>=', date('Y-m-d'))
                    ->where('status', 1)
                    ->with('company:id,name,user_id,logo_path')
                    ->with('city:id,name')
                    ->groupBy('company_id')
                    ->limit(6)
                    ->get();
        });

        // SECTION - IT EVENTS
        $it_events = Cache::remember('it_events',60*120, function () {
            return Article::select('id','slug', 'article_event_date','title','location')
                            ->orderBy('article_event_date','DESC')
                            ->where('article_category_id', 2)
                            ->limit(4)
                            ->get();
        });

        // SECTION - ARTICLES
        $articles = Cache::remember('articles',60*120, function () { 
            return Article::select('id','slug','image_url', 'created_at','title','description')
                            ->where('article_category_id', 1)
                            ->where('status', 1)
                            ->latest()
                            ->limit(3)
                            ->get();
        });

        $tags = Cache::rememberForever('tags', function () {
            return Tag::all();
        });

        return view('home')
                ->with('jobs',$jobs)
                ->with('tags',$tags)
                ->with('it_events',$it_events)
                ->with('meseci',$meseci)
                ->with('articles',$articles)
                ->with(compact('programming_count', 'design_count', 'qa_count', 'intership_count'));
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

        return redirect()->route('admin')->with('status', 'Uspješno kreiran novi oglas!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug) {

        $job = Job::where('id', $id)
                    ->with(['level:id,name','company:id,user_id,name,logo_path,website','type:id,name','city:id,name'])
                    ->first();

        $related_jobs = Job::whereHas('tags', function ($q) use ($job) {
                        return $q->whereIn('name', $job->tags->pluck('name')); 
                    })
                    ->where('id', '!=', $job->id)
                    ->where('status', 1)
                    ->with(['company:id,user_id,name,logo_path','city:id,name'])
                    ->limit(2)
                    ->get();

        return view('single', compact('job','related_jobs'));
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
        $job->save();
    
        $job->tags()->sync($request->tags);

        return redirect()->route('admin')->with('status', 'Uspješno promijenjen oglas!');

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
