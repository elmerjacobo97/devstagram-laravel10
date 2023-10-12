@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md m-4 overflow-hidden">
            <!-- Register Form -->
            <div>
                <h1 class="text-3xl font-semibold mb-6 text-center">Registro</h1>
                <form action="{{ route('register.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Nombre</label>
                        <input type="text" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}"
                               class="mt-1 block w-full px-3 py-2 bg-white border {{ $errors->has('name') ? 'border-red-500' : 'border-slate-300' }} rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Username</label>
                        <input type="text" name="username" placeholder="Ingrese su nombre de usuario" value="{{ old('username') }}"
                               class="mt-1 block w-full px-3 py-2 bg-white border {{ $errors->has('username') ? 'border-red-500' : 'border-slate-300' }} rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        @error('username')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                        <input type="email" name="email" placeholder="Ingrese su correo electrónico" value="{{ old('email') }}"
                               class="mt-1 block w-full px-3 py-2 bg-white border {{ $errors->has('email') ? 'border-red-500' : 'border-slate-300' }} rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Password</label>
                        <input type="password" name="password" placeholder="Ingrese su contraseña" value="{{ old('password') }}"
                               class="mt-1 block w-full px-3 py-2 bg-white border {{ $errors->has('password') ? 'border-red-500' : 'border-slate-300' }} rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Confirmar Password</label>
                        <input type="password" name="password_confirmation" placeholder="Confirme su contraseña" value="{{ old('password') }}"
                               class="mt-1 block w-full px-3 py-2 bg-white border {{ $errors->has('password') ? 'border-red-500' : 'border-slate-300' }} rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 text-white p-2 w-full rounded-md hover:bg-blue-400">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
