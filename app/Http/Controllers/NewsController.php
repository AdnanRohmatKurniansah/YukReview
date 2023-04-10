<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.news.index', [
            "news" =>  News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug'  => 'required|unique:news',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]);  
     
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('news-images');
        } // jika tdk ada maka gunakan image lama

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);

        News::create($validatedData);
        
        return redirect('/dashboard/news')->with('success', 'News has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:2048 ',
            'body' => 'required'
        ]; 
        
        if($request->slug != $news->slug) {
          $rules['slug'] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('news-images');
        } 
        
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);

        News::where('id', $news->id)
             ->update($validatedData);
        
        return redirect('/dashboard/news')->with('success', 'News has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete($news->image);
        }
        
        News::destroy($news->id);
        return redirect('/dashboard/news')->with('success', 'News has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

