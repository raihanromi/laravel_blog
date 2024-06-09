<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class ViewerPostController extends Controller
{
    public function showAllPost(){
        
        $posts = Post::all();

        $featured_posts= Post::where("featured_post","yes")->limit(3)->get();   

        $category = Post::select('category')->distinct()->get();
        
        return view('index',compact('posts','featured_posts','category'));

    }


    public function categoryPost($category){

        $category_posts = Post::where('category',$category)->get();

        $latest_posts = Post::latest()->where('category',$category)->get();

        return view('category-post',compact('category_posts','latest_posts'));

    }
}