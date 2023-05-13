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
      </form>
  </div>    
</div>

@endsection