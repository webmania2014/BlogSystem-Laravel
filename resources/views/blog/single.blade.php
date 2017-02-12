@extends('main')

<?php $title_tag = htmlspecialchars($post->title) ?>

@section('title', "| $title_tag")

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <img src="{{ asset('images/' . $post->image) }}" alt="">
      <h1>{{ $post->title }}</h1>
      <p>{!! $post->body !!}</p>
      <hr>
      <p>Posted In: {{ $post->category->name }}</p>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3 class="comments-title">
          <span class="glyphicon glyphicon-comment"></span>
          {{ $post->comments()->count() }} Comments
        </h3>
        @foreach($post->comments as $comment)
        <div class="comment">
          <div class="author-info">
            <img src="{{"https://www.gravatar.com/avatar/HASH"}}" class="author-image">
            <div class="author-name">
              <h4>{{ $comment->name }}</h4>
              <p class="author-time">{{ date('F nS, Y - g:ia', strtotime($comment->created_at)) }}</p>
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
      <div class="comment-form col-md-8 col-md-offset-2" style="margin-top: 50px">
        {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
          </div>
          <div class="col-md-6">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
          </div>
          <div class="col-md-12">
            {{ Form::label('comment', 'Comment:') }}
            {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

            {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top: 15px;']) }}
          </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

@endsection
