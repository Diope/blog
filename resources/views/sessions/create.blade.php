@extends('partials/layout')

@section('content')
    <div class="col-md-8">
      <h1>Sign In</h1>

      @include('partials/flashErrors')

      <form method="POST" action="/login">
        {{ csrf_field() }}

        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Log In</button>
        </div>

      </form>
    </div>
@endsection