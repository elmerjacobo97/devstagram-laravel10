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

  <!-- Reservar este espacio para cargar estilos -->
  @stack('stylesDropzone')

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
  <div class="relative text-white bg-gray-800">
    <div class="container flex items-center justify-between px-4 py-5 mx-auto">
      <!-- Logo -->
      <a href="/" class="text-2xl font-semibold">
        DevStagram
      </a>

      <!-- Navigation Menu for large screens -->
      @auth
        <div class="hidden space-x-4 md:flex md:items-center">
          <a href="{{ route('posts.create') }}"
            class="flex items-center justify-center gap-2 px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
            </svg>
            Crear
          </a>

          <a href="{{ route('profile.index', auth()->user()->username) }}" class="text-white">
            Hola: <span class="font-semibold lowercase">{{ auth()->user()->username }}</span>
          </a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-500 hover:text-red-600">Cerrar
              Sesión</button>
          </form>
        </div>
      @endauth


      @guest
        <div class="hidden space-x-4 md:flex">
          <a href="/login" class="text-white hover:text-gray-400">Inicia sesión</a>
          <a href="{{ route('register.index') }}" class="text-white hover:text-gray-400">Crea una cuenta</a>
        </div>
      @endguest

      <!-- Hamburger button for small screens -->
      <div class="flex items-center md:hidden">
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
      class="fixed inset-y-0 left-0 flex flex-col w-64 overflow-y-auto transition-transform duration-500 ease-in-out transform -translate-x-full bg-gray-700 mobile-menu md:hidden">
      <div class="flex flex-col items-center justify-start">
        @auth
          <a href="{{ route('profile.index', auth()->user()->username) }}"
            class="block px-4 py-2 mt-2 text-center text-white">
            Hola: <span class="font-semibold lowercase">{{ auth()->user()->username }}</span>
          </a>
          <a href="{{ route('posts.create') }}"
            class="flex items-center justify-center gap-2 px-4 py-2 mt-3 text-white bg-blue-600 rounded hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
            </svg>
            Crear
          </a>
        @endauth
        @guest
          <a href="/login" class="block px-4 py-2 mt-3 text-white hover:bg-gray-600">Inicia sesión</a>
          <a href="{{ route('register.index') }}" class="block px-4 py-2 mt-2 text-white hover:bg-gray-600">Crea una
            cuenta</a>
        @endguest
      </div>

      @auth
        <div class="flex-grow"></div>
        <form method="POST" action="{{ route('logout') }}" class="flex items-center justify-center px-4 py-2 mb-3">
          @csrf
          <button type="submit" href="{{ route('logout') }}" class="text-red-500 hover:text-red-600">Cerrar
            Sesión</button>
        </form>
      @endauth
    </div>
  </div>

  @yield('content')

</body>

</html>
