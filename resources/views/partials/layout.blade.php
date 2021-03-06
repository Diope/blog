
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{{config('app.name')}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

    @include('partials.nav')
    
    @include('partials.flash')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Bloggu</h1>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @yield('content')
        @include('partials.sidebar')
      </div>
    </div>

      

    @include('partials.footer')
  </body>
</html>
