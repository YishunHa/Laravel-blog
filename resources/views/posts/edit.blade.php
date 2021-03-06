@extends('main')



@section('title','| Edit Blog Post')

@section('stylesheets')

       {!! Html::style('css/custom.css') !!}

@endsection


@section('main content')
  <div class="row">
    {!! Form::model($post ,  ['route' => ['posts.update', $post -> id ], 'method' => 'PATCH']) !!}
    <div class="col-md-8">

      {{ Form::label('title', 'Title:', ['class' => 'form-title-css'])  }}
      {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

      {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top'])}}
      {{ Form::text('slug', null, ['class' => 'form-control'])}}

      {{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
      {{ Form::textarea('body', null, ['class'  => 'form-control']) }}
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Create at</dt>
          <dd>{{date('M j, Y H:i',strtotime($post->created_at))}}</dd>
        </dl>
        <dl class="dl-horizontal">
          <dt>Last update:</dt>
          <dd>{{date('M j, Y H:i',strtotime($post->updated_at))}}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'Back', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {{ Form::submit('Save', ['class' => 'btn btn-success btn-block'])}}

          </div>
        </div>
      </div>

    </div>
    {!! Form::close() !!}
  </div>
@endsection
