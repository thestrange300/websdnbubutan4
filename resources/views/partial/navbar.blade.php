<nav class="z-30 drop-shadow-lg backdrop-blur-sm bg-white/80 rounded-lg mx-48 mt-5 max-sm:bg-white/80 max-sm:mx-3 max-sm:mt-3 sticky top-4 z-50">
    <div class="mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16 sm:grid-cols-2">
        <img class=" relative invisible md:visible w-10 h-10 place-content-left" src="{{asset('img/Logo-Sekolah.png')}}" alt="logo sekolah">
        {{-- <img class=" w-10 h-10 sm:block sm:place-content-center" src="{{asset('img/Logo-Sekolah.png')}}" alt="logo sekolah"> --}}
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          
          <!-- Mobile menu button-->
          <button type="button" class="pointer-events-auto inline-flex items-center justify-center p-2 rounded-md text-gray-400 text-white bg-transparent" aria-controls="mobile-menu" aria-expanded="false">
            <svg id="dropdown" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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
              
              <a href="/" class="my-auto relative bg-gradient-to-r from-cyan-500 to-blue-500 text-white px-3 py-2 rounded-md text-base font-bold" aria-current="page">Dashboard</a>
  
              <a href="#" class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium">Profil</a>
              <a href="#" class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium">Kurikulum</a>
  
              <a href="#" class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium">Karya dan Prestasi</a>
  
              <a href="#" class="my-auto text-cyan-900 px-3 py-2 rounded-md text-base font-medium">Perpustakaan</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

{{-- NOTIFICATION --}}
          {{-- <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: outline/bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button> --}}
  
          <!-- Profile dropdown -->
          {{-- <div class="ml-3 relative">
            <div>
              <button type="button" id="dropdown" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
            </div>
  
            <!--
              Dropdown menu, show/hide based on menu state.
  
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div id="drop1" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden " role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      
      <div id="drop1" class="transition-all  px-2 pt-2 pb-3 space-y-1">
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