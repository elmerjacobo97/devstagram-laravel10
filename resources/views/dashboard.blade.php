@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="container px-6 py-8 mx-auto">
    <!-- Sección superior del perfil -->
    <div class="flex flex-col items-center justify-center mb-6 md:flex-row">
      <!-- Imagen de perfil -->
      <div class="relative w-24 h-24 mb-4 md:mr-6 md:mb-0">
        <img src="{{ asset('images/usuario.svg') }}" alt="Foto del usuario"
          class="object-cover w-full h-full rounded-full shadow-lg">
      </div>

      <!-- Información del perfil -->
      <div class="ml-4 text-center md:text-left">
        <h2 class="mb-2 text-2xl font-semibold">{{ $user->username }}</h2>
        <!-- Estadísticas -->
        <div class="flex justify-between mb-4 space-x-4">
          <div>
            <p class="text-lg font-semibold">35,091</p>
            <span class="text-gray-600">Publicaciones</span>
          </div>
          <div>
            <p class="text-lg font-semibold">4.2M</p>
            <span class="text-gray-600">Seguidores</span>
          </div>
          <div>
            <p class="text-lg font-semibold">1,065</p>
            <span class="text-gray-600">Siguiendo</span>
          </div>
        </div>
        <p class="text-gray-600">Biografía o descripción aquí.</p>
      </div>
    </div>


    <!-- Sección de publicaciones -->
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      <!-- Publicación 1 -->
      <div class="relative overflow-hidden rounded-lg group hover:bg-gray-100">
        <img src="https://cdn.pixabay.com/photo/2023/09/20/20/17/skyline-8265564_1280.jpg" alt="Publicación 1"
          class="object-cover w-full transition-transform duration-300 transform rounded-lg shadow-lg group-hover:scale-105">
        <div
          class="absolute inset-0 flex items-center justify-center gap-5 text-white transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
          <!-- Icono de me gusta y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            8,465
          </span>
          <!-- Icono de comentarios y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            242
          </span>
        </div>
      </div>
      <div class="relative overflow-hidden rounded-lg group hover:bg-gray-100">
        <img src="https://cdn.pixabay.com/photo/2023/09/20/20/17/skyline-8265564_1280.jpg" alt="Publicación 1"
          class="object-cover w-full transition-transform duration-300 transform rounded-lg shadow-lg group-hover:scale-105">
        <div
          class="absolute inset-0 flex items-center justify-center gap-5 text-white transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
          <!-- Icono de me gusta y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            8,465
          </span>
          <!-- Icono de comentarios y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            242
          </span>
        </div>
      </div>
      <div class="relative overflow-hidden rounded-lg group hover:bg-gray-100">
        <img src="https://cdn.pixabay.com/photo/2023/09/20/20/17/skyline-8265564_1280.jpg" alt="Publicación 1"
          class="object-cover w-full transition-transform duration-300 transform rounded-lg shadow-lg group-hover:scale-105">
        <div
          class="absolute inset-0 flex items-center justify-center gap-5 text-white transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
          <!-- Icono de me gusta y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            8,465
          </span>
          <!-- Icono de comentarios y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            242
          </span>
        </div>
      </div>
      <div class="relative overflow-hidden rounded-lg group hover:bg-gray-100">
        <img src="https://cdn.pixabay.com/photo/2023/09/20/20/17/skyline-8265564_1280.jpg" alt="Publicación 1"
          class="object-cover w-full transition-transform duration-300 transform rounded-lg shadow-lg group-hover:scale-105">
        <div
          class="absolute inset-0 flex items-center justify-center gap-5 text-white transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
          <!-- Icono de me gusta y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            8,465
          </span>
          <!-- Icono de comentarios y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            242
          </span>
        </div>
      </div>
      <div class="relative overflow-hidden rounded-lg group hover:bg-gray-100">
        <img src="https://cdn.pixabay.com/photo/2023/09/20/20/17/skyline-8265564_1280.jpg" alt="Publicación 1"
          class="object-cover w-full transition-transform duration-300 transform rounded-lg shadow-lg group-hover:scale-105">
        <div
          class="absolute inset-0 flex items-center justify-center gap-5 text-white transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
          <!-- Icono de me gusta y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            8,465
          </span>
          <!-- Icono de comentarios y cantidad -->
          <span class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            242
          </span>
        </div>
      </div>
    </div>
  </div>
@endsection
