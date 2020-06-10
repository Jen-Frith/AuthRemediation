
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
@extends('layouts.app')

<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Services</h2>
            <div class="page-links">
                <a href="{{route('welcome')}}">Home</a>
                <span>Profile</span>
            </div>
        </div>
    </div>
</div>


@section('content')


<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the profile</h2>
        </div>
        <div class="">

                    <img src="{{Auth::user()->avatar}}" style="width: 150px; float:left; border-radius:50%; margin-right:25px;" alt="">
                    <h2>User Profile: {{$user->name}} </h2>
               <form action="/profile" method="POST" enctype="multipart/form-data">
            <label class="mt-5 pt-5" for="">Change profile image</label>  
        <input type="file" name="avatar">    
        @csrf
        <input type="submit" class="site-btn mt-5 right">
       </form>     
        </div>
    </div>
</div>
@endsection
