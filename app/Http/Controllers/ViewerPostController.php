<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewerPostController extends Controller
{
    public function showAllPost(){
        $posts = Post::all();
        dd($posts);
        return view('index',compact('posts'));

    }
}