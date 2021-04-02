<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Image;
use Illuminate\Support\Facades\Storage;



class ArticleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function texts(Request $request)
    {
        $articles = Article::where('article_category_id', 1)->where('status', 1)->latest()->paginate(12);
        return view('it-price', compact('articles'));
     
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::latest()->get();
        return view('admin/article/index', compact('articles'));
     
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
        $article->description = $request->description;
        $article->text = $request->text;
        $article->article_category_id = $request->article_category_id;
        $article->article_event_date = $request->article_event_date;
        $article->article_event_time=$request->article_event_time;
        $article->location = $request->location;
        $article->slug=Str::slug($request->title, '-');
        $article->status = $request->status;

        if($request->hasFile('main_image')){
            $image = $request->file('main_image');
            $extension = $image->getClientOriginalExtension();
            $custom_name = time().'.'.$extension;
            // Resize and store image
            $resized_image = $this->resizeMainImage($image,$extension);
            Storage::put('public/articles/'.$custom_name, $resized_image);

            // Thumbnail
            $thumbnail = $this->createThumbnail($image,$extension);
            $path = Storage::put('public/articles/thumbnails/'.$custom_name, $thumbnail);

            $article->image_url = $custom_name;

        }
        $article->save();
        return redirect()->route('article.index')->with('status', 'Uspješno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug) {

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

        $article = Article::find($id);

        return view('article-show', compact('article','meseci'));
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin/article/edit', compact('article'));
     
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
        $article = Article::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->text = $request->text;
        $article->article_category_id = $request->article_category_id;
        $article->article_event_date = $request->article_event_date;
        $article->article_event_time=$request->article_event_time;
        $article->location = $request->location;
        $article->slug=Str::slug($request->title, '-');
        $article->status = $request->status;

        if($request->hasFile('main_image')){
            $image = $request->file('main_image');
            $extension = $image->getClientOriginalExtension();
            $custom_name = time().'.'.$extension;
            // Resize and store image
            $resized_image = $this->resizeMainImage($image,$extension);
            Storage::put('public/articles/'.$custom_name, $resized_image);

            // Thumbnail
            $thumbnail = $this->createThumbnail($image,$extension);
            $path = Storage::put('public/articles/thumbnails/'.$custom_name, $thumbnail);

            $article->image_url = $custom_name;
        }

        $article->save();
        return redirect()->route('article.index')->with('status', 'Uspješno kreiran!');
    }

    public function resizeMainImage($img,$extension)
    {
        $img = Image::make($img)->resize(750, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($extension,90);
        return $img;
    }

    public function createThumbnail($img,$extension)
    {
        $img = Image::make($img)->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($extension,90);
        return $img;
    }
}
