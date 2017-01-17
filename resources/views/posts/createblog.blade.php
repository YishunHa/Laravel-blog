@extends('main')

@section('title', '| Create a blog')

@section('main content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create a new Post</h1>
      <hr>

      {!! Form::open(['route' => 'posts.store']) !!}
        {{Form::label('title', 'Title:') }}
        {{Form::text('title', null, array('class' => 'form-control'))}}

        {{Form::label('body', "Post Body:", array('style' => 'margin-top: 20px'))}}
        {{Form::textarea('body',null, array('class' => 'form-control'))}}
        {{Form::submit('Creat New Post', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px'))}}



        {!! Form::close() !!}
    </div>
  </div>
@endsection
