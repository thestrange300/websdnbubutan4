@extends ('partial.main_navbar')

@section('container')


<div class="px-4 sm:px-6 lg:px-8 mt-10">

      <div class="sm:flex sm:items-center mt-5">
        <div class="sm:flex-auto">
          <h1 class="text-xl font-bold text-gray-900">Post</h1>
          <p class="mt-2 text-sm text-gray-700">Berisi tentang postingan-postingan yang ada di website.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
          <button type="button" onclick="location.href='/dashboard/post/create'" class="inline-flex items-center p-3 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
              <table class="table-fixed min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="py-3.5 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
                    <th scope="col" class="py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                    <th scope="col" class="py-3.5 text-left text-sm font-semibold text-gray-900">Content</th>
                    <th scope="col" class="py-4 px-8 text-left text-sm font-semibold text-gray-900">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                  @foreach ($post as $item)
                  <tr>
                    <td class="whitespace-nowrap py-4 text-sm font-medium text-gray-900 sm:pl-6">{{ $item->id }}</td>
                    <td class="whitespace-nowrap py-4 text-sm text-gray-500">{{ $item->judul }}</td>
                    <td class="whitespace-nowrap text-sm text-gray-500 max-w-md truncate overflow-auto">{{ $item->konten }}</td>
                    <td class="whitespace-nowrap py-4 px-8 text-sm text-gray-500">
                        {{-- action = "{{ route('delete',$post) }}" --}}
                      <form method="post" action="" enctype="multipart/form-data">
                        <button type="submit" onclick="return confirm('Are you sure?')"" class="inline-flex items-center px-2 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>                 
                        </button>                      
                        @method('DELETE')
                        @csrf
                    </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection