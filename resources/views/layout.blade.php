<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- Fonts --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body class="antialiased bg-gradient">

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar bg-success bg-gradient">
            <div class="container">
              <a class="navbar-brand text-white" href="{{ route('index') }}">Task App</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  @guest
                  <li class="nav-item">
                    <a class="text-white nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="text-white nav-link" href="{{ route('create') }}">New Task</a>
                  </li>
                  <li class="nav-item">
                    <a class="text-white nav-link" href="{{ route('register-user') }}">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="text-white nav-link" href="{{ route('login') }}">Login</a>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="text-white nav-link" href="dashboard">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="text-white nav-link" href="signout">Logout</a>
                  </li>
                  @endguest
                </ul>
              </div>
            </div>
          </nav>


        {{-- Body --}}

        {{-- Messages --}}
        @if(session('success'))
          <div class="alert alert-success" role="alert">
              {{session('success')}}
          </div>      
        @endif
        @if(session('error'))
          <div class="alert alert-danger" role="alert">
              {{session('error')}}
          </div>      
        @endif
        @if(session('info'))
          <div class="alert alert-info" role="alert">
              {{session('info')}}
          </div>      
        @endif

        <div class="container p-5">
            @yield('main-content')
        </div>


        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>