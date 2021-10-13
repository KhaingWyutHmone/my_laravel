@extends('layouts.baseLayout')
@section('title','Home')

@section('page_body')
<div class="container">
    <h2 style="text-align: center; margin-top : 2%; margin-bottom : 2%">Khaing's Blog</h2>
    <div class="">
        <a href="/posts/create" class="btn btn-info">New Post</a>
        <a href="/logout" class="btn btn-success">Logout</a>
        
    </div>
    <br>
    <div class="card">
        <div class="card-header" style="text-align: center;">
            Content
        </div>
        <div class="card-body">
            @foreach($posts as $post)
                <div>
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More</a>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/posts/{{ $post->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <hr>
            @endforeach
            
        </div>
    </div>
</div>



@endsection