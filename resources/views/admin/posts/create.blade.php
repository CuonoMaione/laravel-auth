@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

          <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf


            <div class="mb-3">
              <label for="text" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title..." name="title">
            </div>
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="image..." name="image">
            </div>
            @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
            </div>
            @error('content')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
              <button type="submit" class="btn btn-sm btn-success me-1">Create new post</button>
              <button type="reset"class="btn btn-sm btn-danger" >Reset</button>
            </div>
          </form>
                    
            
        </div>
    </div>
</div>
@endsection