<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function index(){
        return response()->json(Post::get(), 200);
    }
}
