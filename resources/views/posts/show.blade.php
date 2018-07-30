@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="/posts" class="btn btn-secondary float-right m-1">Go Back</a>
        </div>
    </div>    
    <h1>{{$post->title}}</h1>
    <img class="w-100" src="/storage/cover_image/{{$post->cover_image}}" alt="Image not available">    
    <div>
        {!!$post->body!!}
    </div>
    <hr/>
    <small>Written on: {{$post->created_at}} by {{$post->user->name}}</small>
    <hr/>
    @if(!Auth::guest())  {{-- if the user is not a guest --}}
        @if(Auth::user()->id == $post->user_id)
            <div class="row mb-4">        
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary col-md-1 offset-md-1">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'col-md'  ])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger offset-md-10'])}}
                {!!Form::close()!!}
            </div>
        @endif
    @endif
@endsection