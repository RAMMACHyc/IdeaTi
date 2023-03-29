<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;


class LikesController extends Controller
{
    
    public function store(Request $request)
    {
        
       
        
        like::create([
            'comment_id' => $request->input('comment_id'),
             'user_id' => auth()->user()->id,

        ]);
        return Redirect::back();
    }  

   
    
    public function toggleLike(Request $request, $id)
{
    $comment = Comment::find($id);
    
    $liked = $comment->likes()->where('user_id', auth()->user()->id)->exists();

    if ($liked) {
    
        $comment->likes()->where('user_id', auth()->user()->id)->delete();  
        return redirect()->back()->with('success', 'The like has been removed.');
    } else {
        
        $comment->likes()->create(['user_id' => auth()->user()->id]);
        return redirect()->back()->with('success', 'The comment was liked.');
    }
    
}
   




     public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

   
    public function show($id)
{
    $comment = Comment::find($id);
    $likes = $comment->likes->sum('like');

    return view('comments.show', compact('comment', 'likes' ));
  

}
    

   
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy($id)
    {
        Like::where('comment_id', $id)->delete();
        return redirect()->back();
    }
}