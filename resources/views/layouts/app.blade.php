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
        {{-- chain on in the Route::get ->name('home') --}}
        <a href="/" class="p-3">Home</a>
      </li>
      <li>
        {{-- chain on in the Route::get ->name('dashboard') --}}
        <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
      </li>
      <li>
        {{-- chain on in the Route::get ->name('posts') --}}
        <a href="{{ route('posts') }}" class="p-3">Posts</a>
      </li>
    </ul>

    <ul class="flex items-center">
      @auth
        <li>
          {{-- shows user/name in nav when logged in --}}
          <a href="" class="p-3">{{ auth()->user()->name }}</a>
        </li>
        <li>
          {{-- chain on in the Route::post ->name('logout') --}}
          <form action="{{ route('logout') }}" method="post" class="p-3 inline">
            @csrf
            <button type="submit">Logout</button>
          </form>
        </li>
      @endauth

      @guest
        <li>
          {{-- chain on in the Route::get ->name('login') --}}
          <a href="{{ route('login') }}" class="p-3">Login</a>
        </li>
        <li>
          {{-- chain on in the Route::get ->name('register') --}}
          <a href="{{ route('register') }}" class="p-3">Register</a>
        </li>
      @endguest
    </ul>
  </nav>
  @yield('content')
</body>

</html>
