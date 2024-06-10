<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;


class ViewerPostController extends Controller
{
    public function showAllPost(){
        
        $posts = Post::all();

        $most_read_posts = Post::orderByDesc('total_read')->paginate(4);

        //dd($most_read_posts);
        
        $featured_posts= Post::where("featured_post","yes")->limit(3)->get();   

        $categories = Post::select('category',DB::raw('COUNT(*) as count'))->groupBy('category')->orderByDesc(DB::raw('COUNT(*)'))->get();

        return view('index',compact('posts','featured_posts','categories','most_read_posts'));

    }


    public function categoryPost($category){

        $category_posts = Post::where('category',$category)->get();

        $latest_posts = Post::latest()->where('category',$category)->get();

        return view('category-post',compact('category_posts','latest_posts'));

    }
}