@extends('layouts.baseLayout')
@section('title','Home')

@section('page_body')
<div class="container">
    <h2 style="text-align: center; margin-top : 2%; margin-bottom : 2%">Khaing's Blog</h2>
    <div class="">
        <a href="/posts" class="btn btn-info">Show All Post</a>
    </div>
    <br>
    <div class="card">
        <div class="card-header" style="text-align: center;">
            New Post
        </div>
        <div class="card-body">
        <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" id="description" name="description"  placeholder="Enter description">
                    
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            
        </div>
    </div>
</div>



@endsection