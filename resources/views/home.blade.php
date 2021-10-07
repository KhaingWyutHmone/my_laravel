@extends('layouts.baseLayout')
@section('title','Home')

@section('page_body')
<div class="container">
    <h2 style="text-align: center; margin-top : 2%; margin-bottom : 2%">Home Page</h2>
    <div class="card">
        <div class="card-header" style="text-align: center;">
            Content
        </div>
        <div class="card-body">
            @foreach($posts as $post)
                <div>
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
            @endforeach
            
        </div>
    </div>
</div>



@endsection