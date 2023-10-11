@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col min-h-screen">
        <!-- Aquí va todo tu contenido principal -->

        <footer class="bg-gray-800 text-white mt-auto py-4">
            <div class="container mx-auto text-center">
                <a href="/" class="text-2xl font-semibold">
                    DevStagram
                </a>
                <p class="text-sm">&copy; {{ now()->year }} DevStagram. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
@endsection
