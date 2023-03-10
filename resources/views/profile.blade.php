@extends ('partial.main')

@section('container')

    <div class="animate__animated animate__backInDown text-center text-4xl font-bold m-10">Profil Sekolah</div>

    <!-- NAMA KEPSEK WAKASEK -->

    <div class="grid grid-cols-2 lg:px-36">
        <div class="text-center flex flex-col justify-center items-center">
            <img src="{{asset('img/kepsek.png')}}" alt="" class="max-w-xs max-sm:w-60">
            <p class="font-semibold">Kepala Sekolah</p>
            <p>Endriyani Hasto Dewi, S.Pd.</p>
            <p>19680804 199403 2 009</p>
        </div>
        <div class="text-center flex flex-col justify-center items-center overflow-x-auto">
            <table class="table-fixed border-collapse">
                <tbody>
                    <tr>
                        <td class="pr-10">Nama Sekolah</td>
                        <td class="break-all">:&nbsp;SDN Bubutan IV Surabaya</td>
                    </tr>
                    <td>&nbsp;</td>
                    <tr>
                        <td class="pr-10">NPSN</td>
                        <td class="break-all">:&nbsp;20532958</td>
                    </tr>
                    <td>&nbsp;</td>
                    <tr>
                        <td class="pr-10">NSS</td>
                        <td class="break-all">:&nbsp;101056004010</td>
                    </tr>
                    <td>&nbsp;</td>
                    <tr>
                        <td class="pr-10">Alamat</td>
                        <td class="break-all">:&nbsp;Jl. Semarang No.90</td>
                    </tr>
                    <td>&nbsp;</td>
                    <tr>
                        <td class="pr-10">No. Telepon</td>
                        <td class="break-all">:&nbsp;031-5483243</td>
                    </tr>
                    <td>&nbsp;</td>
                    <tr>
                        <td class="pr-10">Alamat email</td>
                        <td class="break-all">:&nbsp;sdnbubutanempat72@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- MAP -->

    <div class="grid grid-cols-2 lg:px-36">
        <div class="text-center flex flex-col items-center">
            <div class="max-sm:ml-10 max-w-xs text-justify flex-1 lg:mt-5">
                <p>Kami berkomitmen untuk memberikan pendidikan terbaik kepada para siswa, serta menciptakan lingkungan belajar yang aman, nyaman, dan mendukung.</p>
            </div>
        </div>
        <div class="flex flex-col items-center max-sm:overflow-auto max-sm:relative max-sm:mt-5 max-sm:hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.36903993294723!2d112.72935277790985!3d-7.251693397360204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f94668aca7af%3A0x38c23305fd460e5b!2sBubutan%20IV%20Elementary%20School%20Surabaya!5e0!3m2!1sen!2sid!4v1677412017573!5m2!1sen!2sid" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="flex flex-col items-center max-sm:overflow-auto max-sm:relative max-sm:mt-5 lg:hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.36903993294723!2d112.72935277790985!3d-7.251693397360204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f94668aca7af%3A0x38c23305fd460e5b!2sBubutan%20IV%20Elementary%20School%20Surabaya!5e0!3m2!1sen!2sid!4v1677412017573!5m2!1sen!2sid" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- VISI MISI -->
    <div data-aos="fade-up" data-aos-duration="2000">
    <div class="text-center text-4xl font-bold m-10">Visi dan Misi</div>
    <div class="lg:pl-52 max-sm:pl-10">
        <p class="text-xl font-semibold">Visi SDN Bubutan 4 Surabaya</p>
        <br>
        <p class="text-base font-medium">“Berprestasi, Peduli Lingkungan, Berwawasan Global, Berjiwa Nasional, Berdasar Iman Dan Taqwa”</p>
    </div>
    <br>
    <div class="lg:px-52 max-sm:pl-10">
        <p class="text-xl font-semibold">Misi SDN Bubutan 4 Surabaya</p>
        <br>
        <table class="border-collapse"> 
            <tbody>
                <tr>
                    <td class="align-top">1.</td>
                    <td>Meningkatkan iman dan taqwa kepada tuhan YME melalui intra kurikuler maupun kegiatan-kegiatan peningkatan keimanan dan ketaqwaan.</td>
                </tr>
                <tr>
                    <td class="align-top">2.</td>
                    <td>Menumbuhkembangkan semangat kompetisi secara sehat dalam prestasi akademik maupun non akademik.</td>
                </tr>
                <tr>
                    <td class="align-top">3.</td>
                    <td>Mengembangkan budaya gemar membaca, rasa ingin tahu, bertoleransi, bekerjasama, saling menghargai, disiplin, jujur, kerja keras, kreatif dan mandiri.</td>
                </tr>
                <tr>
                    <td class="align-top">4.</td>
                    <td>Menumbuhkembangkan rasa percaya diri untuk maju dan kedisiplinandalam pelayanan pendidikan.</td>
                </tr>
                <tr>
                    <td class="align-top">5.</td>
                    <td>Menyiapkan generasi unggul yang memiliki potensi di bidang imtaq dan iptek.</td>
                </tr>
                <tr>
                    <td class="align-top">6.</td>
                    <td>Meningkatkan usaha pelestarian lingkungan dengan cara konservasi air dan menciptakan lingkungan hijau.</td>
                </tr>
                <tr>
                    <td class="align-top">7.</td>
                    <td>Melaksanakan pencegahan pencemaran lingkungan dengan cara memanfaatkan biopori, sumur resapan dan water threatment (apal – alat pengetahuan air limbah, rain water tank).</td>
                </tr>
                <tr>
                    <td class="align-top">8.</td>
                    <td>Mencegah kerusakan lingkungan dengan cara pengolahan sampah dan peremajaan tanaman.</td>
                </tr>
                <tr>
                    <td class="align-top">9.</td>
                    <td>Menumbuhkankembangkan sikap toleransi berwawasan pergaulan global agar tercipta rasa dan sikap estetika, etika berdasarkan pancasila.</td>
                </tr>
                <tr>
                    <td class="align-top">10.</td>
                    <td>Mengembangkan sikap cinta budaya nasional.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    <!-- EKSTRA NYA -->

    <div >
        <div data-aos="fade-right" data-aos-duration="2000" class="text-center text-4xl font-bold m-20">Ekstrakurikuler</div>
        <div data-aos="fade-left" data-aos-duration="2000" class="flex items-center justify-center w-full px-36 pb-10">
            <div class="w-full relative flex items-center justify-center">
                <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                    <svg class="dark:text-white" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="back w-full h-full mx-auto overflow-x-hidden overflow-y-hidden ">
                    <div id="slider" class="h-3/5 flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 1</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Tari</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Drumband</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Pencak Silat</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Qiroah</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Samproh</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Pramuka</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area" class="object-cover object-center w-full rounded-xl shadow-lg" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-white">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                    <svg class="dark:text-white" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    

    <!-- SCRIPT CAROUSEL -->

    <script>
        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - 225;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 225;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>

    <!-- SCRIPT API GMAPS -->

    <script>
        function initMap() {
        var uluru = {lat: -7.251563330133019, lng: 112.72942524348672};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 19,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMVKQLW6QFxQBXMVWy9n1t3v5N9_eReQU&callback=initMap"></script>

@endsection