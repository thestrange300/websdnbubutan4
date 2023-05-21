@extends ('partial.main_navbar')

@section('container')

<script>
  setTimeout(() => {
  const toastPost = document.getElementById('toast-post');
  toastPost.classList.add('transition', 'duration-500', 'ease-in-out', 'opacity-0', 'h-0', 'hidden');
}, 4000);

function previewImage(){
      const img = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
</script>

<div class="px-4 sm:px-6 lg:px-8 mt-10">

  @if ($message = Session::get('success'))
  <div class="absolute top-16 right-8 bg-white border rounded-md shadow-lg" role="alert" id="toast-post">
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

      <form method="post" action="{{ route('update.kepsek', $kepsek->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{ $kepsek->id }}">
        @csrf
        @method('put')
        <div class="mt-8">
          <label for="nama" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Nama Kepala Sekolah</label>
          <input type="text" class="form-control drop-shadow-md px-2 py-2 
          mt-1
          block
          w-full
          rounded-md
          border-gray-300
          shadow-sm
          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
          max-w-lg" id="nama" name="nama" value="{{ old('nama', $kepsek->nama) }}">
        </div>
  
        <div class="my-4 mb-4">
          <label for="nip" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">NIP</label>
          <input type="text" class="form-control drop-shadow-md px-2 py-2 
          mt-1
          block
          w-full
          rounded-md
          border-gray-300
          shadow-sm
          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
          max-w-lg" id="nip" name="nip" value="{{ old('nip', $kepsek->nip) }}">
        </div>
  
        <div class="py-4">
          <label for="image" class="form-label block text-sm font-medium text-gray-700 pb-2">Gambar Kepala Sekolah</label>
          @if ($kepsek->image)
              <img src="{{ asset('storage/' . $kepsek->image) }}" alt="" class="img-preview img-fluid max-h-48">
          @else
            <img class="img-preview img-fluid max-h-48">
          @endif
          <input type="file" id="image" name="image" class="block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-violet-50 file:text-violet-700
          hover:file:bg-violet-100" onchange="previewImage()"/>
          <div class="pt-2">
            <p class="my-1 text-xs text-gray-500" id="image_help">PNG (Max. 2MB, Rasio <b>1:1</b>, dan <b>Transparan</b> ).</p>
          </div>
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
  
        <div class="" id="savebut">
          <button type="button" 
          data-te-toggle="modal"
          data-te-target="#kepsekmodal"
          data-te-ripple-init
          data-te-ripple-color="light" 
          class="hover:transform hover:scale-110 transition duration-300 drop-shadow-lg inline-flex items-center px-3 py-2 shadow-md border border-transparent text-base font-bold rounded-md text-white bg-gradient-to-r from-cyan-500 to-blue-500" >        
              Simpan
            </button>
        </div>
  </div>    
</div>

<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="kepsekmodal"
  tabindex="-1"
  aria-labelledby="createmodellabel"
  aria-hidden="true">
  <div data-te-modal-dialog-ref
  class=" relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">

  <div class="bg-white drop-shadow-lg rounded-lg md:max-w-md md:mx-auto p-4 fixed inset-x-0 bottom-0 z-50 mb-4 mx-4 md:relative">
    <div class="md:flex items-center">
      <div class="rounded-full p-3 border border-gray-300 flex items-center justify-center w-16 h-16 flex-shrink-0 mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-auto h-auto text-emerald-500">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
        </svg>                    
      </div>
      <div class="mt-4 md:mt-0 md:ml-6 text-center md:text-left">
        <p class="font-bold">Edit Kepala Sekolah</p>
        <p class="text-sm text-gray-700 mt-1">Sebelum mengupdate, pastikan kamu telah memeriksa kembali data yang akan kamu update. Apakah kamu yakin ingin melanjutkan?
        </p>
      </div>
    </div>
    <div class="text-center md:text-right mt-4 md:flex md:justify-end">
      <button type="submit" class="block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-green-200 text-green-700 hover:bg-green-300 hover:text-green-700 transition duration-300 ease-in-out rounded-lg font-semibold text-sm md:ml-2 md:order-2">Update</button>
      <button 
      type="button" 
      class="block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-gray-200 rounded-lg font-semibold text-sm mt-4
        md:mt-0 md:order-1 hover:bg-gray-300 transition duration-300 ease-in-out"
        data-te-modal-dismiss
        data-te-ripple-init
        data-te-ripple-color="light">Batal</button>
    </div>
  </div>
</div>
</form>

@endsection