<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/bootstrap.min.css','resources/css/style.css', 'resources/css/font-awesome.min.css',
        'resources/js/bootstrap.min.js','resources/js/main.js','resources/js/bootstrap.js'
        ])


    </head>
    {{-- <body class="font-sans antialiased dark:bg-black dark:text-white/50">
       <div>
        <header class="float-right p-5 m-5">
            @if (Route::has('login'))
                <nav>
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                        
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
       </div>
    </body> --}}

    <body>

     @include('layouts.header')

        
        <div class="section">
        
        <div class="container">
        
        <div class="row">
        
        <div class="col-md-6">
        <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="img/post-1.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-6">
        <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-3" href="category.html">Jquery</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        </div>
        </div>
        </div>
        
        </div>
        
        

        <!-- Recent Post Section Start -->

        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                <h2>Recent Posts</h2>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post"><img src="img/post-3.jpg" alt></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">Web Design</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                    </div>
                </div>
            </div>
        
        
        <div class="col-md-4">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-4.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-4">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-5.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-3" href="category.html">Jquery</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        </div>
        </div>
        </div>
        
        <div class="clearfix visible-md visible-lg"></div>
        
        <div class="col-md-4">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-6.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-4">
        <div class="post">		
        <a class="post-img" href="blog-post.html"><img src="img/post-1.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-4" href="category.html">Css</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-4">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-1" href="category.html">Web Design</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
        </div>
        </div>
        </div>
        </div>
        
        

         
        <div class="row">
        <div class="col-md-8">
        <div class="row">
        
        <div class="col-md-12">
        <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-3" href="category.html">Jquery</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-6">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-1.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-4" href="category.html">Css</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-6">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-1" href="category.html">Web Design</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
        </div>
        </div>
        </div>
        
        <div class="clearfix visible-md visible-lg"></div>
        
        <div class="col-md-6">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-4.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-6">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-5.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-3" href="category.html">Jquery</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        </div>
        </div>
        </div>
        
        <div class="clearfix visible-md visible-lg"></div>
        
        <div class="col-md-6">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-3.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-1" href="category.html">Web Design</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-6">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-4.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
        </div>
        </div>
        
        </div>
        </div>
        <div class="col-md-4">
        
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
        <h2>Featured Posts</h2>
        </div>
        <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-3" href="category.html">Jquery</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        </div>
        </div>
        <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="img/post-1.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="aside-widget text-center">
        <a href="#" style="display: inline-block;margin: auto;">
        <img class="img-responsive" src="img/ad-1.jpg" alt>
        </a>
        </div>
        
        </div>
        </div>
        
        </div>
        
        </div>
        
        
        <div class="section section-grey">
        
        <div class="container">
        
        <div class="row">
        <div class="col-md-12">
        <div class="section-title text-center">
        <h2>Featured Posts</h2>
        </div>
        </div>
        
        <div class="col-md-4">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-4.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-4">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-5.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-3" href="category.html">Jquery</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-4">
        <div class="post">
        <a class="post-img" href="blog-post.html"><img src="img/post-3.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-1" href="category.html">Web Design</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
        </div>
        </div>
        </div>
        
        </div>
        
        </div>
        
        </div>
        
        
        <div class="section">
        
        <div class="container">
        
        <div class="row">
        <div class="col-md-8">
        <div class="row">
        <div class="col-md-12">
        <div class="section-title">
        <h2>Most Read</h2>
        </div>
        </div>
        
        <div class="col-md-12">
        <div class="post post-row">
        <a class="post-img" href="blog-post.html"><img src="img/post-4.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-12">
        <div class="post post-row">
        <a class="post-img" href="blog-post.html"><img src="img/post-6.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-12">
        <div class="post post-row">
        <a class="post-img" href="blog-post.html"><img src="img/post-1.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-4" href="category.html">Css</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        </div>
        </div>
        </div>
        
        
        <div class="col-md-12">
        <div class="post post-row">
        <a class="post-img" href="blog-post.html"><img src="img/post-2.jpg" alt></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-3" href="category.html">Jquery</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        </div>
        </div>
        </div>
        
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
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"8894cfbeab878228","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
       
    </body>


</html>
