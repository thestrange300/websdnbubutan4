
@extends('partial.main')

@section('container')

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
        <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
            <a href="#" class="items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8"> Profil Sekolah </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden bg-transparent">
  <div class="relative">
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

{{-- INI BUAT KARTU --}}

<!-- component -->

<div class="mb-12 space-y-2 text-center">
  <h2 class="text-2xl text-cyan-900 font-bold md:text-4xl">Post Pilihan Kami ahhh</h2>
  <p class="lg:w-6/12 lg:mx-auto">Quam hic dolore cumque voluptate rerum beatae et quae, tempore sunt, debitis dolorum officia aliquid explicabo? Excepturi, voluptate?</p>
</div>

	<div
		class="relative mt-12 flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
		<div class="w-full md:w-1/3 bg-white grid place-items-center">
			<img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="rounded-xl" />
    </div>
			<div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
				<div class="flex justify-between item-center">
					<p class="text-gray-500 font-medium hidden md:block">Vacations</p>
					<div class="flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
							fill="currentColor">
							<path
								d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
						</svg>
						<p class="text-gray-600 font-bold text-sm ml-1">
							4.96
							<span class="text-gray-500 font-normal">(76 reviews)</span>
						</p>
					</div>
					<div class="">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
							fill="currentColor">
							<path fill-rule="evenodd"
								d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
								clip-rule="evenodd" />
						</svg>
					</div>
					<div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
						Superhost</div>
				</div>
				<h3 class="font-black text-gray-800 md:text-2xl text-xl">The Majestic and Wonderful Bahamas</h3>
				<p class="md:text-base text-gray-500 text-base">The best kept secret of The Bahamas is the country’s sheer
					size and diversity. With 16 major islands, The Bahamas is an unmatched destination</p>
			</div>
		</div>
	</div>

<!-- component -->
<div class="py-16  bg-transparent from-green-50 to-cyan-100">  
  <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">

      <div class="grid gap-12 lg:grid-cols-2">
        <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
          <img src="https://tailus.io/sources/blocks/twocards/preview/images/woman.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
          <div class="sm:w-7/12 pl-0 p-5">
            <div class="space-y-2">
              <div class="space-y-4">
                <h4 class="font-black text-2xl font-semibold text-cyan-900">Provident de illo eveniet commodi fuga fugiat laboriosam expedita.</h4>
                <p class="text-gray-600">Laborum saepe laudantium in, voluptates ex placeat quo harum aliquam totam, doloribus eum impedit atque! Temporibus...</p>
              </div>
              <a href="www.tailus.io" class="block w-max text-cyan-600">Read more</a>
            </div>
          </div>
        </div>
        <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
          <img src="https://tailus.io/sources/blocks/twocards/preview/images/man.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
          <div class="sm:w-7/12 pl-0 p-5">
            <div class="space-y-2">
              <div class="space-y-4">
                <h4 class="font-black text-2xl font-semibold text-cyan-900">Provident de illo eveniet commodi fuga fugiat laboriosam expedita.</h4>
                <p class="text-gray-600">Laborum saepe laudantium in, voluptates ex placeat quo harum aliquam totam, doloribus eum impedit atque! Temporibus...</p>
              </div>
              <a href="www.tailus.io" class="block w-max text-cyan-600">Read more</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>  

@endsection