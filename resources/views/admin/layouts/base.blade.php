<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('page_title')</title>
</head>
<body class="bg-dark">
  <div class="container-fluid bg-primary mb-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand text-light" href="#">CRUd Comics</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{(Route::currentRouteName() === 'home')?'text-light fw-bold':''}}" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(Route::currentRouteName() === 'comics.index')?'text-light fw-bold':''}}" href="{{route('comics.index')}}">All Comics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(Route::currentRouteName() === 'comics.create')?'text-light fw-bold':''}}" href="{{route('comics.create')}}">Add a Comic</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
    
    @yield('content')
</body>
</html>