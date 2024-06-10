<header id="header">

    <div id="nav">
    
    <div id="nav-fixed">
    <div class="container">
    
    <div class="nav-logo">
    <a href="/" class="logo"><img src="{{asset('storage/images/logo.png')}}" alt></a>
    </div>
    
    
    <ul class="nav-menu nav navbar-nav">
        @if((!empty($categories)))
            @foreach ( $categories as $category )
            <li class="cat-1"><a href="category-post/{{$category['category']}}">{{$category['category']}}</a></li>
            @endforeach
            @endif
    </ul>
    
    
    <div class="nav-btns">
    <button class="aside-btn"><i class="fa fa-bars"></i></button>
    <button class="search-btn"><i class="fa fa-search"></i></button>
    <div class="search-form">
    <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
    <button class="search-close"><i class="fa fa-times"></i></button>
    </div>
    </div>
    
    </div>
    </div>
    
    
    <div id="nav-aside">
        
    <div class="section-row">
    <ul class="nav-aside-menu">
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="/register">Join Us</a></li>
    </ul>
    </div>

    
    <div class="section-row">
    <h3>Follow us</h3>
    <ul class="nav-aside-social">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    </div>
    
    
    <button class="nav-aside-close"><i class="fa fa-times"></i></button>
    
    </div>
    
    </div>
    
    
    {{-- <div id="post-header" class="page-header">
    <div class="background-img" style="background-image: url('img/post-page.jpg');"></div>
    <div class="container">
    <div class="row">
    <div class="col-md-10">
    <div class="post-meta">
    <a class="post-category cat-2" href="category.html">JavaScript</a>
    <span class="post-date">March 27, 2018</span>
    </div>
    <h1>Ask HN: Does Anybody Still Use JQuery?</h1>
    </div>
    </div>
    </div>
    </div> --}}
    
    </header>