@extends('main')

@section('title','| All Post')


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
         <hr>
       </div>
      <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
          <table class="table">
            <!-- <th>#</th> -->

            <thead>

              <th>Title</th>
              <th>Body</th>
              <th>Created at</th>
              <th>Updatedat</th>
            </thead>

            <tbody>
      <!-- pull data out of the database -->

            @foreach ($posts as $post)
               <tr>
                 <!-- <th>{ $post->id }}</th> -->

                <td>{{ substr($post->title, 0, 35) }}{{ strlen($post -> title) > 35 ? "...." : "" }}</td>
                <td>{{ substr($post->body, 0, 60) }}{{ strlen($post -> body) > 60 ? "...." : "" }}</td>
                <td>{{ date('M j, Y', strtotime($post->created_at))}}</td>
                <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-sm">View</a>  <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
               </tr>







            @endforeach




            </tbody>
          </table>

        </div>
        <div class="col-md-1">

        </div>

      </div>
     </div>


@endsection
