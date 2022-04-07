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
        $jobs = Job::with(['company:id,name', 'category'])->select('id', 'title','company_id', 'category_id', 'expired_at', 'slug', 'status')->orderBy('created_at', 'desc')->get();
        return view('admin/index')->with('jobs',$jobs);

    }

    // ADMIN JOBS PAGE
    public function datatables(Request $request)
    {   
        $columns = [0 => 'title', 1 => 'company_id', 2 => 'expired_at', 3 => 'status'];

        $draw = $request->draw;
        $start = $request->start;
        $paginate = $request->length;
        $order_field = $columns[$request->order[0]['column']];
        $order_direction = $request->order[0]['dir'];


        // Total jobs
        $jobs_total = Job::count();
     
        // Filter jobs data
        $query = Job::with(['company:id,name', 'category']);
        // Select
        $query->select('id', 'title','company_id', 'category_id', 'expired_at', 'slug', 'status');

        // Where
        foreach($columns as $index => $column){
            $search_value = $request->columns[$index]['search']['value'];

            if($search_value == '') continue;

            if($column == 'status'){
                $query->where('status','=', $search_value);
                continue;
            }

            if($column == 'company_id'){
                $query->whereHas('company', function ($query) use ($search_value) {
                    return $query->where('name', 'LIKE', "%{$search_value}%") ;
                });
                continue;
            }

            $query->where($column, 'LIKE', "%{$search_value}%") ;
        }

        // Order
        $query->orderBy($order_field, $order_direction);
        // Pagination

        $jobs_filtered = $query->count();

        $jobs = $query->offset($start)->limit($paginate)->get();

        
        
        $data = [];

        foreach($jobs as $job){
            $item = [];
            $item['title'] = $job->title;
            $item['company_name'] = $job->company->name;
            $item['expired_at'] =  date('d/m/y', strtotime($job->expired_at));
            $item['live_url'] =  route('job.single', ['id' => $job->id, 'slug' => $job->slug]); 
            $item['edit_url'] =  route('admin.jobs.edit', $job->id);
            $item['status'] = ($job->status) ? 'aktivan' : 'neaktivan' ;

            $data[] = $item;
        }
            
        return response()->json([
            "draw" => (int)$draw,
            "recordsTotal" => $jobs_total,
            "recordsFiltered" => $jobs_filtered,
            "data" => $data
        ]);

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
