@extends('main')

@section('title', "| Delete Comments")

@section('main content')

     <div class="row">
       <div class="col-md-8 col-md-offset-2">
          <h1>Sure to Delete this Comment?</h1>
         <p>
           <strong>Name:</strong>{{ $comment -> name}}<br>
           <strong>Email:</strong>{{ $comment -> email}}<br>
           <strong>Comment:</strong>{{ $comment -> comment}}<br>

         </p>

         {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Confirm',['class' => 'btn btn-lg btn-block btn-danger'])
            }}

          {{ Form::close() }}
       </div>

     </div>

@endsection
