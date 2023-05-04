@extends('partial.main')

@section('container')

@if(app()->environment('production'))
<?php $active = 'error' ?>
@else
<?php $active = 'error' ?>
@endif


    <main class="flex-grow flex flex-col justify-center max-w-7xl w-full pt-16 mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex-shrink-0 flex justify-center">
        <a href="/" class="inline-flex">
          <span class="sr-only">Workflow</span>
          <img class="h-48 w-auto" src="{{asset('img/Logo-Sekolah.png')}}" alt="">
        </a>
      </div>
      <div class="pt-8 pb-16">
        <div class="text-center">
          <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wide">404 Error</p>
          <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Halaman Tidak Ditemukan.</h1>
          <p class="mt-2 text-base text-gray-500">Maaf, kami tidak bisa menemukan halaman anda :(</p>
          <div class="mt-6">
            <a href="/" class="text-base font-medium text-indigo-600 hover:text-indigo-500">Halaman Utama<span aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>
      </div>
    </main>
  
@endsection