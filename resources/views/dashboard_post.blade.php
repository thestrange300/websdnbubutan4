@extends ('partial.main_navbar')

@section('container')

<script>
  setTimeout(() => {
  const toastPost = document.getElementById('toast-post');
  toastPost.classList.add('transition', 'duration-500', 'ease-in-out', 'opacity-0', 'h-0', 'hidden');
}, 4000);
</script>

<div class="px-4 sm:px-6 lg:px-8 mt-2">

@if ($message = Session::get('success'))
  <div class="absolute right-8 max-w-xs bg-white border rounded-md shadow-lg" role="alert" id="toast-post">
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



      <div class="sm:flex-auto">
        <h1 class="text-xl text-center font-bold text-gray-900 py-4">Postingan Terpilih</h1>
      </div>

      <dl class=" grid grid-cols-1 gap-5 sm:grid-cols-2">
        @if($chosenPost->count() > 0 || $chosenPost2->count() > 0)
          @if($chosenPost->count() > 0)
            @foreach ($chosenPost as $selected)
              <div class="px-4 py-5 bg-white shadow-lg rounded-lg overflow-hidden sm:p-6">
                <dt class="text-xl font-medium text-black truncate">{{ $selected->judul }}</dt>
                <dd class="mt-1 text-sm text-gray-500 line-clamp-3 text-justify">{!! html_entity_decode($selected->konten) !!}</dd>
                <div class="text-right">
                  <button type="button" class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2" data-te-toggle="modal" data-te-target="#postingan1" data-te-ripple-init>Ubah
                  </button> 
                </div>
              </div>
            @endforeach
          @else
            <div class="px-4 py-5 bg-white shadow-lg rounded-lg overflow-hidden sm:p-6">
              <dt class="text-xl font-medium text-black truncate">Post 1</dt>
              <dd class="mt-1 text-sm text-gray-500 text-justify line-clamp-3">Tidak Ada Post Terpilih</dd>
              <div class="text-right">
                <button type="button" class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2" data-te-toggle="modal" data-te-target="#postingan1" data-te-ripple-init>Ubah
                </button> 
              </div>
            </div>
          @endif
          @if($chosenPost2->count() > 0)
            @foreach ($chosenPost2 as $selected)
              <div class="px-4 py-5 bg-white shadow-lg rounded-lg overflow-hidden sm:p-6">
                <dt class="text-xl font-medium text-black truncate">{{ $selected->judul }}</dt>
                <dd class="mt-1 text-sm text-gray-500 text-justify line-clamp-3">{!! html_entity_decode($selected->konten) !!}</dd>
                <div class="text-right">
                  <button type="button" class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2" data-te-toggle="modal" data-te-target="#postingan2" data-te-ripple-init>Ubah
                  </button> 
                </div>
              </div>
            @endforeach
          @else
            <div class="px-4 py-5 bg-white shadow-lg rounded-lg overflow-hidden sm:p-6">
              <dt class="text-xl font-medium text-black truncate">Post 2</dt>
              <dd class="mt-1 text-sm text-gray-500 text-justify line-clamp-3">Tidak Ada Post Terpilih</dd>
              <div class="text-right">
                <button type="button" class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2" data-te-toggle="modal" data-te-target="#postingan2" data-te-ripple-init>Ubah
                </button> 
              </div>        
            </div>
          @endif
        @else
          <div class="px-4 py-5 bg-white shadow-lg rounded-lg overflow-hidden sm:p-6">
            <dt class="text-xl font-medium text-black truncate">Post 1</dt>
            <dd class="mt-1 text-sm text-gray-500 text-justify line-clamp-3">Tidak Ada Post Terpilih</dd>
            <div class="text-right">
              <button type="button" class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2" data-te-toggle="modal" data-te-target="#postingan1" data-te-ripple-init>Ubah
              </button> 
            </div>
          </div>
          <div class="px-4 py-5 bg-white shadow-lg rounded-lg overflow-hidden sm:p-6">
            <dt class="text-xl font-medium text-black truncate">Post 2</dt>
            <dd class="mt-1 text-sm text-gray-500 text-justify line-clamp-3">Tidak Ada Post Terpilih</dd>
            <div class="text-right">
              <button type="button" class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2" data-te-toggle="modal" data-te-target="#postingan2" data-te-ripple-init>Ubah
              </button> 
            </div>        
          </div>
        @endif
      </dl> 

      <div class="sm:flex sm:items-center mt-5">
        <div class="sm:flex-auto">
          <h1 class=" text-center sm:text-left text-xl font-bold text-gray-900">Post</h1>
          <p class=" text-center sm:text-left mt-2 text-sm text-gray-700">Berisi tentang postingan-postingan yang ada di website.</p>
        </div>
        <div class="relative flex justify-center sm:flex-none mt-4 sm:mt-0 sm:ml-16 ">
          <button type="button" onclick="location.href='/dashboard/post/create'" class="hover:transform hover:scale-125 transition duration-300 relative inline-flex items-center p-3 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
            </button>

            {{-- <span class="relative flex h-3 w-3">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
            </span> --}}
        </div>
      </div>
      <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="drop-shadow-md inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
              <table class="table-auto min-w-full divide-y divide-gray-300">
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
                    <td class="whitespace-nowrap text-sm text-gray-500 max-w-md truncate overflow-auto">{!! html_entity_decode($item->konten) !!}</td>
                    <td class="whitespace-nowrap py-4 px-8 text-sm text-gray-500">
                        {{-- action = "{{ route('delete',$post) }}" --}}
                      <form method="post" action="{{ route('delete.post', ['id' => $item->id]) }}" enctype="multipart/form-data">
                        <button type="button" onclick="location.href='{{ route('edit.post', $item->id) }}'"  class="inline-flex items-center px-2 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                          <!-- Heroicon name: solid/mail -->
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>                      
                        </button>
                        <button type="submit" onclick="return confirm('Apakah kamu yakin untuk menghapus post?')" class="inline-flex items-center px-2 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >
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

    {{-- MODAL POST 1 --}}
    <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="postingan1" tabindex="-1" aria-labelledby="exampleModalCenterTitle1" aria-modal="true" role="dialog">
      <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
          <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 ">
            <!--Modal title-->
            <h5 class="text-xl font-bold leading-normal text-neutral-800 " id="exampleModalScrollableLabel1">Pilih Postingan 1</h5>
            <!--Close button-->
            <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
    
          <!--Modal body-->
          <div class="relative p-4">
            <div class="mb-1">
              <label for="title" class="form-label block text-sm text font-medium text-gray-700 pb-3">Kategori</label>
              <div class="relative mx-auto" data-te-dropdown-ref>
                <select onchange="getPosts()" id="chosenId" name="chosenId" class="inline-flex items-center text-center drop-shadow rounded-md bg-white w-64 pb-2 pt-2 text-sm font-medium text-gray-700 leading-normal shadow-[0_4px_9px_-4px_#fbfbfb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none">
                  <option class="" value="" selected disabled>Pilih Kategori</option>
                  <option value="Tari">Tari</option>
                  <option value="Pencaksilat">Pencaksilat</option>
                  <option value="Qiroah">Qiroah</option>
                  <option value="Samproh">Samproh</option>
                  <option value="Pramuka">Pramuka</option>
                  <option value="Ecoschool">Ecoschool</option>
                  <option value="Ecopreneur">Ecopreneur</option>
                  <option value="Guru">Guru</option>
                  <option value="Siswa">Siswa</option>
              </select>            
              </div>            
            </div>
            <div class="mb-1">
              <label for="title" class="form-label block text-sm text font-medium text-gray-700 pt-4 pb-3">Postingan</label>
              <div class="relative mx-auto" data-te-dropdown-ref>
                <select id="post" name="post" class="inline-flex items-center text-center drop-shadow rounded-md bg-white w-64 pb-2 pt-2 text-sm font-medium text-gray-700 leading-normal shadow-[0_4px_9px_-4px_#fbfbfb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none" aria-expanded="false" data-te-ripple-init>
                  <option value="">Select a post</option>
                </select>
              </div>            
            </div>                        
          </div>
    
          <!--Modal footer-->
          <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
              Close
            </button>
            <button type="button" id="saveBtn" class="ml-1 inline-block rounded bg-indigo-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>

    {{--MODAL POST 2 --}}

    <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="postingan2" tabindex="-1" aria-labelledby="exampleModalCenterTitle2" aria-modal="true" role="dialog">
      <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
          <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 ">
            <!--Modal title-->
            <h5 class="text-xl font-bold leading-normal text-neutral-800 " id="exampleModalScrollableLabel">Pilih Postingan 2</h5>
            <!--Close button-->
            <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
    
          <!--Modal body-->
          <div class="relative p-4">
            <div class="mb-1">
              <label for="title" class="form-label block text-sm text font-medium text-gray-700 pb-3">Kategori</label>
              <div class="relative mx-auto" data-te-dropdown-ref>
                <select onchange="getPosts2()" id="chosenId2" name="chosenId2" class="inline-flex text-center drop-shadow rounded-md bg-white w-64 pb-2 pt-2 text-sm font-medium text-gray-700 leading-normal shadow-[0_4px_9px_-4px_#fbfbfb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none">
                  <option value="" selected disabled>Pilih Kategori</option>
                  <option value="Tari">Tari</option>
                  <option value="Pencaksilat">Pencaksilat</option>
                  <option value="Qiroah">Qiroah</option>
                  <option value="Samproh">Samproh</option>
                  <option value="Pramuka">Pramuka</option>
                  <option value="Ecoschool">Ecoschool</option>
                  <option value="Ecopreneur">Ecopreneur</option>
                  <option value="Guru">Guru</option>
                  <option value="Siswa">Siswa</option>
              </select>            
              </div>            
            </div>
            <div class="mb-1">
              <label for="title" class="form-label block text-sm text font-medium text-gray-700 pt-4 pb-3">Postingan</label>
              <div class="relative mx-auto" data-te-dropdown-ref>
                <select id="post2" name="post2" class="inline-flex text-center drop-shadow rounded-md bg-white w-64 pb-2 pt-2 text-sm font-medium text-gray-700 leading-normal shadow-[0_4px_9px_-4px_#fbfbfb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none" aria-expanded="false" data-te-ripple-init>
                  <option value="">Pilih Postingan</option>
                </select>
              </div>            
            </div>                        
          </div>
    
          <!--Modal footer-->
          <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
              Close
            </button>
            <button type="button" id="saveBtn2" class="ml-1 inline-block rounded bg-indigo-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>     

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      getPosts();
      getPosts2();
        $("#saveBtn").click(function() {
            var postId = $("#post").val();
            console.log(postId);
            $.ajax({
                url: "/dashboard/post/updateSpecial",
                type: "POST",
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": postId
                },
                success: function (data) {
                    window.location.href = "{{ route('index.post') }}";
                },
                error: function (data) {
                    // Display an error message or redirect to an error page
                }
            });
        });

        $("#saveBtn2").click(function() {
            var postId2 = $("#post2").val();
            console.log(postId2);
            $.ajax({
                url: "/dashboard/post/updateSpecial2",
                type: "POST",
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": postId2
                },
                success: function (data) {
                    window.location.href = "{{ route('index.post') }}";
                },
                error: function (data) {
                    // Display an error message or redirect to an error page
                }
            });
        });
    });

    function getPosts() {
        var chosenId = $("#chosenId").val();
        $.ajax({
            url: "/dashboard/posts/" + chosenId,
            type: "GET",
            dataType: "json",
            success: function (data) {
                var posts = $("#post");
                posts.empty();
                posts.append('<option value="" selected disabled>Pilih Postingan</option>');
                $.each(data, function (index, post) {
                    if (post.isChosen) {
                        posts.append('<option value="' + post.id + '" selected>' + post.judul + '</option>');
                    } else {
                        posts.append('<option value="' + post.id + '">' + post.judul + '</option>');
                    }
                });
            }
        });
    }
    function getPosts2() {
        var chosenId2 = $("#chosenId2").val();
        $.ajax({
            url: "/dashboard/posts2/" + chosenId2,
            type: "GET",
            dataType: "json",
            success: function (data) {
                var posts = $("#post2");
                posts.empty();
                posts.append('<option value="" selected disabled>Pilih Postingan</option>');
                $.each(data, function (index, post) {
                    if (post.isChosen2) {
                        posts.append('<option value="' + post.id + '" selected>' + post.judul + '</option>');
                    } else {
                        posts.append('<option value="' + post.id + '">' + post.judul + '</option>');
                    }
                });
            }
        });
    }
  </script>



@endsection