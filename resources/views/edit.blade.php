@extends('layouts.baseLayout')
@section('title','Edit')

@section('page_body')
<div class="container">
    <h2 style="text-align: center; margin-top : 2%; margin-bottom : 2%">Khaing's Blog</h2>
    <div class="">
        <a href="/posts" class="btn btn-info">Show All Post</a>
    </div>
    <br>
    <div class="card">
        <div class="card-header" style="text-align: center;">
            Edit Post
        </div>
        <div class="card-body">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ $post->name }}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" id="description" name="description">
                    {{ $post->description }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            
        </div>
    </div>
</div>



@endsection