
@extends('partial.main')

@section('container')

<!-- BANNER -->
<div class="relative z-0">
  <div class="content-center px-5 pt-4">
    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
      <div class="absolute inset-0">
        <img class="h-full w-full object-cover " src="{{asset('img/ghibli.png')}}" alt="Pemandangan">
        <div class="absolute inset-0 bg-slate-400 mix-blend-multiply"></div>
      </div>
      <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
          <span class="block text-white mb-5">Selamat Datang di</span>
          <span class="block text-white underline decoration-indigo-500">SDN Bubutan IV</span>
        </h1>
        <p class="mt-6 max-w-lg mx-auto text-center text-base text-white sm:max-w-3xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        <div class="mt-10 max-w-sm mx-auto max-w-none flex justify-center">
            <a href="#" class="transition-all items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50"> Profil Sekolah </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- SAMBUTAN KEPSEK-->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden bg-transparent">
  <div class="relative mb-12">
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
      <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
        <div>
          <div>
          </div>
          <div class="">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Sambutan Kepala Sekolah</h2>
            <p class="mt-4 text-base text-gray-500 text-justify">"Kita bersama-sama bekerja keras untuk memastikan bahwa setiap siswa merasa dihargai dan mendapatkan pendidikan yang berkualitas, sehingga mereka siap untuk menjadi generasi pemimpin masa depan."</p>
            <div class="mt-6">
              <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mt-16 lg:mt-0 ml-12">
        <div class="ml-12" style="padding: 3rem">
          {{-- ring-1 ring-black ring-opacity-5 --}}
          <img class=" lg:absolute lg:left-25 lg:h-full lg:w-auto lg:max-w-none ml-12" style="padding: 1rem" src="{{asset('img/kepsek.png')}}" alt="Kepala">
          {{-- <p class="mt-4 text-base text-gray-500 text-justify">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p> --}}
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CARAOUSEL -->
<div class="p-8">
  <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner relative w-full overflow-hidden rounded-lg">
      <div class="carousel-item active float-left w-full">
        <img
          src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
          class="block w-full"
          alt="Wild Landscape"
        />
      </div>
      <div class="carousel-item float-left w-full">
        <img
          src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
          class="block w-full"
          alt="Camera"
        />
      </div>
      <div class="carousel-item float-left w-full">
        <img
          src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
          class="block w-full"
          alt="Exotic Fruits"
        />
      </div>
    </div>
    <button
      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

{{-- INI BUAT KARTU --}}


<div class="text-center">
  <h2 class="text-2xl text-cyan-900 font-extrabold md:text-4xl">Post Pilihan Kami</h2>
  <p class="lg:w-6/12 pt-4 lg:mx-auto">Our featured post in the school company profile highlights the achievements and mission of the institution to educate and inspire the future leaders of tomorrow.</p>
</div>

<div class="bg-transparent from-green-50 to-cyan-100">  
  <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="py-4 grid gap-12 lg:grid-cols-2">

{{-- KARTU KEDUA --}}
        <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="rounded-xl" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">The Majestic and Wonderful Bahamas</h3>
              <p class="md:text-base text-gray-500 text-base">The best kept secret of The Bahamas is the country’s sheer
                size and diversity. With 16 major islands, The Bahamas is an unmatched destination</p>
              <a href="#" class="block w-max text-cyan-600">Read more</a>
          </div>
        </div>

{{-- KARTU KETIGA --}}
        <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="rounded-xl" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">The Majestic and Wonderful Bahamas</h3>
              <p class="md:text-base text-gray-500 text-base">The best kept secret of The Bahamas is the country’s sheer
                size and diversity. With 16 major islands, The Bahamas is an unmatched destination</p>
              <a href="#" class="block w-max text-cyan-600">Read more</a>
          </div>
        </div>
      </div>
  </div>
</div>  

{{-- LAINNYA --}}
<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="bg-transparent pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
  <div class="relative mx-auto divide-y-2 divide-gray-200 lg:max-w-1">
    <div class=" mt-6 grid gap-16 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">

      <div>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-bold text-gray-900">Boost your conversion rate</p>
          <p class="mt-3 mb-3 text-base text-gray-500 text-justify">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </a>
        <p class="text-sm text-gray-500">
          <a href="#" class="inline-block">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
          </a>
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>

      <div>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-bold text-gray-900">Boost your conversion rate</p>
          <p class="mt-3 mb-3 text-base text-gray-500 text-justify">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </a>
        <p class="text-sm text-gray-500">
          <a href="#" class="inline-block">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
          </a>
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>


      <div>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-bold text-gray-900">Boost your conversion rate</p>
          <p class="mt-3 mb-3 text-base text-gray-500 text-justify">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </a>
        <p class="text-sm text-gray-500">
          <a href="#" class="inline-block">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
          </a>
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>


      <div>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-bold text-gray-900">Boost your conversion rate</p>
          <p class="mt-3 mb-3 text-base text-gray-500 text-justify">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </a>
        <p class="text-sm text-gray-500">
          <a href="#" class="inline-block">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
          </a>
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>


      <div>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-bold text-gray-900">Boost your conversion rate</p>
          <p class="mt-3 mb-3 text-base text-gray-500 text-justify">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </a>
        <p class="text-sm text-gray-500">
          <a href="#" class="inline-block">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
          </a>
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>


      <div>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-bold text-gray-900">Boost your conversion rate</p>
          <p class="mt-3 mb-3 text-base text-gray-500 text-justify">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </a>
        <p class="text-sm text-gray-500">
          <a href="#" class="inline-block">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
          </a>
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>


      
    </div>
  </div>
</div>


@endsection