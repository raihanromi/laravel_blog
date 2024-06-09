<!DOCTYPE html>
<html lang="en">


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

<div id="post-header" class="page-header">
  <div class="background-img" style="background-image: url('{{asset($post->top_img)}}');"></div>
  <div class="container">
  <div class="row">
  <div class="col-md-10">
  <div class="post-meta">
  <a class="post-category cat-2" href="category.html">{{$post->category}}</a>
  <span class="post-date">{{$post->created_at  }}</span>
  </div>
  <h1>{{$post->title}}</h1>
  </div>
  </div>
  </div>
  </div> 



<div class="section">

<div class="container">

<div class="row">


<div class="col-md-8">
<div class="section-row sticky-container">
<!-- from this part all post description will be here -->
<div class="main-post">

  {!!$post->main_post !!}

</div>
<!-- end part of all post description will be here -->


<div class="post-shares sticky-shares">
<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-envelope"></i></a>
</div>
</div>

<div class="section-row text-center">
<a href="#" style="display: inline-block;margin: auto;">
<img class="img-responsive" src="img/ad-2.jpg" alt>
</a>
</div>


<div class="section-row">
<div class="post-author">
<div class="media">
<div class="media-left">
<img class="media-object" src="img/author.png" alt>
</div>
<div class="media-body">
<div class="media-heading">
<h3>John Doe</h3>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<ul class="author-social">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>



<!--TODO : get comments -->
<div class="section-row">
<div class="section-title">
<h2>3 Comments</h2>
</div>
<div class="post-comments">

<div class="media">
<div class="media-left">
<img class="media-object" src="img/avatar.png" alt>
</div>
<div class="media-body">
<div class="media-heading">
<h4>John Doe</h4>
<span class="time">March 27, 2018 at 8:00 am</span>
<a href="#" class="reply">Reply</a>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<div class="media">
<div class="media-left">
<img class="media-object" src="img/avatar.png" alt>
</div>
<div class="media-body">
<div class="media-heading">
<h4>John Doe</h4>
<span class="time">March 27, 2018 at 8:00 am</span>
<a href="#" class="reply">Reply</a>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>

</div>
</div>


<div class="media">
<div class="media-left">
<img class="media-object" src="img/avatar.png" alt>
</div>
<div class="media-body">
<div class="media-heading">
<h4>John Doe</h4>
<span class="time">March 27, 2018 at 8:00 am</span>
<a href="#" class="reply">Reply</a>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>
</div>
<!-- ####### -->



<!-- TODO :create a form here for submitting -->

<div class="section-row">
<div class="section-title">
<h2>Leave a reply</h2>
<p>your email address will not be published. required fields are marked *</p>
</div>
<form class="post-reply">
<div class="row">
<div class="col-md-4">
<div class="form-group">
<span>Name *</span>
<input class="input" type="text" name="name">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span>Email *</span>
<input class="input" type="email" name="email">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span>Website</span>
<input class="input" type="text" name="website">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea class="input" name="message" placeholder="Message"></textarea>
</div>
<button class="primary-button">Submit</button>
</div>
</div>
</form>
</div>
<!-- ####### -->


</div>


<div class="col-md-4">

<div class="aside-widget text-center">
<a href="#" style="display: inline-block;margin: auto;">
<img class="img-responsive" src="img/ad-1.jpg" alt>
</a>
</div>


<!--TODO :LATER -->

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



<!--TODO :LATER -->

<div class="aside-widget">

<div class="section-title">
<h2>Featured Posts</h2>
</div>
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="#">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
</div>
</div>
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="img/post-1.jpg" alt></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="#">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
</div>
</div>
</div>



<!--TODO :FILTER Categories -->

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
<li><a href="#">January 2018</a></li>
<li><a href="#">Febuary 2018</a></li>
<li><a href="#">March 2018</a></li>
</ul>
</div>
</div>

</div>

</div>

</div>

</div>


<!-- footer part -->
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"8894cfd4d88c8228","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/webmag/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 10:23:59 GMT -->
</html>
