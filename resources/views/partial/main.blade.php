<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- class="bg-cover bg-center" style="background-image:url({{asset('img/ghibli.png')}})"  --}}
    <div>
        @include('partial.navbar')
        @yield('container')
    </div>
</body>
</html>