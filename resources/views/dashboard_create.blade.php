@extends ('partial.main_navbar')

@section('container')


<div class="px-4 sm:px-6 lg:px-8 mt-4">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-900 pt-8"> Buat Post</h1>
    </div>
  
  <div class="col-lg-8 pb-2">
      <form method="post" action="{{ route('tambah.post') }}" enctype="multipart/form-data">
          @csrf
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
            max-w-lg" id="judul" name="judul" onkeyup="createTextSlug()">
          </div>

          <div class="mb-1">
            <label for="slug" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Slug</label>
            <input type="text" class="form-control drop-shadow-md px-2 py-2 
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            max-w-lg pointer-events-auto bg-neutral-100" id="slug" name="slug">
          </div>

          <div class="py-6">
            <label for="konten" class="form-label block text-sm font-medium text-gray-700 pb-2">Konten</label>
            <input id="konten" type="hidden" name="konten">
            <trix-editor input="konten" class="shadow-md" data-trix-toolbar="bold italic link file-tools"></trix-editor>
            
          </div>

          <div>
            <label for="image" class="form-label block text-sm font-medium text-gray-700 pb-2">Image</label>
            <img class="img-preview img-fluid max-h-48">
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
              <ul
                class="dropdown-list absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                data-te-dropdown-menu-ref>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Tari"
                    >Tari</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Pencaksilat"
                    >Pencaksilat</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Qiroah"
                    >Qiroah</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Samproh"
                    >Samproh</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Pramuka"
                    >Pramuka</a
                  >
                </li>

                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Ecoschool"
                    >Ecoschool</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Ecopreneur"
                    >Ecopreneur</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Guru"
                    >Guru</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-gray-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="#"
                    data-te-dropdown-item-ref
                    data-category="Siswa"
                    >Siswa</a
                  >
                </li>
              </ul>
            </div>            
          </div>
          
          <div class="pt-8">
            <button type="submit" class="hover:transform hover:scale-110 transition duration-300 drop-shadow-lg inline-flex items-center px-4 py-2 shadow-md border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
            onclick="return confirm('Apakah kamu yakin?')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>          
                Buat Post
              </button>
          </div>
        </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // Get the button and dropdown list elements
    const button = document.querySelector('.dropdown-button');
    const dropdownList = document.querySelector('.dropdown-list');
  
    // Add an event listener to the dropdown list
    dropdownList.addEventListener('click', (event) => {
      // Get the selected category
      const selectedCategory = event.target.textContent;
      // Update the button text with the selected category
      button.textContent = selectedCategory;
      // Update the hidden input value with the selected category
      document.querySelector('#kategori').value = selectedCategory;
    });

    function createTextSlug() {
    var title = document.getElementById("judul").value;
    var slug = generateSlug(title);
    document.getElementById("slug").value = slug;
    }

    function generateSlug(text) {
      return text.toString().toLowerCase()
        .replace(/^-+/, '')
        .replace(/-+$/, '')
        .replace(/\s+/g, '-')
        .replace(/\-\-+/g, '-')
        .replace(/[^\w\-]+/g, '');
    }

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