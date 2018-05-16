@extends('index')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Article "{{ $article->title }}"</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('article.index') }}"> Back to article list</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route('article.edit', $article)}}">
@csrf
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Title:</label>
    <input type="text" class="form-control" name="title" value="{{$article->title}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Subtitle:</label>
    <textarea class="form-control" rows="4" cols="50" name="subtitle">{{$article->subtitle}}</textarea>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Author:</label>
    <input type="text" class="form-control" name="author" value="{{$article->author}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Category:</label>
    <input type="text" class="form-control" name="category" value="{{$article->category}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Content:</label>
    <textarea class="form-control" rows="10" cols="50" name="content">{{$article->content}}</textarea>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4" style="margin-top:60px">
    <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
  </div>
</div>

</form>

    @endsection
