
@extends('partial.main')

@section('container')

<!-- BANNER -->
<div class="relative z-0">
  <div class="content-center px-5 pt-4">
    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
      <div class="absolute inset-0">
        <img class="h-full w-full object-cover rounded-2xl" src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2018/07/IMG_20180717_123720.jpg" alt="Img Header">
        <div class="absolute inset-0 bg-slate-500 rounded-2xl mix-blend-multiply"></div>
      </div>
      <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
          <span class="block text-white mb-5 "data-aos="zoom-in"data-aos-duration="800">Selamat Datang di</span>
          <span class="block text-white underline decoration-indigo-500"data-aos="zoom-in"data-aos-duration="1200">SDN Bubutan IV</span>
        </h1>
        <p class="mt-6 max-w-lg mx-auto text-center text-sm sm:text-base text-white sm:max-w-3xl">Selamat datang di website resmi sekolah dasar kami! Di sini, Anda akan menemukan informasi terbaru tentang program belajar mengajar dan kegiatan sekolah kami. Kami dengan senang hati mempersembahkan website sekolah dasar ini kepada seluruh siswa, guru, dan orang tua.</p>
        <div class="mt-10 max-w-sm mx-auto flex justify-center">
            <a href="/profile" class="sticky duration-500 transform hover:-translate-y-3 text-base hover:text-white items-center justify-center px-4 py-3 font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500"> Profil Sekolah </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- SAMBUTAN KEPSEK-->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative overflow-hidden bg-transparent">
  <div class="relative mb-6">
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
      <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
        <div>
          <div>
          </div>
          <div class="">
            <h2 class="text-center sm:text-left text-2xl md:text-3xl pt-8 pb-4 font-extrabold tracking-tight text-gray-900">Sambutan Kepala Sekolah</h2>
            <p class="mt-4 text-base text-black text-center sm:text-justify">"Kita bersama-sama bekerja keras untuk memastikan bahwa setiap siswa merasa dihargai dan mendapatkan pendidikan yang berkualitas, sehingga mereka siap untuk menjadi generasi pemimpin masa depan."</p>
            <img class="sm:hidden mt-6 w-auto h-56 mx-auto bg-center" src="{{ asset('storage/' . $kepsek->image) }}" alt="Kepala">
            <p class="mt-4 text-base font-bold text-black text-center sm:text-justify">{{ $kepsek->nama }}</p>
            <p class="mt-1 text-sm font-semibold text-black text-center sm:text-justify">NIP. {{ $kepsek->nip }}</p>
            {{-- <div class="mt-6">
              <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mt-16 lg:mt-0 ml-12">
        <div class="ml-12 sm:p-12">
          {{-- ring-1 ring-black ring-opacity-5 --}}
          <img class=" hidden sm:block lg:absolute lg:left-25 lg:h-full lg:w-auto lg:max-w-none ml-12" style="padding: 1rem" src="{{ asset('storage/' . $kepsek->image) }}" alt="Kepala">
          {{-- <p class="mt-4 text-base text-gray-500 text-justify">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p> --}}
        </div>
      </div>
    </div>
  </div>
</div>

<div>
  <p class="pt-6 sm:pt-10 text-center text-2xl md:text-3xl font-extrabold tracking-tight">
    Keunggulan Sekolah
  </p>
</div>

<!-- component -->
<div class=" px-24 md:lg:xl:px-40 py-8 bg-opacity-10">
  <div class="grid grid-cols-1 items-center rounded-lg md:lg:xl:grid-cols-3 group bg-white drop-shadow-xl shadow-neutral-200 ">

      <div
          class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b "data-aos="zoom-in"data-aos-duration="300">
          <span class="p-5 rounded-full bg-gradient-to-r from-blue-200 to-blue-100 drop-shadow-xl text-white shadow-cyan-200">
              <img class="w-20 h-20 group" src="{{asset('img/award.gif')}}" alt="award">
          </span>
          <p class="text-xl font-bold text-gray-700 mt-3">Unggul dalam Prestasi</p>
      </div>

      <div
          class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b "data-aos="zoom-in"data-aos-duration="800">
          <span class="p-5 rounded-full bg-gradient-to-r from-orange-200 to-yellow-100 text-white shadow-lg shadow-orange-200">
              <img class="w-20 h-20" src="{{asset('img/eco.gif')}}" alt="eco">
          </span>
          <p class="text-xl font-bold text-gray-700 mt-3">Sekolah Zero Waste</p>
      </div>

      <div class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-b"data-aos="zoom-in"data-aos-duration="1300">
          <span class="p-5 rounded-full bg-gradient-to-r from-green-200 to-emerald-100 text-white shadow-lg shadow-emerald-200">
              <img class="w-20 h-20" src="{{asset('img/book.gif')}}" alt="eco">
          </span>
          <p class="text-xl font-bold text-gray-700 mt-3">Perpustakaan Lengkap</p>
      </div>

  </div>
</div>      

<!-- END component -->


{{-- INI BUAT KARTU --}}
<div class="text-center">
  <h2 class="text-2xl text-black font-extrabold md:text-4xl">Post Pilihan Kami</h2>
  <p class="lg:w-6/12 pt-4 mx-5 lg:mx-auto text-base text-black">Postingan unggulan kami di profil perusahaan sekolah menyoroti pencapaian dan misi institusi untuk mendidik dan menginspirasi para pemimpin masa depan.</p>
</div>

<div class="bg-transparent from-green-50 to-cyan-100">  
  <div class="container px-6 text-gray-600">
      <div class="py-4 grid gap-12 lg:grid-cols-2">

{{-- KARTU KEDUA --}}
        @if ($post1)
        <div data-aos="zoom-in" data-aos-duration="1000" class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="{{ asset('storage/' . $post1->image) }}" alt="" class="w-56 h-56 object-cover bg-cover rounded-xl max-w-xs transition duration-300 ease-in-out hover:scale-105" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">{{ $post1->judul }}</h3>
              <div class="md:text-base text-justify text-gray-500 line-clamp-4 text-base">
                {!! html_entity_decode($post1->konten) !!}
              </div>
              <a href="/post/{{ $post1->kategori }}/{{ $post1->slug }}" class="hidden sm:block w-max font-semibold text-cyan-600">Selengkapnya</a>
          </div>
        </div>
        @else
        <div data-aos="zoom-in" data-aos-duration="1000" class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-21-at-09.23.29-2-1536x1152.jpeg" alt="" class="w-full h-full object-cover bg-cover rounded-xl max-w-xs transition duration-300 ease-in-out hover:scale-105" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">Belum Ada Post Terpilih</h3>
              <p class="md:text-base text-justify text-gray-500 text-base"></p>
              <a href="#" class="hidden sm:block w-max font-semibold text-cyan-600">Selengkapnya</a>
          </div>
        </div>
        @endif

{{-- KARTU KETIGA --}}
        @if ($post2)
        <div data-aos="zoom-in" data-aos-duration="1000" class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="{{ asset('storage/' . $post2->image) }}" alt="tailwind logo" class="w-56 h-56 object-cover bg-cover rounded-xl max-w-xs transition duration-300 ease-in-out hover:scale-105" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">{{ $post2->judul }}</h3>
              <div class="md:text-base text-justify text-gray-500 line-clamp-4 text-base">
                {!! html_entity_decode($post2->konten) !!}
              </div>
              
              <a href="/post/{{ $post2->kategori }}/{{ $post2->slug }}" class="hidden sm:block w-max font-semibold text-cyan-600">Selengkapnya</a>
          </div>
        </div>
        @else
        <div data-aos="zoom-in" data-aos-duration="1000" class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
          <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-10-at-10.47.54-1536x1152.jpeg" alt="tailwind logo" class="w-full h-full object-cover bg-cover rounded-xl max-w-xs transition duration-300 ease-in-out hover:scale-105" />
          </div>
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
              <h3 class="font-black text-gray-800 md:text-2xl text-xl">Belum Ada Post Terpilih</h3>
              <p class="md:text-base text-justify text-gray-500 text-base"></p>
              <a href="#" class="hidden sm:block w-max font-semibold text-cyan-600">Selengkapnya</a>
          </div>
        </div>
        @endif
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

<div class="bg-transparent pb-10 px-4 sm:px-6 lg:pb-10 lg:px-8">
  <h2 class="text-2xl md:text-3xl text-center sm:text-left text-black font-extrabold my-6">Postingan Terbaru</h2>
  <div class="relative mx-auto divide-y-2 divide-gray-200 lg:max-w-1">
    <div class=" mt-4 grid gap-16 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
      <div class="col-span-3">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

          @foreach ($latest->take(6) as $item)
          <div>
            <a href="/post/{{ $item->kategori }}/{{ $item->slug }}" class="mt-2 sm:block lg:h-20 max-sm:h-36">
              <p class="text-xl font-bold text-gray-900">{{ $item->judul }}</p>
              <div class="pt-1">
                <time class="text-sm text-slate-600" datetime="{{ date('Y-m-d H:i:s', strtotime($item->created_at)) }}">{{ $item->created_at->format('M d, Y') }}</time>
              </div>
            </a>
            <div class="mt-3 mb-3 text-base text-gray-500 text-justify line-clamp-5 overflow-ellipsis">
              {!! html_entity_decode($item->konten) !!}
            </div>
              <a href="#" class="inline-block">
                <span id="kategori1" class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-{{ $item->warna1 }}-100 text-{{ $item->warna1 }}-800"> {{ $item->mainKategori }} </span>
              </a>
              <a href="/post/{{ $item->kategori }}" class="inline-block">
                <span id="kategori2" class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-{{ $item->warna2 }}-100 text-{{ $item->warna2 }}-800"> {{ $item->kategori }} </span>
              </a>
            <div class="mt-3">
              <a href="/post/{{ $item->kategori }}/{{ $item->slug }}" class=" sm:block hidden text-base font-semibold text-indigo-600 hover:text-indigo-500"> Selengkapnya </a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      
    </div>
  </div>
</div>

<style>
  .accordion-content {
  transition: max-height 0.3s ease-out, padding 0.3s ease;
  }

  .accordion-content1 {
  transition: max-height 0.3s ease-out, padding 0.3s ease;
  }
</style>

<script>
  const accordionHeader = document.querySelectorAll(".accordion-header");
  accordionHeader.forEach((header) => {
  header.addEventListener("click", function () {
      const accordionContent = header.parentElement.querySelector(".accordion-content");
      let accordionMaxHeight = accordionContent.style.maxHeight;

      // Condition handling
      if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
      accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 200}px`;
      header.querySelector(".fas").classList.remove("fa-chevron-right");
      header.querySelector(".fas").classList.add("fa-chevron-down");
      } else {
      accordionContent.style.maxHeight = `0px`;
      header.querySelector(".fas").classList.add("fa-chevron-right");
      header.querySelector(".fas").classList.remove("fa-chevron-down");
      }
  });
  });

  const accordionHeader1 = document.querySelectorAll(".accordion-header1");
  accordionHeader1.forEach((header) => {
  header.addEventListener("click", function () {
      const accordionContent1 = header.parentElement.querySelector(".accordion-content1");
      let accordionMaxHeight1 = accordionContent1.style.maxHeight;

      // Condition handling
      if (accordionMaxHeight1 == "0px" || accordionMaxHeight1.length == 0) {
      accordionContent1.style.maxHeight = `${accordionContent1.scrollHeight + 200}px`;
      header.querySelector(".fas").classList.remove("fa-chevron-right");
      header.querySelector(".fas").classList.add("fa-chevron-down");
      } else {
      accordionContent1.style.maxHeight = `0px`;
      header.querySelector(".fas").classList.add("fa-chevron-right");
      header.querySelector(".fas").classList.remove("fa-chevron-down");
      }
  });
  });
</script>

@endsection