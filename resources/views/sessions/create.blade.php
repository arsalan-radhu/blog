@extends('layouts.master')

@section('content')

<body>
    <main>  
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h1>Sign In</h1>

            <form method="POST" action="/login">
              {{ csrf_field() }}

              <div class="form-group">
                  <label for="email">Email Address:</label>
                  <input type="email" class="form-control" id="email" name="email" required/>
              </div>

              <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" required />
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Sign In</button>
              </div>

              @include('layouts.errors')
          </form>

          </div>
@endsection