@extends('layouts.app')

@section('content')
    <h1 class="m-2">Posts</h1>
    @if(count($posts)>=1)
        @foreach($posts as $post)
            <div class="card m-1 p-1">
                <div class="row">
                    <div class="col-md-4">
                        <img class="w-100" src="/storage/cover_image/{{$post->cover_image}}" alt="Image not available">                        
                    </div>
                    <div class="col-md-8">
                        <a href="posts/{{$post->id}}">{{$post->title}}</a> 
                        <small>Written On: {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>                
            </div>             
        @endforeach
        <div class="row">
            <div class="col-md-12 mt-3 mb-3">
                <span class="float-right">
                    {{$posts->links()}}
                </span>
            </div>
        </div> 
    @else
        <p>No posts found</p>
    @endif
@endsection