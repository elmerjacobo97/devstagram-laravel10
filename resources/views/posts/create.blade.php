@extends('layouts.app')

@section('title', 'Crear Publicación')

{{-- Unicamente para los estilos de dropzone en esta vista. --}}
@push('stylesDropzone')
  <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-xl p-8 m-4 overflow-hidden bg-white rounded-lg shadow-md lg:w-1/2 md:w-3/4">
      <!-- Formulario de Publicación -->
      <div>
        <h1 class="mb-6 text-3xl font-semibold text-center">Crear Publicación</h1>
        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
          class="flex items-center justify-center rounded-md dropzone h-96">
          @csrf
        </form>
        <form action="{{ route('posts.store') }}" method="POST" class="mt-4">
          @csrf

          <!-- Título -->
          <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-600">Título</label>
            <input type="text" name="title" placeholder="Introduce el título"
              class="block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
              required>
          </div>

          <!-- Descripción -->
          <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-600">Descripción</label>
            <textarea name="description" rows="4" placeholder="Introduce la descripción"
              class="block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
              required></textarea>
          </div>
          <button type="submit" class="w-full p-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">Publicar</button>
        </form>
      </div>
    </div>
  </div>
@endsection
