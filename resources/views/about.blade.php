@extends('master')

@section('title', 'About')

@section('content')

<div class="headline">
    <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>This is learning<br> project</h1>
                    <p>Electronics webstore asssembled by Tokishev Aibek  
                    <br>-General guide for laravel:
                    <br>https://www.youtube.com/playlist?list=PL5RABzpdpqAlSRJS1KExmJsaPFQc161Dy
                    <br>-Style:
                    <br>https://www.youtube.com/playlist?list=PLjwm_8O3suyM_2Lo9aAIw3HqjOPor8j9g
                    <br>-Database architecture:
                    <br>https://classmech.ru/pages/databases/goods/
                    </p>
                </div>
                <div class="col-2">
                    <img src={{asset("images/image1.png")}}>
                </div>
            </div>
    </div>
</div>

@endsection