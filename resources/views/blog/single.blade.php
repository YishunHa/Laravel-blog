@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title',"| $titleTag")

@section('stylesheets')
        {{Html::style('css/custom.css')}}
@endsection

@section('main content')

     <div class="row">
       <div class="col-md-8 col-md-offset-2">
         <h1 class="form-single-title">{{ $post->title }}</h1>
         <p class="form-single-message">{{ $post->body }}</p>
       </div>
   </div><br>
   <hr>

    <div class="row">
       <div class="col-md-8 col-md-offset-2">
         <h3 class="comment-title"><span class="glyphicon glyphicon-tag"></span>   There are {{ $post->comments()->count()}}  Comments</h3>
           @foreach ($post->comments as  $comment)
              <div class="comment">
                <div class="author">
                  <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid"}}" class="author-icon" >
              <div class="author-name">
                  <h4>{{ $comment->name }}</h4>
                  <p class="created-time">{{ date('F nS, Y - g:i a' ,strtotime($comment->created_at))}}</p>
              </div>

                </div>
                <div class="comment-content">
                  <p>{{ $comment->comment }}</p>
                </div>


              </div>
           @endforeach
       </div>

    </div>

      <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top:5px">
          {{ Form::open(['route' => ['comments.store' , $post->id], 'method' => 'POST'])}}

        <hr>
           <div class="row">
               <div class="col-md-6">
                  {{ Form::label('name', "Name") }}
                  {{ Form::text('name', null, ['class' => 'form-control']) }}
                  </div>

               <div class="col-md-6">
                  {{ Form::label('email', "Email:") }}
                  {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-12">
                   {{ Form::label('comment', "Comment:") }}
                   {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                   {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px', 'rows' => '5'])}}
                </div>

           </div>
          {{ Form::close()}}
        </div>

      </div>

@endsection
