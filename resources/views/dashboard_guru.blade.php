@extends ('partial.main_navbar')

@section('container')

<script>
  setTimeout(() => {
  const toastPost = document.getElementById('toast-post');
  toastPost.classList.add('transition', 'duration-500', 'ease-in-out', 'opacity-0', 'h-0', 'hidden');
}, 4000);
</script>

<div class="px-4 sm:px-6 lg:px-8 mt-10">

  @if ($message = Session::get('success'))
  <div class="absolute top-16 right-8 max-w-xs bg-white border rounded-md shadow-lg" role="alert" id="toast-post">
    <div class="flex p-4">
      <div class="flex-shrink-0">
        <svg class="h-4 w-4 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>
      </div>
      <div class="ml-3">
        <p class="text-sm text-gray-700">
          {{ $message }}
        </p>
      </div>
    </div>
  </div>
@endif

      <div class="sm:flex sm:items-center mt-5">
        <div class="sm:flex-auto">
          <h1 class="text-center sm:text-left text-xl font-bold text-gray-900">Daftar Guru</h1>
          <p class="text-center sm:text-left mt-2 text-sm text-gray-700">Berisi tentang nama dan posisi guru-guru.</p>
        </div>
        <div class="relative flex justify-center sm:flex-none mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
          <button 
            type="button"  
            class="hover:transform hover:scale-125 transition duration-300 inline-flex items-center p-3 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            data-te-toggle="modal"
            data-te-target="#exampleModalCenter"
            data-te-ripple-init>
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
                        <th scope="col" class=" py-3.5 lg:px-10 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nama</th>
                        <th scope="col" class="py-3.5 lg:px-10 text-left text-sm font-semibold text-gray-900">Posisi</th>
                        <th scope="col" class="py-3.5 lg:px-10 text-left text-sm font-semibold text-gray-900">Action</th>
                      </tr>
                    </thead>
                    {{-- @foreach ($teachers as $teacher) --}}
                    <tbody class="divide-y divide-gray-200 bg-white">
                      @foreach ($guru as $item)
                        <tr>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm font-medium text-gray-900 sm:pl-6">{{ $item->nama }}</td>
                          <td class="whitespace-nowrap py-4 lg:px-10 text-sm text-gray-500">{{ $item->posisi }}</td>
                          <td class="whitespace-nowrap pt-4 lg:px-10 text-sm text-gray-500">
                            <form method="post" action="{{ route('hapus.guru', $item->id) }}" enctype="multipart/form-data">
                              @method('DELETE')
                              @csrf
                              <button type="submit" onclick="return confirm('Are you sure?')" class="flex justify-center items-center px-2 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>                 
                              </button>                     
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

<!--Verically centered modal-->
<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModalCenter"
  tabindex="-1"
  aria-labelledby="exampleModalCenterTitle"
  aria-modal="true"
  role="dialog">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div
      class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 ">
        <!--Modal title-->
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 "
          id="exampleModalScrollableLabel">
          Tambah Guru
        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative p-4">
        <form action="{{ route('tambah.guru') }}" method="post">
          @csrf
          <div class="mb-1">
            <label for="nama" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Nama Guru</label>
            <input type="text" class="form-control drop-shadow-md px-2 py-2 
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            max-w-lg" id="nama" name="nama">
          </div>
          <div class="mb-1">
            <label for="posisi" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Posisi</label>
            <input type="text" class="form-control drop-shadow-md px-2 py-2 
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            max-w-lg" id="posisi" name="posisi">
          </div>                
      </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          Close
        </button>
        <button
          type="submit"
          class="ml-1 inline-block rounded bg-indigo-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
          data-te-ripple-init
          data-te-ripple-color="light">
          Save changes
        </button>
      </div>
    </form>
    </div>
  </div>
</div>    

@endsection