@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl m-4 overflow-hidden">
            <div class="flex flex-col lg:flex-row justify-between">
                <!-- Login Form -->
                <div class="flex-1 lg:mr-4">
                    <h1 class="text-3xl font-semibold mb-6 text-center lg:text-left">Iniciar Sesión</h1>
                    <form>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                            <input type="email" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500" />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 mb-2">Password</label>
                            <input type="password" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500" />
                        </div>

                        <button type="submit" class="bg-blue-500 text-white p-2 w-full rounded-md hover:bg-blue-400">Login</button>
                    </form>
                </div>

                <!-- Image -->
                <div class="flex-1 lg:ml-4 bg-cover bg-center hidden lg:block" style="background-image: url('{{ asset('images/login.jpg') }}')"></div>
            </div>
        </div>
    </div>
@endsection

