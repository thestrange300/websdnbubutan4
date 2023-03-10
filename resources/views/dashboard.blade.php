@extends ('partial.main_navbar')

@section('container')

        
<div class="px-6 pt-6 2xl:container">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="md:col-span-2 lg:col-span-1" >


            <div class="drop-shadow-md h-full py-3 px-6 rounded-xl border border-gray-200 bg-white ">
                
                <h5 class="text-2xl text-gray-800 font-bold lg:block">Postingan Terbaru</h5>

                <div class="mt-2 mb-2" data-aos="zoom-in" data-aos-duration="300">
                    <div class="flex items-center justify-between space-x-5">
                      <div class="flex items-center flex-1 min-w-0">
                        <div class="mt-0 mr-0 mb-0 flex-1 min-w-0">
                          <p class="text-base font-semibold text-gray-800 truncate">Bazaar olahan Sayur Hidroponik</p>
                          <a href="#" class="inline-block">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800"> Ecopreneur </span>
                          </a>
                          <a href="#" class="inline-block">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800"> Ecoschool </span>
                          </a>
                        </div>
                      </div>
                        <a href="" class=" text-sm font-bold text-black transition-all
                            duration-200 rounded-lg">Lihat</a>
                    </div>
                  </div>
                  <hr/>
                  
                  <div class="mt-2 mb-2" data-aos="zoom-in" data-aos-duration="500">
                    <div class="flex items-center justify-between space-x-5">
                      <div class="flex items-center flex-1 min-w-0">
                        <div class="mt-0 mr-0 mb-0 flex-1 min-w-0">
                          <p class="text-base font-semibold text-gray-800 truncate">Bazaar olahan Sayur Hidroponik</p>
                          <a href="#" class="inline-block">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800"> Ecopreneur </span>
                          </a>
                          <a href="#" class="inline-block">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800"> Ecoschool </span>
                          </a>
                        </div>
                      </div>
                        <a href="" class=" text-sm font-bold text-black transition-all
                            duration-200 rounded-lg">Lihat</a>
                    </div>
                  </div>
                  <hr/>

                  <div class="mt-2 mb-2 " data-aos="zoom-in" data-aos-duration="700">
                    <div class="flex items-center justify-between space-x-5">
                      <div class="flex items-center flex-1 min-w-0">
                        <div class="mt-0 mr-0 mb-0 flex-1 min-w-0">
                          <p class="text-base font-semibold text-gray-800 truncate">Bazaar olahan Sayur Hidroponik</p>
                          <a href="#" class="inline-block">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800"> Ecopreneur </span>
                          </a>
                          <a href="#" class="inline-block">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800"> Ecoschool </span>
                          </a>
                        </div>
                      </div>
                        <a href="" class=" text-sm font-bold text-black transition-all
                            duration-200 rounded-lg">Lihat</a>
                    </div>
                  </div>
                  <hr/>
                
                <div class="pb-1 pt-3 text-right">
                    <a href="" class=" text-sm font-bold text-black transition-all duration-200 rounded-lg ">Selengkapnya</a> 
                </div>
                 

            </div>
        </div>
        
       
        <div>
            <div class="drop-shadow-md h-full pt-4 px-6 rounded-xl border border-gray-200 bg-white">
                <h5 class="text-2xl text-gray-800 font-bold mb-8">Kategori</h5>
                <div class="flex items-center justify-between" data-aos="zoom-in" data-aos-duration="300">
                      <p class="text-base font-semibold text-gray-800 truncate">Adiwiyata</p>
                      <h4 class="text-base text-right font-bold mt-4">122</h4>
                </div>
                <div class="flex items-center justify-between" data-aos="zoom-in" data-aos-duration="500">
                  <p class="text-base font-semibold text-gray-800 truncate">Karya dan Prestasi</p>
                  <h4 class="text-base text-right font-bold mt-4">312</h4>
                </div>
                <div class="flex items-center justify-between" data-aos="zoom-in" data-aos-duration="700">
                  <p class="text-base font-semibold text-gray-800 truncate">Ekstrakurikuler</p>
                  <h4 class="text-base text-right font-bold mt-4">612</h4>
                </div>
                <div class="my-4">
                  <hr/>
                </div>
                   
                <div class="flex items-center justify-between" data-aos="zoom-in" data-aos-duration="1100">
                  <p class="text-lg font-bold text-gray-800 truncate">Total</p>
                  <h4 class="text-lg text-right font-bold">857</h4>
                </div> 
            </div>
        </div>

        <div>
            <div class="drop-shadow-md lg:h-full py-2 px-2 text-gray-600 rounded-xl border border-gray-200 bg-white" id="chart-container">
                <script>
                var dom = document.getElementById('chart-container');
                var myChart = echarts.init(dom,'roma', {
                renderer: 'canvas',
                useDirtyRect: false
                });
                var app = {};

                var option;

                option = {
                color: ['#80c2ff', '#2e9fdb', '#2179cc', '#00ffb7', '#00ff4c'],
                title: {
                    text: 'Total Post',
                    left: 'center'
                },
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    orient: 'horizontal',
                    left: 'center',
                    bottom: '0%'
                },
                series: [
                    {
                    name: 'Pie Chart',
                    type: 'pie',
                    radius: '70%',
                    data: [
                        { value: 1048, name: 'Ekstra' },
                        { value: 735, name: 'Adiwiyata' },
                        { value: 580, name: 'Karya dan Prestasi' }
                    ],
                    //     label: {
                    //     show: true,
                    //     position: 'center'
                    // },
                    emphasis: {
                        itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                    
                    }
                ]
                };

                if (option && typeof option === 'object') {
                myChart.setOption(option);
                }

                window.addEventListener('resize', myChart.resize);
                </script>
            </div>
        </div>
    </div>
    <div class="drop-shadow-md h-2/5 relative p-2 mt-6 rounded-xl border border-gray-200 bg-white " id="line-chart">
      <script>
        var dom = document.getElementById('line-chart');
        var myChart = echarts.init(dom, null, {
          renderer: 'canvas',
          useDirtyRect: false
        });
        var app = {};

        var option;

        option = {
          xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
          },
          yAxis: {
            type: 'value'
          },
          series: [
            {
              data: [150, 230, 224, 218, 135, 147, 260],
              type: 'line'
            }
          ]
        };

        if (option && typeof option === 'object') {
          myChart.setOption(option);
        }

        window.addEventListener('resize', myChart.resize);
        </script>
    </div>
</div>

</div>



@endsection