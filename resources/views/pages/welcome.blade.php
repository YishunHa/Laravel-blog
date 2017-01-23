@extends('main')

@section('title','| Homepage ')

@section('stylesheets')
      {{Html::style('css/custom.css')}}
@endsection

@section('main content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
                  <h1>Welcome to My Blog</h1>
                  <p class="lead">Thank you for visiting, this is  a blog about my personal daily life.</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">My Post</a></p>
         </div>
        </div>
      </div>

    <div class="row">
      <div class="col-md-8" >

        @foreach ($posts as $post)

        <div class="post">
          <h3>{{ $post->title }}</h3>
          <p>{{ $post-> body}}</p>
            <a href="" class="btn btn-primary">More about it</a>
        </div>

         <hr>
         @endforeach
      </div>

      <div class="col-md-3 col-md-offset-1" >Siderbar widget</div>
    </div>

@endsection
