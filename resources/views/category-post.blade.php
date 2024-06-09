<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/webmag/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 10:23:56 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>WebMag HTML Template</title>

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<link rel="stylesheet" href="css/font-awesome.min.css">

<link type="text/css" rel="stylesheet" href="css/style.css" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/bootstrap.min.css','resources/css/style.css', 'resources/css/font-awesome.min.css',
    'resources/js/bootstrap.min.js','resources/js/main.js','resources/js/bootstrap.js'
    ])


<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>



@include('layouts.header')

@php
//dd($latest_posts);

if ($latest_posts->count() > 1) {
    $latest_post = $latest_posts->first();
    $lastTwoLatestPosts = $latest_posts->slice(1, 2)->values();
} else {
    // If there's only one post, assign it to $latest_post and leave $lastTwoLatestPost empty.
    $latest_post = $latest_posts->first() ?? null;
    $lastTwoLatestPosts = collect();
}

//dd($lastTwoLatestPosts);
@endphp


<div class="section">

<div class="container">

<div class="row">
<div class="col-md-8">
<div class="row">




<div class="col-md-12">
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="{{asset($latest_post['thumb_img'])}}" alt></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="#">{{$latest_post['category']}}</a>
<span class="post-date">{{$latest_post['created_at']}}</span>
</div>
<h3 class="post-title"><a href="/blog-post/{{$latest_post['id']}}">{{$latest_post['title']}}</a></h3>
</div>
</div>
</div>


@if (!empty($lastTwoLatestPosts))
@foreach ($lastTwoLatestPosts as $lastTwoLatestPost )

<div class="col-md-6">
    <div class="post">
    <a class="post-img" href="blog-post.html"><img src="{{asset($lastTwoLatestPost['thumb_img'])}}" alt style="height: 120px; "></a>
    <div class="post-body">
    <div class="post-meta">
    <a class="post-category cat-2" href="#">{{$lastTwoLatestPost['category']}}</a>
    <span class="post-date">{{$lastTwoLatestPost['created_at']}}</span>
    </div>
    <h3 class="post-title"><a href="blog-post.html">{{$lastTwoLatestPost['title']}}</a></h3>
    </div>
    </div>
    </div>

@endforeach  
@endif


<div class="clearfix visible-md visible-lg"></div>

<div class="col-md-12">
<div class="section-row">
<a href="#">
<img class="img-responsive center-block" src="img/ad-2.jpg" alt>
</a>
</div>
</div>


<!-- for loop start from here -->


{{-- <div class="col-md-12">
<div class="post post-row">
<a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="#">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
</div>
</div>
</div> --}}


{{-- <div class="col-md-12">
<div class="post post-row">
<a class="post-img" href="blog-post.html"><img src="img/post-5.jpg" alt></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="#">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Microsoft’s TypeScript Fills A Long-standing Void In JavaScript</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
</div>
</div>
</div> --}}


{{-- <div class="col-md-12">
<div class="post post-row">
<a class="post-img" href="blog-post.html"><img src="img/post-3.jpg" alt></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="#">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Javascript : Prototype vs Class</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
</div>
</div>
</div> --}}

@if (!empty($category_posts))

@foreach ($category_posts as $category_post )


<div class="col-md-12">
    <div class="post post-row">
    <a class="post-img" href="blog-post.html"><img src="{{asset($category_post['thumb_img'])}}" alt></a>
    <div class="post-body">
    <div class="post-meta">
    <a class="post-category cat-2" href="#">{{$category_post['category']}}</a>
    <span class="post-date">{{$category_post['created_at']}}</span>
    </div>
    <h3 class="post-title"><a href="blog-post.html">{{$category_post['title']}}</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
    </div>
    </div>
    </div>
    
@endforeach
    
@endif




<div class="col-md-12">
<div class="section-row">
<button class="primary-button center-block">Load More</button>
</div>
</div>
</div>
</div>
<div class="col-md-4">

<div class="aside-widget text-center">
<a href="#" style="display: inline-block;margin: auto;">
<img class="img-responsive" src="img/ad-1.jpg" alt>
</a>
</div>


<div class="aside-widget">
<div class="section-title">
<h2>Most Read</h2>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="img/widget-1.jpg" alt></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="img/widget-2.jpg" alt></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="img/widget-3.jpg" alt></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="img/widget-4.jpg" alt></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
</div>
</div>
</div>


<div class="aside-widget">
<div class="section-title">
<h2>Catagories</h2>
</div>
<div class="category-widget">
<ul>
<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
</ul>
</div>
</div>


<div class="aside-widget">
<div class="tags-widget">
<ul>
<li><a href="#">Chrome</a></li>
<li><a href="#">CSS</a></li>
<li><a href="#">Tutorial</a></li>
<li><a href="#">Backend</a></li>
<li><a href="#">JQuery</a></li>
<li><a href="#">Design</a></li>
<li><a href="#">Development</a></li>
<li><a href="#">JavaScript</a></li>
<li><a href="#">Website</a></li>
</ul>
</div>
</div>


<div class="aside-widget">
<div class="section-title">
<h2>Archive</h2>
</div>
<div class="archive-widget">
<ul>
<li><a href="#">Jan 2018</a></li>
<li><a href="#">Feb 2018</a></li>
<li><a href="#">Mar 2018</a></li>
</ul>
</div>
</div>

</div>
</div>

</div>

</div>


@include('layouts.footer')



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"8894cfceba12482e","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/webmag/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 10:23:57 GMT -->
</html>
