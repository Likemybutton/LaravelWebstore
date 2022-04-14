@extends('master')

@section('title', 'Product')

@section('content')
    <div class="headline">
        <div class="container">
                <div class="row">
                    <div class="col-2">
                        <h1>Give Your Workspace<br> A New Style!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.  
                        <br>Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="/about" class="btn">Explore Now &#8594; </a>
                    </div>
                    <div class="col-2">
                        <img src={{asset("images/image1.png")}}>
                    </div>
                </div>
        </div>
    </div>
    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <h2 class="title">Featured Categories</h2>
            <div class="row">
                <div class="col-3">
                    <a href="/product_list/3001">
                        <img src={{asset("images/category-1.jpg")}}>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/product_list/3002">
                        <img src={{asset("images/category-2.jpg")}}>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/product_list/3003">
                        <img src={{asset("images/category-3.jpg")}}>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            @for($i = 0; $i < 4; $i++)
                @include('product_card', ['products' => $productsByRating], ['num' => $i])
            @endfor
        </div>
        <h2 class="title">Latest Products</h2>
        @for($i = 0; $i < 2; $i++)
            <div class="row">
                @for($j = 0; $j < 4; $j++)
                    @if($i*4+$j < $productsByDate->count())
                        @include('product_card', ['products' => $productsByDate], ['num' => $i*4+$j])
                    @else
                    <div class="col-4"></div>
                    @endif
                @endfor
            </div>
        @endfor
    </div>
    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src={{asset("images/exclusive.png")}} class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Avaliable on Redstore</p>
                    <h1>Smart Band 4</h1>
                    <small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                    Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes. <br></small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                    Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                    <div class="rating">89/100</div>
                    <img src={{asset("images/user-1.png")}}>
                    <h3>Sean Janes</h3>
                </div>
                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                    Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                    <div class="rating">97/100</div>
                    <img src={{asset("images/user-2.png")}}>
                    <h3>Peter Parker</h3>
                </div>
                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                    Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                    <div class="rating">92/100</div>
                    <img src={{asset("images/user-3.png")}}>
                    <h3>Boba Seinfield</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src={{asset("images/logo-godrej.png")}}>
                </div>
                <div class="col-5">
                    <img src={{asset("images/logo-oppo.png")}}>
                </div>
                <div class="col-5">
                    <img src={{asset("images/logo-coca-cola.png")}}>
                </div>
                <div class="col-5">
                    <img src={{asset("images/logo-paypal.png")}}>
                </div>
                <div class="col-5">
                    <img src={{asset("images/logo-philips.png")}}>
                </div>
            </div>
        </div>
    </div>
@endsection