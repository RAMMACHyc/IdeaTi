<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Str;
use App\Models\Post;


class PostsController extends Controller
{
    
    public function index()
    {
       
        return view('post.index') 
        ->with('posts',Post::get());
    }

  
    public function create() { 
        
        return view("post.create");
        }
    
        public function store(Request $request) {
    
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:5048',
        ]);
        $slug =Str::slug('$request->title', '-');
        
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
    
       
        Post::create([
            'title' => $request->input('title'),
             'description' => $request->input('description'),
             'slug' => $slug,
             'image_path' => $newImageName,
             'user_id' => auth()->user()->id,

        ]);
        return redirect('/post');
    } 

   
    public function show($slug)
    {
          return view('post.show')
          ->with('post',Post::where('id',$slug)->first());


    }

    
    public function edit($slug)
    {
        return view('post.edit')
        ->with('post',Post::where('id',$slug)->first());
        
    }

   
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
          
        ]);
        if ($request->hasFile('image')) {

          
        }

        Post::where('id', $slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'user_id' => auth()->user()->id,
        ]);
           return redirect('/post/' . $slug)
           ->with('message','Post updated successfully');
   }

    
    public function destroy($slug)
    {
        Post::where('id', $slug)->delete();
        return redirect('/post')
        ->with('message','Post deleted successfully');
    }

    public function searchByTitle(Request $request)
    {
        $searchTerm = $request->input('title');
        
        $posts =Post::where('title', 'LIKE', "%{$searchTerm}%")->get();
        return view('post.index', compact('posts'));
}
}