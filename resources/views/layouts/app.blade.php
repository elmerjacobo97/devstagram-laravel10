<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')

  <title>DevStagram - @yield('title')</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=alexandria:400,900|figtree:400,700,900" rel="stylesheet" />

  <!-- Styles -->
  <style>
    html,
    body {
      font-family: figtree, alexandria, sans-serif;
    }
  </style>


  <!-- Scripts -->
  @vite('resources/js/app.js')

</head>

<body>
  <!-- Header -->
  <div class="bg-gray-800 text-white relative">
    <div class="container mx-auto px-4 py-5 flex justify-between items-center">
      <!-- Logo -->
      <a href="/" class="text-2xl font-semibold">
        DevStagram
      </a>

      <!-- Navigation Menu for large screens -->
      <div class="hidden md:flex space-x-4">
        <a href="/login" class="text-white hover:text-gray-400">Inicia sesión</a>
        <a href="{{ route('register.index') }}" class="text-white hover:text-gray-400">Crea una cuenta</a>
      </div>

      <!-- Hamburger button for small screens -->
      <div class="md:hidden flex items-center">
        <button id="menuButton" class="mobile-menu-button">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Sidebar Menu -->
    <div id="menu"
      class="mobile-menu hidden md:hidden fixed inset-y-0 left-0 transform -translate-x-full bg-gray-700 w-64 overflow-y-auto transition-transform duration-1000 ease-in-out">
      <a href="/login" class="block py-2 px-4 text-white hover:bg-gray-600">Inicia sesión</a>
      <a href="{{ route('register.index') }}" class="block py-2 px-4 text-white hover:bg-gray-600">Crea una cuenta</a>
    </div>
  </div>

  @yield('content')

</body>

</html>
