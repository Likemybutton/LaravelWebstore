@extends('master')

@section('title', 'Contacts')

@section('content')

<div class="headline">
    <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>In search of a job!</h1>
                    <p>Phone: +7 775 769 64 15 
                    <br>Email: aibek.tokishev@gmail.com
                    </p>
                </div>
                <div class="col-2">
                    <img src={{asset("images/image1.png")}}>
                </div>
            </div>
    </div>
</div>

@endsection