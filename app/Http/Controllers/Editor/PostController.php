<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()   
    {
        return view('editor.createpost');
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
    {   
        
        $request->validate([
            'title'=>'required',
            'main_post'=>'required',
            'category'=>'required',
            'thumb_photo'=>'required',
            'top_photo'=>'required'
        ]);

        

        $title = $request['title'];
        $main_post = $request['main_post'];
        $category = $request['category'];
        $featured_post = $request['featured_post'];


        $thumbImgName = time().$request->file('thumb_photo')->getClientOriginalName();
        $path = $request->file('thumb_photo')->storeAs('images',$thumbImgName,'public');
        $thumb_photo_path = 'storage/'.$path;      

        $topImgName = time().$request->file('top_photo')->getClientOriginalName();
        $path = $request->file('top_photo')->storeAs('images',$topImgName,'public');
        $top_photo_path = 'storage/'.$path;

        if($request->file('middle_photo')){
            $middleImgName = time().$request->file('middle_photo')->getClientOriginalName();
            $path = $request->file('middle_photo')->storeAs('images',$middleImgName,'public');
            $middle_photo_path  = 'storage/'.$path;

        }


        $user_id = Auth::user()->id;
        $post = Post::create([
            'user_id'=>$user_id,
            'title'=>$title,
            'main_post'=>$main_post,
            'category'=>$category,
            'thumb_img'=>$thumb_photo_path,
            'top_img'=>$top_photo_path,
            'middle_img'=>$middle_photo_path,
            'featured_post'=>$featured_post
        ]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        $post = Post::where('user_id', 1)->first();      
        return view('blog-post',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
