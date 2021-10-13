@extends('layouts.baseLayout')
@section('title','Show')

@section('page_body')
<div class="container">
    <h2 style="text-align: center; margin-top : 2%; margin-bottom : 2%">Khaing's Blog</h2>
    <div class="">
        <a href="/posts" class="btn btn-info">All Post</a>
    </div>
    <br>
    <div class="card">
        <div class="card-header" style="text-align: center;">
            Content
        </div>
        <div class="card-body">
            <div>
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <!-- <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More</a> -->
            </div>
            <hr> 
        </div>
    </div>
</div>



@endsection