<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TagController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $tags = Tag::select('id','name','icon')->get();

        return view('admin/tag/index')->with('tags',$tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tag/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;

        if($request->hasFile('icon')){
          
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = strtolower($request->name).'.'.$extension;
            $filename = str_replace(' ', '_', $filename);

            $icon = $this->createIcon($file, $extension);
            Storage::put('public/tags/'.$filename, $icon);

            $tag->icon = $filename;
        }

        $tag->save();

        return redirect()->route('admin.tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('admin/tag/edit')->with('tag',$tag);

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

        $tag = Tag::find($id);
        $tag->name = $request->name;

        if($request->hasFile('icon')){
          
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = strtolower($request->name).'.'.$extension;
            $filename = str_replace(' ', '_', $filename);

            $icon = $this->createIcon($file, $extension);
            Storage::put('public/tags/'.$filename, $icon);

            $tag->icon = $filename;
        }

        $tag->save();

        return redirect()->route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $tag = Tag::find($id);
        Storage::delete('public/tags/' . $tag->icon);

        $tag->jobs()->detach();
        $tag->delete();
    
        return redirect()->route('admin.tags.index')->with('status', 'Uspešno izbrisan tag!');

    }

    public function createIcon($img, $extension)
    {
        $img = Image::make($img)->resize(null, 28, function ($constraint) {
            $constraint->aspectRatio();
        })->encode($extension);
        return $img;
    }
}
