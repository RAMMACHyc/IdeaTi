<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;


class CommentsController extends Controller
{

   public function index()
    {
      
        
    }
  public function store(Request $request)
  {
 
    Comment::create([
'body' => $request->input('body'),
'post_id' => $request->input('post_id'),
'user_id' => auth()->user()->id,
    ]);

    return redirect("/post/".$request->input('post_id'));
}

public function like(Request $request)
{
    $comment = Comment::findOrFail($request->id);
    $user = auth()->user();
    if ($user->likes()->where('comment_id', $comment->id)->count() > 0) {
        $user->likes()->where('comment_id', $comment->id)->delete();
    } else { 
        $like = new Like();
        $like->user_id = $user->id;
        $like->comment_id = $comment->id;
        $like->save();
    }

    return redirect()->back();
}

 
}