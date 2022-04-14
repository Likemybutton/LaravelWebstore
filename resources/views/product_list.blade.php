@extends('master')

@section('title', 'Products')

@section('content')
    <!-- featured products -->
    <div class="small-container">
        <div class="row row-2">
            <h2>{{$category.'s'}}</h2>
            <select onchange = "window.location = this.value;">
                <option>Choose a category</option>
                @foreach ($categories as $cat)
                    <option value={{'/product_list/'.$cat->id}}>{{$cat->category_name}}</option>
                @endforeach
            </select>
        </div>
        @for($i = 0; $i < 3; $i++)
            <div class="row">
                @for($j = 0; $j < 4; $j++)
                    @if($i*4+$j < $products->count())
                        @include('product_card', ['products' => $products], ['num' => $i*4+$j])
                    @else
                    <div class="col-4"></div>
                    @endif
                @endfor
            </div>
        @endfor
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
@endsection