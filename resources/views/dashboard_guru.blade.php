@extends ('partial.main_navbar')

@section('container')


<div class="px-4 sm:px-6 lg:px-8 mt-10">

      <div class="sm:flex sm:items-center mt-5">
        <div class="sm:flex-auto">
          <h1 class="text-xl font-bold text-gray-900">Daftar Guru</h1>
          <p class="mt-2 text-sm text-gray-700">Berisi tentang nama dan posisi guru-guru.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
          <button type="button" onclick="location.href='/dashboard/create'" class="inline-flex items-center p-3 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <!-- Heroicon name: outline/plus-sm -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
            </button>
        </div>
      </div>
      <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="drop-shadow-md inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                {{-- @foreach ($posts as $post) --}}
                  {{-- @endforeach --}}
                  <table class="table-auto w-full min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="py-3.5 lg:px-10 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nama</th>
                        <th scope="col" class="py-3.5 lg:px-10 text-left text-sm font-semibold text-gray-900">Posisi</th>
                      </tr>
                    </thead>
                    {{-- @foreach ($teachers as $teacher) --}}
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <tr>
                        <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 sm:pl-6">Tegar Alwinata</td>
                        <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-500">Guru IPS</td>
                      </tr>
                      <tr>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 sm:pl-6">Mirza Alwinata</td>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-500">Guru IPA</td>              
                      </tr>
                      <tr>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 sm:pl-6">Auliya Alwinata</td>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-500">Guru Kelas 2</td>                        
                      </tr>
                      <tr>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 sm:pl-6">Tegar Amir Faizi</td>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-500">Guru Kelas 5</td>                     
                      </tr>
                      <tr>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 sm:pl-6">Tegar Rakhman Hidayat</td>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-500">Tata Kelola</td> 
                      </tr>
                      {{-- @endforeach --}}
                    </tbody>
                  </table>
              
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection