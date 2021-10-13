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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" id="description" name="description"  placeholder="Enter description">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <select name="category_id" id="" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            
        </div>
    </div>
</div>



@endsection