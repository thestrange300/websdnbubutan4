<nav class="drop-shadow-lg backdrop-blur-sm bg-white/80 rounded-lg max-sm:bg-white/80 max-sm:mx-3 sm:sticky top-0 z-50">
    <div class="mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16 sm:grid-cols-2">
        <img class=" relative invisible md:visible w-10 h-10 place-content-left" src="{{asset('img/Logo-Sekolah.png')}}" alt="logo sekolah">
        {{-- <img class=" w-10 h-10 sm:block sm:place-content-center" src="{{asset('img/Logo-Sekolah.png')}}" alt="logo sekolah"> --}}
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          
          <!-- Mobile menu button-->
          <button type="button" class="pointer-events-auto inline-flex items-center justify-center p-2 rounded-md text-gray-400 text-white bg-transparent" aria-controls="mobile-menu" aria-expanded="false">
            <svg id="dropdown" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" color="black" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        
        <div class="flex-1 flex items-center justify-center pr-5">
          
          <div class="flex-shrink-0 flex items-center">
            
            {{-- ITEM MOBILE --}}
            <img class="block sm:hidden h-10 w-10" src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2020/03/Logo-Sekolah.png" alt="Workflow">
          </div>
          <div class="hidden sm:block">
            
            <div class="flex space-x-4 gap-8">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300" -->
              
              <a href="/" class="my-auto relative bg-gradient-to-r from-cyan-500 to-blue-500 text-white px-3 py-2 rounded-md text-base font-bold" aria-current="page">Home</a>
              
              {{-- DROPDOWN PROFIL --}}
{{-- 
              <a href="/profile" class="text-cyan-900 block px-3 py-2 rounded-md text-base font-medium">Profil</a> --}}

              {{-- DROPDOWN KURIKULUM --}}
              
              <div data-te-dropdown-ref class="my-auto">
                <a
                  class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out motion-reduce:transition-none"
                  href="#"
                  type="button"
                  id="dropdownMenuButton2"
                  data-te-dropdown-toggle-ref
                  aria-expanded="false"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  Kurikulum
                </a>
                <ul
                  class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                  aria-labelledby="dropdownMenuButton2"
                  data-te-dropdown-menu-ref>
                  <h6
                  class="block w-full whitespace-nowrap bg-transparent pt-2 px-4 text-sm font-bold text-neutral-600">
                  Kurikulum 2013
                  </h6>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >&ensp;Silabus</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >&ensp;RPP</a
                    >
                  </li>
                  <h6
                  class="block w-full whitespace-nowrap bg-transparent pt-2 px-4 text-sm font-bold text-neutral-600">
                  Kurikulum Merdeka
                  </h6>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >&ensp;Silabus</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >&ensp;RPP</a
                    >
                  </li>
                </ul>
              </div>

              {{-- DROPDOWN EKSTRA --}}
              
              <div data-te-dropdown-ref class="my-auto">
                <a
                  class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out motion-reduce:transition-none"
                  href="#"
                  type="button"
                  id="dropdownMenuButton2"
                  data-te-dropdown-toggle-ref
                  aria-expanded="false"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  Ekstrakurikuler
                </a>
                <ul
                  class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                  aria-labelledby="dropdownMenuButton2"
                  data-te-dropdown-menu-ref>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >Tari</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >Pencaksilat</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >Qiroah</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >Samproh</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >Pramuka</a
                    >
                  </li>
                </ul>
              </div>

              {{-- DROPDOWN ADIWIYATA --}}

              <div data-te-dropdown-ref class="my-auto">
                <a
                  class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out motion-reduce:transition-none"
                  href="#"
                  type="button"
                  id="dropdownMenuButton2"
                  data-te-dropdown-toggle-ref
                  aria-expanded="false"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  Adiwiyata
                </a>
                <ul
                  class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                  aria-labelledby="dropdownMenuButton2"
                  data-te-dropdown-menu-ref>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >Ecopreneur</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >Ecoschool</a
                    >
                  </li>
                  
                </ul>
              </div>

              {{-- DROPDOWN KARYA --}}

              <div data-te-dropdown-ref class="my-auto">
                <a
                  class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out motion-reduce:transition-none"
                  href="#"
                  type="button"
                  id="dropdownMenuButton2"
                  data-te-dropdown-toggle-ref
                  aria-expanded="false"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  Karya dan Prestasi
                </a>
                <ul
                  class="absolute z-[1000] float-center m-0 place-self-center hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                  aria-labelledby="dropdownMenuButton2"
                  data-te-dropdown-menu-ref>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Guru&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</a
                    >
                  </li>
                  <li>
                    <a
                      class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                      href="#"
                      data-te-dropdown-item-ref
                      >&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Siswa&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</a
                    >
                  </li>
                </ul>
              </div>
  
              <a href="https://sipus.surabaya.go.id/" class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium">Perpustakaan</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      
      <div id="drop1" class="transition-all  px-2 pt-2 pb-3 space-y-1 hidden">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300" -->
        <a href="/" class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
  
        <a href="#" class="text-cyan-900 block px-3 py-2 rounded-md text-base font-medium">Profil</a>
  
        <a href="#" class="text-cyan-900 block px-3 py-2 rounded-md text-base font-medium">Kurikulum</a>
  
        <a href="#" class="text-cyan-900 block px-3 py-2 rounded-md text-base font-medium">Karya dan Prestasi</a>

        <a href="#" class="text-cyan-900 block px-3 py-2 rounded-md text-base font-medium">Perpustakaan</a>
      </div>
    </div>
  </nav>
<script src="{{ asset("js/dropdown.js") }}"></script>