<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/Logo-Sekolah.png')}}" type="image/png">
    <link href="{{ asset('/css/dropdown.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<title>Login</title>
@vite('resources/css/app.css')
@vite('resources/js/app.js')

</head>
<body>
  <script>
import { Carousel, initTE } from "tw-elements";
initTE({ Carousel });    
  </script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    {{-- class="bg-cover bg-center" style="background-image:url({{asset('img/ghibli.png')}})"  --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <div>
        <div class="relative min-h-screen min-w-screen">
            <div class="bg-fixed bg-cover h-full w-full brightness-75" style="background-image: url('https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-10-at-10.47.26-1536x1152.jpeg');"></div>
            <div class="absolute top-0 left-0 right-0 bottom-0">
                <div class="flex items-center justify-center h-screen">
                    <div data-aos="fade-up" data-aos-duration="700" class="drop-shadow-md h-100 w-96 py-6 px-6 rounded-xl border border-gray-200 bg-white mx-auto">
                        <img data-aos="fade-up" data-aos-duration="800" class="h-16 w-auto mx-auto flex items-center justify-center" src="{{asset('img/Logo-Sekolah.png')}}" alt="">
                        <h1 data-aos="fade-up" data-aos-duration="900" class="text-3xl font-bold text-center my-4">Login</h1>
                        <div class="relative">
                            <div class="mb-1">
                              <label for="title" class="form-label block text-sm font-medium text-gray-700 pb-2">Username</label>
                              <input type="text" class="form-control drop-shadow-md px-2 py-2 
                              mt-1
                              block
                              w-full
                              rounded-md
                              border-gray-300
                              shadow-sm
                              focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                              max-w-lg" id="title" name="title">
                            </div>
                            <div class="mb-1">
                              <label for="title" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Password</label>
                              <input type="text" class="form-control drop-shadow-md px-2 py-2 
                              mt-1
                              block
                              w-full
                              rounded-md
                              border-gray-300
                              shadow-sm
                              focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                              max-w-lg" id="title" name="title">
                            </div>                
                          </div>
                          <div class="mt-10 mx-auto max-w-none flex justify-center">
                            <a href="" class="sticky text-2xl text-white items-center justify-center px-4 py-3 font-bold rounded-md shadow-sm bg-gradient-to-r from-cyan-400 to-blue-400"> Login </a>
                        </div>
                    </div>
                  </div> 
            </div>
          </div>
        {{-- <img class="bg-fixed bg-cover min-screen min-w-screen" src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-10-at-10.47.26-1536x1152.jpeg" alt=""> --}}

        

    </div>
</body>
<!-- This example requires Tailwind CSS v2.0+ -->
</html>