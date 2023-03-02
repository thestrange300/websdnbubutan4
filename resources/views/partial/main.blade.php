<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/Logo-Sekolah.png')}}" type="image/png">
    {{-- <link href="{{ asset('/css/dropdown.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
    
    <title>SDN Bubutan IV</title>
    @vite('resources/css/app.css')
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    {{-- class="bg-cover bg-center" style="background-image:url({{asset('img/ghibli.png')}})"  --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <div>
        @include('partial.navbar')
        @yield('container')
    </div>
</body>
<!-- This example requires Tailwind CSS v2.0+ -->
@include('partial.footer')
</html>