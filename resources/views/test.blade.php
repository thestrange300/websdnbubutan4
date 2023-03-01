
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
          <span class="block text-white mb-5 "data-aos="zoom-in"data-aos-duration="800">Selamat Datang di</span>
          <span class="block text-white underline decoration-indigo-500"data-aos="zoom-in"data-aos-duration="1200">SDN Bubutan IV</span>
        </h1>
        <p class="mt-6 max-w-lg mx-auto text-center text-base text-white sm:max-w-3xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        <div class="mt-10 max-w-sm mx-auto max-w-none flex justify-center">
            <a href="/profile" class="transition-all items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50"> Profil Sekolah </a>
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
            {{-- <div class="mt-6">
              <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
            </div> --}}
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




{{-- CAROUSEL --}}
{{-- 
<div id="indicators-carousel" class="relative" data-carousel="static">
  <!-- Carousel wrapper -->
  <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
          <img src="{{asset('img/ghibli.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('img/ghibli.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('img/ghibli.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('img/ghibli.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('img/ghibli.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div> --}}

{{-- INI BUAT KARTU --}}
<div class="text-center">
  <h2 class="text-2xl text-cyan-900 font-extrabold md:text-4xl">Post Pilihan Kami</h2>
  <p class="lg:w-6/12 pt-4 lg:mx-auto">Postingan unggulan kami di profil perusahaan sekolah menyoroti pencapaian dan misi institusi untuk mendidik dan menginspirasi para pemimpin masa depan.</p>
</div>

<div class="bg-transparent from-green-50 to-cyan-100">  
  <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="py-4 grid gap-12 lg:grid-cols-2">

{{-- KARTU KEDUA --}}
        <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-21-at-09.23.29-2-1536x1152.jpeg" alt="tailwind logo" class="w-full h-full object-cover bg-cover rounded-xl" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">Kegiatan Market Day Gelar Karya Kelas 4</h3>
              <p class="md:text-base text-justify text-gray-500 text-base">Penerapan Kurikulum Merdeka. Hari Senin tanggal 21 November 2022, para peserta didik kelas 4A, 4B, 4C, dan 4D SDN Bubutan 4 melaksanakan sebuah kegiatan Gelar Karya dalam pembelajaran Proyek Penguatan Profil Pelajar...</p>
              <a href="#" class="block w-max text-cyan-600">Read more</a>
          </div>
        </div>

{{-- KARTU KETIGA --}}
        <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-10-at-10.47.54-1536x1152.jpeg" alt="tailwind logo" class="w-full h-full object-cover bg-cover rounded-xl" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">Peringatan Hari Pahlawan Tahun 2022</h3>
              <p class="md:text-base text-gray-500 text-base">“Hari ini kita memeringati Hari Pahlawan yang merupakan hari penting dalam perjalanan sejarah bangsa Indonesia. Pertempuran Surabaya inilah yang menjadi cikal bakal Hari Pahlawan Nasional yang masih kita peringati hingga...</p>
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
  <h2 class="text-2xl text-cyan-900 font-extrabold mt-6">Postingan Terbaru</h2>
  <div class="relative mx-auto divide-y-2 divide-gray-200 lg:max-w-1">
    <div class=" mt-4 grid gap-16 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
      <div class="col-span-2">
        <div class="grid grid-cols-2 gap-4">
          <div>
            <a href="#" class="mt-2 block">
              <p class="text-xl font-bold text-gray-900">Bazar Olahan Sayur Hidroponik</p>
              <div class="pt-1">
                <time class="text-sm text-slate-600" datetime="2020-03-16">Mar 16, 2020</time>
              </div>
              <p class="mt-3 mb-3 text-base text-gray-500 text-justify">Pada tanggal 27 September 2018, SDN Bubutan IV mengadakan acara Bazar dari hasil kebun hidroponik. Kegiatan ini dimaksudkan untuk memberikan pendidikan kepada para siswa berwiraswasta  dari tanaman yang ada disekitar mereka. Acara ini dimaksudkan agar lahan kosong yang ada disekitar kita bisa kita manfaatkkan semaksimal mungkin.</p>
            </a>
            <p class="text-sm text-gray-500">
              <a href="#" class="inline-block">
                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800"> Ecopreneur </span>
              </a>
              <a href="#" class="inline-block">
                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-orange-100 text-orange-800"> Ecoschool </span>
              </a>
            </p>
            <div class="mt-3">
              <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Selengkapnya </a>
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
      <div>
        <div class=" rounded-xl shadow-lg p-3 mx-auto border border-white bg-white">
          <p>TEST</p>
        </div>
      </div>


      
    </div>
  </div>
</div>



@endsection