<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Company;
use App\Models\City;

class PublicController extends Controller
{
    
    
    // HOME PAGE
    public function home(Request $request)
    {   

        $meseci = $this->meseci;
        
        $top_companies = Cache::remember('top_companies', 60*24*15 ,function () {
            return Company::whereIn('id', [18, 3, 36, 55, 51, 54])->withCount('jobs')->orderBy('jobs_count', 'desc')->get();
        });

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
            return Job::with('company:id,name,user_id,logo_path')
                    ->with('city:id,name')
                    ->where('expired_at', '>=', date('Y-m-d'))
                    ->where('status', 1)
                    ->groupBy('company_id')
                    ->limit(6)
                    ->get();
        });

        // SECTION - IT EVENTS
        $it_events = Cache::remember('it_events',60*120, function () {
            return Article::select('id', 'slug', 'image_url', 'article_event_date', 'title', 'location')
                            ->orderBy('article_event_date','DESC')
                            ->where('article_category_id', 2)
                            ->limit(3)
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

        $popular_tags = Cache::rememberForever('popular_tags', function () {
            return Tag::withCount('jobs')->orderBy('jobs_count', 'desc')->limit(10)->get();
        });

        return view('home')
                ->with('top_companies', $top_companies)
                ->with('jobs', $jobs)
                ->with('tags', $tags)
                ->with('it_events', $it_events)
                ->with('meseci', $meseci)
                ->with('articles', $articles)
                ->with('popular_tags', $popular_tags)
                ->with(compact('programming_count', 'design_count', 'qa_count', 'intership_count'));
    }

    // ARTICLES PAGE
    public function articles(Request $request)
    {
        $meseci = $this->meseci;
        $articles = Article::where('article_category_id', 1)->where('status', 1)->latest()->paginate(12);

        return view('it-price', compact('articles','meseci'));
     
    }

    //SINGLE ARTICLE PAGE
    public function showArticle($id, $slug) {

        $meseci = $this->meseci;

        $article = Article::find($id);

        return view('article-show', compact('article','meseci'));
    }    

    // ARTICLES EVENTS
    public function events(Request $request)
    {
        $meseci = $this->meseci;
        $articles = Article::where('article_category_id', 1)->where('status', 1)->latest()->paginate(12);

        return view('it-price', compact('articles','meseci'));
    
    }

    //SINGLE EVENT PAGE
    public function showEvent($id, $slug) {

        $meseci = $this->meseci;

        $article = Article::find($id);

        return view('article-show', compact('article','meseci'));
    }    

    // SEARCH JOBS PAGE
    public function search(Request $request)
    {
        $tag = $request->input('tag_id');

        // Initialise array for sql where atributes if they are sends
        $where = [];

        if ($request->filled('cat_id')) $where['category_id'] = $request->cat_id;
      
        if ($request->filled('type_id')) $where['type_id'] = $request->type_id;
        
        if ($request->filled('level_id')) $where['level_id'] = $request->level_id;
        
        if ($request->filled('city_id')) $where['city_id'] = $request->city_id;

        //  Query for jobs filtering
        $jobs = Job::with('company:id,name,user_id,logo_path')->with('city:id,name');
            
        //  Add filter if user send tag_id
        if ($request->filled('tag_id')) {
            $jobs->whereHas('tags', function($q) use ($request){
                $q->where('tag_id', '=', $request->tag_id);
            });
        }
        
        //  Dodavanje where atributa u querija
        $jobs->where($where);

        // Order by
        if ($request->filled('order_id') && $request->order_id == 'expiration') {
                
            $now = date('Y-m-d H:i:s');

            //  Inicijalizacija querija za filter
            $expiredJobs = Job::with('company:id,name,user_id,logo_path')->with('city:id,name');
            //  Dodavanje pretrage po tag_id ako je izabran tag
            if ($request->filled('tag_id')) {
                $expiredJobs->whereHas('tags', function($q) use ($request){
                    $q->where('tag_id', '=', $request->tag_id);
                });
            }
            //  Dodavanje where atributa u querija
            $expiredJobs->where($where);

            $expiredJobs->selectRaw('*, 2 as order_num')->whereDate('expired_at', '<', $now);

            $jobs->selectRaw('*, 1 as order_num')->whereDate('expired_at', '>', $now);

            $jobs->union($expiredJobs)
                        ->orderBy('order_num', 'asc')
                        ->orderByRaw(
                            "CASE WHEN order_num = 1 THEN expired_at END ASC,
                             CASE WHEN order_num = 2 THEN expired_at END DESC"
                        );
                        
            
        }else{
            $jobs->latest();
        }
        
        $jobs = $jobs->paginate(10);

        $jobsCount = $jobs->count();
        $jobsTotal = $jobs->total(); 

        $cities = Cache::remember('cities', 60*24 ,function () {
            return City::all();
        });

        $tags = Cache::remember('tags', 60*24 ,function () {
            return Tag::all();
        });

        return view('poslovi')->with('jobs',$jobs)->with('jobsCount',$jobsCount)->with('jobsTotal',$jobsTotal)->with('cities',$cities)->with('tags',$tags);

    }

    // SINGLE JOB PAGE
    public function showJob($id, $slug) {

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

    // SINGLE JOB PAGE
    public function showCompany($id, $slug="") {

        $company = Company::find($id);
       
        $related_jobs = Job::where('company_id', '=', $id)->orderBy('created_at','desc')->limit(4)->get();

        return view('company-profile', compact('company','related_jobs'));
    } 

}
