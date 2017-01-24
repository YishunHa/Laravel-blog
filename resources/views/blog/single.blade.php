@extends('main')

@section('title',"| $post->title")

@section('stylesheets')
        {{Html::style('css/custom.css')}}
@endsection

@section('main content')

     <div class="row">
       <div class="col-md-8 col-md-offset-2">
         <h1 class="form-single-title">{{ $post->title }}</h1>
         <p class="form-single-message">{{ $post->body }}</p>
       </div>

     </div>
@endsection
