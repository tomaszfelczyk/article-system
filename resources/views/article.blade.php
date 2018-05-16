@extends('index')


@section('content')
<div class="row">
  <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('article.index') }}">Back to articles list</a>
  </div>
</div>
    <hr />
    <div class="row">
      <div class="col-lg-8">
          <p><h1>{{ $article->title }}</h1></p>
         <p class="lead"><i class="fa fa-user"></i> by {{ $article->author }}</p>
         <hr><p><i class="fa fa-calendar"></i>Posted on {{$article->created_at }}</p>
         <hr><p class="lead">{{ $article->subtitle }}</p>
         <p class="lead">{{ $article->content }}</p>
         <hr>
         <a href="{{ route('article.edit.form', $article) }}">Edit</a>
         <form onsubmit="return confirm('Are you sure you want to delete this post?')" class="d-inline-block" method="post" action="{{route('article.delete', $article->id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>


      </div>
    </div>
@endsection
