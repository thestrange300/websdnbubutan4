
@extends('partial.main')

@section('container')

<div class="mt-8">
    <p class="ml-4 text-3xl sm:text-3xl font-black text-center sm:text-left">
        Postingan Mengenai :    
    </p>
    <p class="ml-4 mt-4 text-3xl sm:text-3xl font-black text-center sm:text-left">
        Kategori A   
    </p>
</div>

<div class="py-8 px-4">
    
    
    <div class="flex place-items-center sm:place-items-start relative mx-auto divide-gray-200 lg:max-w-1 grid grid-cols-1 sm:grid-cols-4 gap-y-6 lg:gap-x-5 lg:gap-y-12">
        {{-- START FOREACH --}}

        <div class="sm:max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full h-56 object-cover bg-cover" src="{{asset('img/ghibli.png')}}" alt="" />
            </a>
            <div class="p-2 sm:p-5">
                <a href="#">
                    <h5 class="mb-2 text-center sm:text-left text-2xl sm:text-xl font-bold tracking-tight text-gray-900 text-black">Noteworthy technology acquisitions 2021</h5>
                </a>
                <div class="hidden sm:inline">
                    <p class="mb-3 font-normal text-base text-gray-700 line-clamp-4 text-justify">In this code, we're using a div with a black background color and 50% opacity as an overlay on top of the background image. We're positioning it absolutely and setting it to take up the full size of the parent container using the absolute inset-0 classes.

                        Then, we're adding another div inside the parent div and positioning it relatively. We're setting its z-index to a higher value than the overlay, so that it appears on top of the overlay. This is where we're including the navbar and container content.</p>
                </div>
                <div class="flex justify-center sm:flex-none sm:justify-normal">
                    <p class="scale-90 sm:scale-100 text-sm text-gray-500 pb-4">
                        <a href="#" class="inline-block">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                        </a>
                        <time datetime="2020-03-16">Mar 16, 2020</time>
                    </p>
                </div>

                
                <a href="#" class="hidden sm:inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Selengkapnya
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    {{-- END FOREACH --}}

    <div class="sm:max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg w-full h-56 object-cover bg-cover" src="{{asset('img/ghibli.png')}}" alt="" />
        </a>
        <div class="p-2 sm:p-5">
            <a href="#">
                <h5 class="mb-2 text-center sm:text-left text-2xl sm:text-xl font-bold tracking-tight text-gray-900 text-black">Noteworthy technology acquisitions 2021</h5>
            </a>
            <div class="hidden sm:inline">
                <p class="mb-3 font-normal text-base text-gray-700 line-clamp-4 text-justify">In this code, we're using a div with a black background color and 50% opacity as an overlay on top of the background image. We're positioning it absolutely and setting it to take up the full size of the parent container using the absolute inset-0 classes.

                    Then, we're adding another div inside the parent div and positioning it relatively. We're setting its z-index to a higher value than the overlay, so that it appears on top of the overlay. This is where we're including the navbar and container content.</p>
            </div>
            <div class="flex justify-center sm:flex-none sm:justify-normal">
                <p class="scale-90 sm:scale-100 text-sm text-gray-500 pb-4">
                    <a href="#" class="inline-block">
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                    </a>
                    <time datetime="2020-03-16">Mar 16, 2020</time>
                </p>
            </div>

            
            <a href="#" class="hidden sm:inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Selengkapnya
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>

    <div class="sm:max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg w-full h-56 object-cover bg-cover" src="{{asset('img/ghibli.png')}}" alt="" />
        </a>
        <div class="p-2 sm:p-5">
            <a href="#">
                <h5 class="mb-2 text-center sm:text-left text-2xl sm:text-xl font-bold tracking-tight text-gray-900 text-black">Noteworthy technology acquisitions 2021</h5>
            </a>
            <div class="hidden sm:inline">
                <p class="mb-3 font-normal text-base text-gray-700 line-clamp-4 text-justify">In this code, we're using a div with a black background color and 50% opacity as an overlay on top of the background image. We're positioning it absolutely and setting it to take up the full size of the parent container using the absolute inset-0 classes.

                    Then, we're adding another div inside the parent div and positioning it relatively. We're setting its z-index to a higher value than the overlay, so that it appears on top of the overlay. This is where we're including the navbar and container content.</p>
            </div>
            <div class="flex justify-center sm:flex-none sm:justify-normal">
                <p class="scale-90 sm:scale-100 text-sm text-gray-500 pb-4">
                    <a href="#" class="inline-block">
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                    </a>
                    <time datetime="2020-03-16">Mar 16, 2020</time>
                </p>
            </div>

            
            <a href="#" class="hidden sm:inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Selengkapnya
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>

    <div class="sm:max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg w-full h-56 object-cover bg-cover" src="{{asset('img/ghibli.png')}}" alt="" />
        </a>
        <div class="p-2 sm:p-5">
            <a href="#">
                <h5 class="mb-2 text-center sm:text-left text-2xl sm:text-xl font-bold tracking-tight text-gray-900 text-black">Noteworthy technology acquisitions 2021</h5>
            </a>
            <div class="hidden sm:inline">
                <p class="mb-3 font-normal text-base text-gray-700 line-clamp-4 text-justify">In this code, we're using a div with a black background color and 50% opacity as an overlay on top of the background image. We're positioning it absolutely and setting it to take up the full size of the parent container using the absolute inset-0 classes.

                    Then, we're adding another div inside the parent div and positioning it relatively. We're setting its z-index to a higher value than the overlay, so that it appears on top of the overlay. This is where we're including the navbar and container content.</p>
            </div>
            <div class="flex justify-center sm:flex-none sm:justify-normal">
                <p class="scale-90 sm:scale-100 text-sm text-gray-500 pb-4">
                    <a href="#" class="inline-block">
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                    </a>
                    <time datetime="2020-03-16">Mar 16, 2020</time>
                </p>
            </div>

            
            <a href="#" class="hidden sm:inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Selengkapnya
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>  

    <div class="sm:max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg w-full h-56 object-cover bg-cover" src="{{asset('img/ghibli.png')}}" alt="" />
        </a>
        <div class="p-2 sm:p-5">
            <a href="#">
                <h5 class="mb-2 text-center sm:text-left text-2xl sm:text-xl font-bold tracking-tight text-gray-900 text-black">Noteworthy technology acquisitions 2021</h5>
            </a>
            <div class="hidden sm:inline">
                <p class="mb-3 font-normal text-base text-gray-700 line-clamp-4 text-justify">In this code, we're using a div with a black background color and 50% opacity as an overlay on top of the background image. We're positioning it absolutely and setting it to take up the full size of the parent container using the absolute inset-0 classes.

                    Then, we're adding another div inside the parent div and positioning it relatively. We're setting its z-index to a higher value than the overlay, so that it appears on top of the overlay. This is where we're including the navbar and container content.</p>
            </div>
            <div class="flex justify-center sm:flex-none sm:justify-normal">
                <p class="scale-90 sm:scale-100 text-sm text-gray-500 pb-4">
                    <a href="#" class="inline-block">
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                    </a>
                    <time datetime="2020-03-16">Mar 16, 2020</time>
                </p>
            </div>

            
            <a href="#" class="hidden sm:inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Selengkapnya
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>

{{-- PAGINATION START --}}

<nav aria-label="Page navigation example">
    <ul class="list-style-none flex">
      <li>
        <a
          class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300"
          >Previous</a
        >
      </li>
      <li>
        <a
          class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-indigo-500 hover:text-white"
          href="#!"
          >1</a
        >
      </li>
      <li aria-current="page">
        <a
          class="relative block rounded bg-primary-100 px-3 py-1.5 text-sm font-medium text-primary-700 transition-all duration-300"
          href="#!"
          >2
          <span
            class="absolute -m-px h-px w-px overflow-hidden whitespace-nowrap border-0 p-0 [clip:rect(0,0,0,0)]"
            >(current)</span
          >
        </a>
      </li>
      <li>
        <a
          class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-indigo-500 hover:text-white"
          href="#!"
          >3</a
        >
      </li>
      <li>
        <a
          class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-indigo-500 hover:text-white"
          href="#!"
          >Next</a
        >
      </li>
    </ul>
  </nav>

{{-- PAGINATION END --}}

    </div>
</div>
@endsection