
@extends('partial.main')

@section('container')

<div class="mt-2">
    
 

  <div class="relative z-0">
      <div class="content-center px-3 sm:px-20 pt-4">
        <div class="relative drop-shadow-md rounded-2xl overflow-hidden">
          <div class="relative inset-0">
            <img class="h-full w-full object-cover object-center max-h-128" src="{{ asset('storage/' . $post->image) }}" alt="Img Header">
          </div>
        </div>
      </div>
    </div>


   
</div>


<div class="drop-shadow-md content-center mx-6 sm:mx-24 my-4 px-8 sm:px-16 pt-4 pb-8 rounded-xl border border-gray-200 bg-white">
  <div class="place-item-left">
      <h1 class="font-black text-left text-gray-800 md:text-4xl text-2xl pt-6">{{ $post->judul }}</h1> 
  </div> 

  <div class="text-left pt-2">
      <p class="text-sm text-gray-500 pt-4">Dipublikasikan dalam <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-{{ $post->warna2 }}-100 text-{{ $post->warna2 }}-800"> {{ $post->kategori }} </span> </p>
  </div>
  <div class="flex items-left justify-left pt-2 pb-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 w-5 h-5 mr-1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
        </svg>
        <time class="text-sm font-medium text-gray-600" datetime="{{ date('Y-m-d H:i:s', strtotime($post->created_at)) }}">{{ $post->created_at->format('M d, Y') }}</time>       
  </div>

      <div class="text-base font-normal text-justify py-6">
        {!! html_entity_decode($post->konten) !!}
      </div>

      <div class="relative grid-rows-none sm:grid sm:grid-cols-2 py-6 ">
        @if ($post->image2)
        <div class="content-center px-6 sm:px-20 pt-4">
          <div class="relative drop-shadow-md rounded-2xl overflow-hidden">
            <div class="relative inset-0">
              <img class="h-full w-full object-cover object-center max-h-64" src="{{ asset('storage/' . $post->image2) }}" alt="Img Header">
            </div>
          </div>
        </div>
        @endif

        @if ($post->image3)
        <div class="content-center px-6 sm:px-20 pt-4">
          <div class="relative drop-shadow-md rounded-2xl overflow-hidden">
            <div class="relative inset-0">
              <img class="h-full w-full object-cover object-center max-h-64" src="{{ asset('storage/' . $post->image3) }}" alt="Img Header">
            </div>
          </div>
        </div>
        @endif
      </div>

      @if ($post->link)
      <div class="flex justify-center mb-12 mt-6">
        <iframe class="rounded-lg" width="560" height="315" src="{{ $post->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      @endif

      <iframe width="560" height="315" src="https://www.youtube.com/embed/0qBDItmpOb0?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      

<a href="/post/{{ $post->kategori }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
  
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2 -ml-1">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
    </svg>
  Kembali 
</a>

</div>


@endsection