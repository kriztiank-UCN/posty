<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            laravel: '#ef3b2d',
          },
        },
      },
    }
  </script>
  <title>Posty</title>
</head>

<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
      <li>
        <a href="/" class="p-3">Home</a>
      </li>
      <li>
        <a href="" class="p-3">Dashboard</a>
      </li>
      <li>
        <a href="" class="p-3">Post</a>
      </li>
    </ul>

    <ul class="flex items-center">
      @auth
      <li>
        <a href="/" class="p-3">Kristian Kristiansen</a>
      </li>
      <li>
        <a href="" class="p-3">Logout</a>
      </li>
      @endauth

      @guest
      <li>
        <a href="{{route('login')}}" class="p-3">Login</a>
      </li>
      <li>
        {{-- chain on in the route ->name('register') --}}
        <a href="{{ route('register') }}" class="p-3">Register</a>
      </li>
      @endguest
    </ul>
  </nav>
  @yield('content')
</body>

</html>
