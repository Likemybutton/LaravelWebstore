@extends('master')

@section('title', $product->product_name)

@section('content')
    <!-- single product details -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src={{asset("productImages/".$product->picture_1.".jpg")}} 
                width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src={{asset("productImages/".$product->picture_1.".jpg")}} 
                        width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src={{asset("productImages/".$product->picture_2.".jpg")}}
                        width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src={{asset("productImages/".$product->picture_3.".jpg")}}
                        width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src={{asset("productImages/".$product->picture_4.".jpg")}}
                        width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home/T-shirt</p>
                <h1>{{$product->product_name}}</h1>
                <h4>${{$product->product_price}}</h4>
                <h4>{{$product->product_rating}}/100</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>
                <h3>Product Details</h3>
                <p>{{$product->product_description}}</p>
            </div>
        </div>
    </div>
    <!-- featured products title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>
    <!-- featured products -->
    <div class="small-container">
        <div class="row">
            @for($i = 0; $i < 4; $i++)
                @include('product_card', ['products' => $productsByRelation], ['num' => $i])
            @endfor
        </div>
        </div>
    </div>
    <!-- js for product gallery -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
        }
    </script>
@endsection