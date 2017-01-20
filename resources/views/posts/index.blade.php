@extends('main')

@section('title','| All Post')

@section('navbar')
        <li  class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
  @endsection

@section('stylesheets')
    {{Html::style('css/custom.css')}}
@endsection


@section('main content')

     <div class="row">
       <div class="col-md-10">
         <h1>All Post</h1>
       </div>
      <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg btn-block btn-h1-margin">Ceate New Post</a>
      </div>
       <div class="col-md-12">
         <hr >
       </div>

     </div>


@endsection
