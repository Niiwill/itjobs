<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;



class ArticleController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles=Article::latest()->limit(4)
                ->get();
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    	return view('admin/article/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
            'title' => 'required|max:100',
            'text' => 'required',
            'main_image' => 'required',
            'article_category_id' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->text = $request->text;
        $article->article_category_id = $request->article_category_id;
        $article->article_event_date = $request->article_event_date;
        $article->article_event_time=$request->article_event_time;
        $article->location = $request->location;
        $article->slug=Str::slug($request->title, '-');

         if($request->hasFile('main_image')){
            $image=$request->file('main_image');
            $custom_name = time().'.'.$image->getClientOriginalExtension();
            $request->file('main_image')->storeAs('public/img/articles', $custom_name);
            $article->image_url='img/articles/'.$custom_name;
        }

        $article->save();

        return redirect()->route('adminEmp')->with('status', 'Uspješno kreiran!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug) {

        $article = Article::find($id);

        return view('article-show', compact('article'));
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     
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
