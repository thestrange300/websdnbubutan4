@extends ('partial.main_navbar')

@section('container')

        
<div class="px-6 pt-6 2xl:container">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="md:col-span-2 lg:col-span-1" >


            <div class="drop-shadow-md h-full py-3 px-6 rounded-xl border border-gray-200 bg-white ">
                
                <h5 class="text-2xl text-gray-800 font-bold lg:block">Postingan Terbaru</h5>

                @foreach ($latest->take(3) as $item)
                <div class="mt-2 mb-2" data-aos="zoom-in" data-aos-duration="300">
                  <div class="flex items-center justify-between space-x-5">
                    <div class="flex items-center flex-1 min-w-0">
                      <div class="mt-0 mr-0 mb-0 flex-1 min-w-0">
                        <p class="text-base font-semibold text-gray-800 whitespace-normal">{{ $item->judul }}</p>
                        <a href="#" class="inline-block">
                          <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-{{ $item->warna1 }}-100 text-{{ $item->warna1 }}-800"> {{ $item->mainKategori }} </span>
                        </a>
                        <a href="/post/{{ $item->kategori }}" class="inline-block">
                          <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-{{ $item->warna2 }}-100 text-{{ $item->warna2 }}-800"> {{ $item->kategori }} </span>
                        </a>
                      </div>
                    </div>
                      <a href="/post/{{ $item->kategori }}/{{ $item->slug }}" class="hover:transform hover:scale-125 transition duration-300 text-sm font-bold text-black rounded-lg">Lihat</a>
                  </div>
                </div>
                <hr/>
                @endforeach
                
                <div class="pb-1 pt-3 text-right">
                    <a href="/dashboard/post" class="text-sm font-bold text-black rounded-lg ">Selengkapnya</a> 
                </div>
                 

            </div>
        </div>
        
       
        <div>
          <div class="drop-shadow-md h-full p-4 rounded-xl border border-gray-200 bg-white">
              <h5 class="text-2xl text-gray-800 font-bold mb-8">Kategori</h5>
              @foreach($postsByCategory as $post)
              <div class="flex items-center justify-between" data-aos="zoom-in" data-aos-duration="300">
                  <p class="text-base font-semibold text-gray-800 truncate">{{ $post->mainKategori }}</p>
                  <h4 class="text-base text-right font-bold mt-4">{{ $post->total }}</h4>
              </div>
              @endforeach
              <div class="my-4">
                  <hr/>
              </div>
              <div class="flex items-center justify-between" data-aos="zoom-in" data-aos-duration="1100">
                  <p class="text-lg font-bold text-gray-800 truncate">Total</p>
                  <h4 class="text-lg text-right font-bold">{{ $total }}</h4>
              </div> 
          </div>
      </div>      

        <div class="hidden sm:block">
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
                      @foreach($postsByCategory as $post)
                          { value: {{ $post->total }}, name: '{{ $post->mainKategori }}' },
                      @endforeach
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
        @php
            use Carbon\Carbon;
        @endphp
        <script>
            var dom = document.getElementById('line-chart');
            var myChart = echarts.init(dom, null, {
              renderer: 'canvas',
              useDirtyRect: false
            });
            var app = {};
          
            var option;
            var month = {!! json_encode(Carbon::now()->format('F')) !!};
            var year = {!! json_encode(Carbon::now()->format('Y')) !!};
          
            option = {
              title: {
                text: 'Post Count by Day',
                subtext: month + ' ' + year,
                left: 'center'
              },
              xAxis: {
                type: 'category',
                data: {!! json_encode($postsByDate->pluck('day')) !!}
              },
              yAxis: {
                type: 'value'
              },
              series: [
                {
                  data: {!! json_encode($postsByDate->pluck('total')) !!},
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