<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function getPolls(){
        return response()->json(Post::get(), 200);
    }

    public function getPoll($id){
        return response()->json(Post::find($id), 200);
    }

    public function store(Request $request){
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function update(Request $request, Post $post){
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function delete(Request $request, Post $post){
        $post->delete();
        return response()->json(null, 204);
    }
}
