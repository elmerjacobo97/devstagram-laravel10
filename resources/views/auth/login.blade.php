@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 m-4 overflow-hidden bg-white rounded-lg shadow-md">
      <!-- Login Form -->
      <div>
        <h1 class="mb-6 text-3xl font-semibold text-center">Iniciar Sesión</h1>
        <form method="POST" action="{{ route('login') }}" novalidate>
          @csrf
          <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-600">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo electrónico"
              class="block w-full px-3 py-2 mt-1 text-sm bg-white border {{ $errors->has('email') ? 'border-red-500' : 'border-slate-300' }} rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500" />
            @error('email')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-600">Password</label>
            <input type="password" name="password" placeholder="Ingrese su contraseña"
              class="block w-full px-3 py-2 mt-1 text-sm bg-white border  {{ $errors->has('password') ? 'border-red-500' : 'border-slate-300' }}  rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500" />
            @error('password')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
          @if ($errors->has('messageError'))
            <div class="text-red-500">
              {{ $errors->first('messageError') }}
            </div>
          @endif
          <button type="submit" class="w-full p-2 text-white bg-blue-500 rounded-md hover:bg-blue-400">Login</button>
        </form>
      </div>
    </div>
  </div>
@endsection
