<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/Logo-Sekolah.png')}}" type="image/png">
    {{-- <link href="{{ asset('/css/dropdown.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://fastly.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <title>Portal Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <div>
        <aside class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 lg:ml-0 xl:w-[15%] 2xl:w-[15%]">
            <div>   
                <div class="-mx-6 px-6 py-4">
                    <a href="/test" title="home">
                        <img src="{{asset('img/Logo-Sekolah.png')}}" class="w-8 float-left" alt="logo sd">
                        <p class="float-right text-lg font-bold mt-1">SDN Bubutan IV</p>
                    </a>
                    <p class="pt-10 text-center text-gray-500">Portal Dashboard</p>
                </div>
                
                <div class="mt-8 text-center">
                    <img src="{{asset('img/profile.png')}}" alt="" class="w-10 h-10 m-auto object-cover lg:w-20 lg:h-20">
                    <h5 class="hidden mt-4 text-base font-semibold text-gray-800 lg:block">Tegar Alwinata</h5>
                    <span class="hidden text-base text-gray-600 lg:block">Administrator</span>
                </div>
                <ul class="space-y-2 tracking-wide mt-8">
                    <li>
                        <a href="/dashboard" aria-label="dashboard" class="relative px-4 py-3 flex items-center space-x-4 rounded-xl {{ $active == "dashboard" ? 'text-white font-bold bg-gradient-to-r from-sky-600 to-cyan-400' : 'text-gray-600' }}">
                            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                                <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                                <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                                <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                            </svg>
                            <span class="-mr-1 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/post" class="px-4 py-3 flex items-center space-x-4 rounded-md {{ $active == "dashboardpost" ? 'text-white bg-gradient-to-r from-sky-600 to-cyan-400' : 'text-gray-600' }} group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                                <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                            </svg>
                            <span class="text-sm group-hover:text-gray-700">Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/guru" class="px-4 py-3 flex items-center space-x-4 rounded-md {{ $active == "dashboardguru" ? 'text-white bg-gradient-to-r from-sky-600 to-cyan-400' : 'text-gray-600' }} group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                                <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                            </svg>
                            <span class="text-sm group-hover:text-gray-700">Daftar Guru</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/setting" class="px-4 py-3 flex items-center space-x-4 rounded-md {{ $active == "pengaturan" ? 'text-white bg-gradient-to-r from-sky-600 to-cyan-400' : 'text-gray-600' }} group">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 hover:text-cyan-600">
                                <path fill-rule="evenodd" d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 01-.517.608 7.45 7.45 0 00-.478.198.798.798 0 01-.796-.064l-.453-.324a1.875 1.875 0 00-2.416.2l-.243.243a1.875 1.875 0 00-.2 2.416l.324.453a.798.798 0 01.064.796 7.448 7.448 0 00-.198.478.798.798 0 01-.608.517l-.55.092a1.875 1.875 0 00-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 01-.064.796l-.324.453a1.875 1.875 0 00.2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 01.796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 01.517-.608 7.52 7.52 0 00.478-.198.798.798 0 01.796.064l.453.324a1.875 1.875 0 002.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 01-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 001.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 01-.608-.517 7.507 7.507 0 00-.198-.478.798.798 0 01.064-.796l.324-.453a1.875 1.875 0 00-.2-2.416l-.243-.243a1.875 1.875 0 00-2.416-.2l-.453.324a.798.798 0 01-.796.064 7.462 7.462 0 00-.478-.198.798.798 0 01-.517-.608l-.091-.55a1.875 1.875 0 00-1.85-1.566h-.344zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
                              </svg>
                              
                            <span class="text-sm group-hover:text-gray-700">Pengaturan</span>
                        </a>
                    </li>                    
                </ul>
            </div>
        
            <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
                <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="group-hover:text-gray-700">Logout</span>
                </button>
            </div>
        </aside>
        <div class="ml-auto mb-6 lg:w-[85%] ">
            <div class="sticky z-10 top-0 border-b bg-white lg:py-2.5">
                <div class="px-6 flex items-center justify-between space-x-4 2xl:container">
                    <h5 hidden class="text-2xl text-gray-800 font-bold lg:block">Dashboard</h5>                    
                </div>
            </div>
        @yield('container')
    </div>
</body>
</html>