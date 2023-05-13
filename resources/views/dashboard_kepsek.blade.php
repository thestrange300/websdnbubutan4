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
          <h1 class="text-xl font-bold text-gray-900">Kepala Sekolah</h1>
          <p class="mt-2 text-sm text-gray-700">Berisi tentang informasi kepala sekolah.</p>
        </div>
      </div>

      <div class="mt-8">
        <label for="judul" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Nama Kepala Sekolah</label>
        <input type="text" class="form-control drop-shadow-md px-2 py-2 
        mt-1
        block
        w-full
        rounded-md
        border-gray-300
        shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
        max-w-lg" id="judul" name="judul" onkeyup="">
      </div>

      <div class="my-4 mb-4">
        <label for="judul" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">NIP</label>
        <input type="text" class="form-control drop-shadow-md px-2 py-2 
        mt-1
        block
        w-full
        rounded-md
        border-gray-300
        shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
        max-w-lg" id="judul" name="judul" onkeyup="">
      </div>

      <div class="py-4">
        <label for="image" class="form-label block text-sm font-medium text-gray-700 pb-2">Gambar Kepala Sekolah</label>
        <img class="img-preview img-fluid max-h-48">
        <input type="file" id="image" name="image" class="block w-full text-sm text-slate-500
        file:mr-4 file:py-2 file:px-4
        file:rounded-full file:border-0
        file:text-sm file:font-semibold
        file:bg-violet-50 file:text-violet-700
        hover:file:bg-violet-100" onchange="previewImage()"/>
        <div class="pt-2">
          <p class="my-1 text-xs text-gray-500" id="image_help">PNG atau JPG (Max. 2MB dan <b>Transparan</b> ).</p>
        </div>
        @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>

      <div class="" id="savebut">
        <button type="submit" class="hover:transform hover:scale-110 transition duration-300 drop-shadow-lg inline-flex items-center px-3 py-2 shadow-md border border-transparent text-base font-bold rounded-md text-white bg-gradient-to-r from-cyan-500 to-blue-500" >        
            Simpan
          </button>
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