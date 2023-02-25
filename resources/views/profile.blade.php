@extends ('partial.main')

@section('container')

    <div class="text-center text-4xl font-bold m-10">Profil Sekolah</div>

    <!-- NAMA KEPSEK WAKASEK -->

    <div class="grid grid-cols-2 gap-12">
        <div class="text-center flex flex-col justify-center items-center">
            <img src="{{asset('img/kepsek.png')}}" alt="" class="max-w-xs">
            <p class="font-semibold">Kepala Sekolah</p>
            <p>nama</p>
            
        </div>
        <div class="text-center flex flex-col justify-center items-center">
            <img src="{{asset('img/kepsek.png')}}" alt="" class="max-w-xs">
            <p class="font-semibold">Wakil Kepala Sekolah</p>
            <p>nama</p>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-12">
        <div class="text-center flex flex-col items-center">
            <div class="max-w-xs text-justify flex-1">
                <p>ini sebenernya ingin buat sambutan tapi kalo misalkan tidak ada kata sambutan yasudah tidak apa-apa kita bisa gunakan kalimat lain saja daripada susah susah</p>
            </div>
        </div>
        <div class="text-center flex flex-col items-center">
            <div class="max-w-xs text-justify flex-1">
                <p>ini sebenernya ingin buat sambutan</p>
            </div>
        </div>
    </div>

    <!-- VISI MISI -->

    <div class="text-center text-4xl font-bold m-10">Visi dan Misi</div>
    <div class="grid grid-cols-3 mb-3">
        <div class="text-center flex flex-col justify-center items-center">
            <p class="text-2xl font-semibold">Visi</p>
        </div>
        <div class="text-center flex flex-col justify-center items-center col-span-2">
            <p class="text-2xl font-semibold">Misi</p>
        </div>
    </div>
    <div class="grid grid-cols-3">
        <div class="text-center flex flex-col justify-center items-center">
            <p class="max-w-sm flex-1">
                Berprestasi, Peduli Lingkungan, Berwawasan Global, Berjiwa Nasional, Berdasar Iman Dan Taqwa
            </p>
        </div>
        <div class="flex flex-col justify-center items-center col-span-2">
            <div class="flex">
                <div class="text-left mr-2">
                    <p class="">1.</p>
                </div>
                <div class="max-w-lg">
                    <p>Meningkatkan iman dan taqwa kepada tuhan YME melalui intra kurikuler maupun kegiatan-kegiatan peningkatan keimanan dan ketaqwaan</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>2.</p>
                </div>
                <div class="max-w-lg">
                    <p>Menumbuhkembangkan semangat kompetisi secara sehat dalam prestasi akademik maupun non akademik</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>3.</p>
                </div>
                <div class="max-w-lg">
                    <p>Mengembangkan budaya gemar membaca, rasa ingin tahu, bertoleransi, bekerjasama, saling menghargai, disiplin, jujur, kerja keras, kreatif dan mandiri</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>4.</p>
                </div>
                <div class="max-w-lg">
                    <p>Menumbuhkembangkan rasa percaya diri untuk maju dan kedisiplinandalam pelayanan pendidikan</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>5.</p>
                </div>
                <div class="max-w-lg">
                    <p>Menyiapkan generasi unggul yang memiliki potensi di bidang imtaq dan iptek</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>6.</p>
                </div>
                <div class="max-w-lg">
                    <p>Meningkatkan usaha pelestarian lingkungan dengan cara konservasi air dan menciptakan lingkungan hijau</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>7.</p>
                </div>
                <div class="max-w-lg">
                    <p>Melaksanakan pencegahan pencemaran lingkungan dengan cara memanfaatkan biopori, sumur resapan dan water threatment (apal – alat pengetahuan air limbah, rain water tank)</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>8.</p>
                </div>
                <div class="max-w-lg">
                    <p>Mencegah kerusakan lingkungan dengan cara pengolahan sampah dan peremajaan tanaman</p>
                </div>
            </div>
            <div class="flex">
                <div class="text-left mr-2">
                    <p>9.</p>
                </div>
                <div class="max-w-lg">
                    <p>Menumbuhkankembangkan sikap toleransi berwawasan pergaulan global agar tercipta rasa dan sikap estetika, etika berdasarkan pancasila</p>
                </div>
            </div>
            <div class="flex mr-9 lg:w-6/12">
                <div class="text-left mr-2">
                    <p>10.</p>
                </div>
                <div class="max-w-lg">
                    <p>Mengembangkan sikap cinta budaya nasional</p>
                </div>
            </div>
        </div>
    </div>

    <!-- EKSTRA NYA -->

    <div class="text-center text-4xl font-bold m-20">Ekstrakurikuler</div>
    <div class="flex items-center justify-center w-full px-36">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 1</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Tari</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Drumband</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Pencak Silat</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Qiroah</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Samproh</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Pramuka</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area" class="object-cover object-center w-full" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>
@endsection