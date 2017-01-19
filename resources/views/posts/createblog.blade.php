@extends('main')

@section('title', '| Create a blog')

@section('stylesheets')

     {!! Html::style('css/parsley.css') !!}

@endsection

@section('navbar')
      <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/about">About</a></li>
@endsection

@section('main content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create a new Post</h1>
      <hr>

      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
        {{Form::label('title', 'Title:') }}
        {{Form::text('title', null, array('class' => 'form-control', 'required'=>'', 'maxlength' => '150'))}}

        {{Form::label('body', "Post Body:", array('style' => 'margin-top: 20px'))}}
        {{Form::textarea('body',null, array('class' => 'form-control', 'required' => ''))}}
        {{Form::submit('Creat New Post', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px'))}}



        {!! Form::close() !!}
    </div>
  </div>
@endsection

@section('scripts')

     {!! Html::script('js/parsley.min.js') !!}

@endsection
