@extends ('partial.main')

@section('container')

    <p class="text-center text-4xl font-extrabold m-10" data-aos="zoom-in-down" data-aos-duration="800">
        Profil Sekolah
    </p>

    <!-- NAMA KEPSEK WAKASEK -->

    <div class="grid grid-cols-2 lg:px-36 ">
        <div class="text-center flex flex-col justify-center items-center">
            <img src="{{asset('img/kepsek.png')}}" alt="" class="max-w-xs max-sm:w-60">
            <p class="font-semibold">Kepala Sekolah</p>
            <p>Endriyani Hasto Dewi, S.Pd.</p>
            <p>NIP. 19680804 199403 2 009</p>
        </div>
        <div class="text-center flex flex-col justify-center items-center overflow-x-auto">
            <div class="bg-white rounded-lg drop-shadow-xl p-6">
                <table class="table-fixed border-collapse ">
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
    </div>
    
    <!-- MAP -->
    
    <div class="grid grid-cols-2 lg:px-36">
        <div class="text-center flex flex-col items-center">
            <div class="max-sm:ml-10 max-w-xs text-justify flex-1 lg:mt-5">
                <p>Kami berkomitmen untuk memberikan pendidikan terbaik kepada para siswa, serta menciptakan lingkungan belajar yang aman, nyaman, dan mendukung.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg drop-shadow-xl p-6">
                    <div class="flex flex-col items-center max-sm:overflow-auto max-sm:relative max-sm:mt-5 max-sm:hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.36903993294723!2d112.72935277790985!3d-7.251693397360204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f94668aca7af%3A0x38c23305fd460e5b!2sBubutan%20IV%20Elementary%20School%20Surabaya!5e0!3m2!1sen!2sid!4v1677412017573!5m2!1sen!2sid" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>

    </div>


    <!-- VISI MISI -->
    <div>
    <div class="text-center text-4xl font-bold m-10">Visi dan Misi</div>
    <div>
        <div class="lg:pl-52 max-sm:pl-10" data-aos="fade-up" data-aos-duration="500">
            <p class="text-xl font-bold">Visi SDN Bubutan 4 Surabaya</p>
            <br>
            <p class="text-base font-medium">“Berprestasi, Peduli Lingkungan, Berwawasan Global, Berjiwa Nasional, Berdasar Iman Dan Taqwa”</p>
        </div>
        <br>
        <div class="lg:px-52 max-sm:px-10" data-aos="fade-up" data-aos-duration="900">
            <p class="text-xl font-bold">Misi SDN Bubutan 4 Surabaya</p>
            <br>
            <table class="border-collapse text-justify sm:text-left"> 
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
    
</div>

    <!-- EKSTRA NYA -->
    <div class="text-center text-4xl font-bold m-10">Ekstrakurikuler</div>
    <div class="lg:px-36 lg:py-10">
        <div class="swiper mySwiper h-3/5 max-sm:w-3/5 lg:w-4/5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2021/10/WhatsApp-Image-2021-09-29-at-19.14.58.jpeg" alt="black chair and white table" class="object-cover object-center object-contain w-full rounded-xl shadow-lg" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Tari</h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2018/07/Drumband-705x400.jpg" alt="black chair and white table" class="object-cover object-center object-contain w-full rounded-xl shadow-lg" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Drumband</h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2018/07/IMG-20180426-WA0043-715x400.jpg" alt="black chair and white table" class="object-cover object-center object-contain w-full rounded-xl shadow-lg" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Pencak Silat</h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2018/07/IMG-20180426-WA0051-715x400.jpg" alt="black chair and white table" class="object-cover object-center object-contain w-full rounded-xl shadow-lg" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Qiroah</h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2018/07/samproh-715x400.jpg" alt="black chair and white table" class="object-cover object-center object-contain w-full rounded-xl shadow-lg" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Samproh</h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://www.sdnbubutan4sby.sch.id/wp-content/uploads/2018/07/IMG_2790-715x400.jpg" alt="black chair and white table" class="object-cover object-center object-contain w-full rounded-xl shadow-lg" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6 rounded-xl shadow-lg">
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-white">Pramuka</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- DAFTAR GURU DAN STAFF -->
    <div class="text-center text-4xl font-bold mx-10 my-4">Daftar Guru & Staff</div>
    <div class="lg:mx-36 mx-10 my-10">
        <div class="drop-shadow-md py-2 align-middle    ">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg">
            <table class="table-auto w-full px-6 min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 lg:px-10 text-left text-sm font-semibold text-gray-900 pl-6">Nama</th>
                  <th scope="col" class="py-3.5 lg:px-10 text-left text-sm font-semibold text-gray-900">Posisi</th>
                </tr>
              </thead>
              {{-- @foreach ($teachers as $teacher) --}}
              <tbody class="divide-y divide-gray-200 bg-white">
                <tr>
                  <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 pl-6">Tegar Alwinata</td>
                  <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-700">Guru IPS</td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 pl-6">Mirza Alwinata</td>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-700">Guru IPA</td>              
                </tr>
                <tr>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 pl-6">Auliya Alwinata</td>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-700">Guru Kelas 2</td>                        
                </tr>
                <tr>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 pl-6">Tegar Amir Faizi</td>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-700">Guru Kelas 5</td>                     
                </tr>
                <tr>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 pl-6">Tegar Rakhman Hidayat</td>
                    <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-700">Tata Kelola</td> 
                </tr>
                {{-- @endforeach --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    



    <!-- Style Carousel -->

    <style>
        .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }
    </style>

    <!-- SCRIPT CAROUSEL -->

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 3,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 50,
                },
            },
        });
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