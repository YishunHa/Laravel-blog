@extends('main')

@section('title','| View Posts')

  @section('navbar')
        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
@endsection

@section('main content')
    <div class="row">
      <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->body }}</p>
      </div>
      <div class="col-md-4">
        <div class="well">
          <dl class="dl-horizontal">
            <dt>Create at</dt>
            <dd>time</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Last update:</dt>
            <dd>time</dd>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-success btn-block">Edit</a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-danger btn-block">Delete</a>
            </div>
          </div>
        </div>

      </div>
    </div>


@endsection
