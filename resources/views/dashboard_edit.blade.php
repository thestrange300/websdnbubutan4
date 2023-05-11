@extends ('partial.main_navbar')

@section('container')


<div class="px-4 sm:px-6 lg:px-8 mt-4">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-900 pt-8"> Edit Post</h1>
    </div>
  
  <div class="col-lg-8 pb-2">
    @foreach ($post as $item)
    <form method="post" action="{{ route('update.post', $item->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{ $item->id }}">
        @csrf
        @method('PUT')
        <div class="mb-1">
          <label for="judul" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Judul</label>
          <input type="text" class="form-control drop-shadow-md px-2 py-2 
          mt-1
          block
          w-full
          rounded-md
          border-gray-300
          shadow-sm
          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
          max-w-lg" id="judul" name="judul" value="{{ old('judul', $item->judul) }}">
        </div>

        <div>
          <label for="image" class="form-label block text-sm font-medium text-gray-700 pb-2">Image</label>
          @if ($item->image)
              <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-preview img-fluid max-h-48">
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
            <p class="my-1 text-xs text-gray-500 pb-6" id="image_help">PNG atau JPG (Max. 2MB).</p>
          </div>
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="py-6">
          <label for="konten" class="form-label block text-sm font-medium text-gray-700 pb-2">Konten</label>
          <input id="konten" type="hidden" name="konten" value="{{ old('konten', $item->konten) }}">
          <trix-editor input="konten" class="shadow-md"></trix-editor>
        </div>
        

        <div class="mb-1">
          <label for="title" class="form-label block text-sm text font-medium text-gray-700 pb-3">Kategori</label>
          <input type="hidden" name="kategori" id="kategori" value="">
          <div class="relative" data-te-dropdown-ref>
            <button
              class="dropdown-button inline-flex items-center text-center drop-shadow rounded-md bg-white w-64 px-20 pb-2 pt-2 text-sm font-medium text-gray-700 leading-normal shadow-[0_4px_9px_-4px_#fbfbfb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none"
              type="button"
              id="kategori"
              data-te-dropdown-toggle-ref
              aria-expanded="false"
              data-te-ripple-init>
              Pilih Kategori
              <span class="w-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  class="h-5 w-5">
                  <path
                    fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </span>
            </button>
            <ul class="dropdown-list absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block" data-te-dropdown-menu-ref>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Tari' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Tari">Tari</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Pencaksilat' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Pencaksilat">Pencaksilat</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Qiroah' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Qiroah">Qiroah</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Samproh' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Samproh">Samproh</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Pramuka' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Pramuka">Pramuka</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Ecoschool' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Ecoschool">Ecoschool</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Ecopreneur' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Ecopreneur">Ecopreneur</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Guru' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Guru">Guru</a>
              </li>
              <li>
                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 {{ old('kategori', $item->kategori) == 'Siswa' ? 'selected' : '' }}" href="#" data-te-dropdown-item-ref data-category="Siswa">Siswa</a>
              </li>
            </ul>            
          </div>            
        </div>
        
        <div class="pt-8">
          <button type="submit" class=" drop-shadow-lg inline-flex items-center px-4 py-2 shadow-md border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="return confirm('Apakah kamu yakin?')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>                   
              Edit Post
            </button>
        </div>
      </form>
    @endforeach
  </div>

  <script>
    // Get the button and dropdown list elements
    const button = document.querySelector('.dropdown-button');
    const dropdownList = document.querySelector('.dropdown-list');
  
    // Set the default selected category
    const defaultCategory = "{{ old('kategori', $item->kategori) }}";
    // Update the button text with the default selected category
    button.textContent = defaultCategory;
    // Update the hidden input value with the default selected category
    document.querySelector('#kategori').value = defaultCategory;

    // Add an event listener to the dropdown list
    dropdownList.addEventListener('click', (event) => {
      // Get the selected category
      const selectedCategory = event.target.textContent;
      // Update the button text with the selected category
      button.textContent = selectedCategory;
      // Update the hidden input value with the selected category
      document.querySelector('#kategori').value = selectedCategory;
    });

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


@endsection