@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    ID: {{  $post->id }} - slug: {{ $post->slug }} 
                </div>
                @if (str_starts_with($post->image, 'http'))
                    <img src="{{ $post->image }}" alt="" id="show-posts">
                
                @else
                    
                <img src="{{ asset('storage/' . $post->image )}}" alt="" id="show-posts">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text"> {{ $post->content }} </p>
                    <a href="" class="btn btn-sm btn-primary">View</a>
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </div>
                    
            
        </div>
    </div>
</div>
@endsection