<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Layout - Blog</title>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    @yield('style')
</head>
<body>
    <div>
        <nav class="navigation">
            <div class="button-group">
            <a href="#" class="logo">Your Logo</a>
              <a href="{{route('home')}}" class="button">Home</a>
              @auth
              <a href="{{route('dashboard')}}" class="button">Dashboard</a>
              @endauth
              <a href="{{ route('blog') }}" class="button">Blog</a>
            </div>
            <div class="button-group">
                @auth
                <form action="{{route('logout')}}" method="post">
                  @csrf
                  <button type="submit" style="background-color: black" class="button">Logout</button>
                </form>
                @endauth
                @guest
                    <a href="{{ route('login')}}" class="button">Login</a>
                    <a href="{{route('register')}}" class="button">Register</a>
                @endguest
            </div>
          </nav>
    </div>
      <div class="content">
        @yield('content')
      </div>
</body>
</html>