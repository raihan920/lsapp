@extends('layouts.app')

@section('content')
    <h1 class="m-2">Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'class' => 'mb-3', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group row">
            {{Form::label('title', 'Title', ['class' => 'col-md-2 col-form-label text-right'])}}
            {{Form::text('title', '', ['class' => 'form-control col-md-10', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group row">
            {{Form::label('body', 'Body', ['class' => 'col-md-2 col-form-label text-right'])}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control col-md-10', 'placeholder' => 'Article'])}}
        </div>
        <div class="form-group row">
            <div class="col-md-6 offset-md-2">
                {{Form::file('cover_image')}}
            </div>
        </div>
        <div class="form-group row m-2">
            <div class="col-md-12 d-flex justify-content-center">
                {{Form::submit('Save', ['class' => 'btn btn-success'])}}
            </div>
        </div>
    {!! Form::close() !!}    
@endsection