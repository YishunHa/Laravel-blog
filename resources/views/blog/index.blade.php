@extends('main')

@section('title', '| All Blogs')


@section('main content')

    <div class="row">
      <div class="col-md-12">
         <h1>All Blogs</h1>
      </div>

     @foreach ($posts as $post)


      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>{{ $post -> title}}</h2>
          <h5>Published: {{ date('M j, Y', strtotime($post -> created_at))}}</h5>

          <p>{{  substr($post->body, 0, 250)}}{{strlen($post->body) > 255 ? '....' : ''}}</p>

          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-success ">Read More</a>
        </div>
        <hr>

      </div>
       @endforeach
       <div class="row">
         <div class="col-md-12">
           <div class="text-center">
              {!! $posts->links() !!}

           </div>

         </div>

       </div>
    </div>


@endsection
