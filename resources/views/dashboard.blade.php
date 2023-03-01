@extends ('partial.main_navbar')

@section('container')

        
<div class="px-6 pt-6 2xl:container">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="md:col-span-2 lg:col-span-1" >
            <div class="h-full py-6 px-6 rounded-xl border border-gray-200 bg-white">
                <h5 class="text-xl text-gray-700">Newest Post</h5>
                ini nampilin post terbaru dalam bentuk card lagi
            </div>
        </div>
        <div>
            <div class="h-full py-6 px-6 rounded-xl border border-gray-200 bg-white">
                <h5 class="text-xl text-gray-700">Categories</h5>
                <div class="my-8">
                    <h1 class="text-5xl font-bold text-gray-800">ini nanti total kategori</h1>
                </div>
                <table class="mt-6 -mb-2 w-full text-gray-600">
                    ini tabel nama kategori
                </table>   
            </div>
        </div>
        <div>
            <div class="lg:h-full py-8 px-6 text-gray-600 rounded-xl border border-gray-200 bg-white">
                <div class="mt-6">
                    <h1 class="text-7xl text-center m-4">90</h1>
                    <h5 class="text-xl text-gray-700 text-center">Jumlah Post Saat Ini</h5>
                </div>
                <table class="mt-6 -mb-2 w-full text-gray-600">
                    <tbody>
                        <tr>
                            <td class="py-2">Kategori 1 terbanyak</td>
                            <td class="text-gray-500">total berapa</td>
                        </tr>
                        <tr>
                            <td class="py-2">kategori 2 terbanyak</td>
                            <td class="text-gray-500">total berapa</td>  
                        </tr>
                        <tr>
                            <td class="py-2">Kategori 3 terbanyak</td>
                            <td class="text-gray-500">total berapa</td>
                            </td>   
                        </tr>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
</div>
</div>

@endsection