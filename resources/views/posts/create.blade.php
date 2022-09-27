@extends('layouts.master')

@section('content')
<body>
<main>  
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h1>Create Post</h1>
        <hr>
        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" >
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea id="body" name="body" class="form-control" {{--required--}}></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            @include('layouts.errors')
            {{-- @if (count($errors))
            <div clas="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif --}}
        </form>
        
        
      </div><!-- /.blog-main -->
  

@endsection


