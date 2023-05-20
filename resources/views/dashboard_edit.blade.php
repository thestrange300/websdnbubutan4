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

        <div class="py-6">
          <label for="konten" class="form-label block text-sm font-medium text-gray-700 pb-2">Konten</label>
          <input id="konten" type="hidden" name="konten" value="{{ old('konten', $item->konten) }}">
          <trix-editor input="konten" class="shadow-md"></trix-editor>
        </div>

        <style>
          .trix-button-group.trix-button-group--file-tools 
          {display:none;}
          .trix-button--icon-increase-nesting-level,
          .trix-button--icon-decrease-nesting-level,
          .trix-button--icon-heading-1,
          .trix-button--icon-bullet-list { display:none; }
          .trix-button--icon-link { display:none; }
          .trix-button--icon-code { display:none; }
          .trix-button--icon-quote { display:none; }
          .trix-button--icon-number-list { display:none; }
        </style>

        <div>
          <label for="embed" class="form-label block text-sm font-medium text-gray-700 pb-2">Link Youtube</label>
          <input
            class="mb-3 mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-gradient-to-r from-sky-600 to-cyan-400  checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
            type="checkbox"
            role="switch"
            id="switch_button">
            <input type="text"
            id="switch_content" 
            class="hidden form-control drop-shadow-md mt-2 mb-4 px-2 py-2 
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            max-w-lg" id="switch_content" name="link" value="{{ old('link', $item->link) }}">  
        </div>

        {{-- SCRIPT SWITCH --}}

        <script>
          const switchBtn = document.getElementById("switch_button");
          const switchCtn = document.getElementById("switch_content");
          const oldValue = "{{ old('link', $item->link) }}";
        
          if (oldValue) {
            switchBtn.checked = true;
            switchCtn.classList.remove("hidden");
          }
        
          switchBtn.addEventListener("change", () => {
            if (switchBtn.checked) {
              switchCtn.classList.remove("hidden");
            } else {
              switchCtn.classList.add("hidden");
            }
          });
        </script>

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

        <div>
          <label for="image" class="form-label block text-sm font-medium text-gray-700 pb-2">Gambar Tambahan (Optional)</label>
          <div class="grid grid-cols-4 col-span-3 gap-x-4">
            @if ($item->image2)
            <img src="{{ asset('storage/' . $item->image2) }}" class="img-preview2 img-fluid max-h-48">
            @else
            <img class="img-preview2 img-fluid max-h-48">
            @endif
            @if ($item->image3)
            <img src="{{ asset('storage/' . $item->image3) }}" class="img-preview3 img-fluid max-h-48">
            @else
            <img class="img-preview3 img-fluid max-h-48">
            @endif
          </div>
          <div class="grid grid-cols-4 col-span-3 gap-x-4">
            <input type="file" id="image2" name="image2" class="block w-full text-sm text-slate-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  file:bg-violet-50 file:text-violet-700
                  hover:file:bg-violet-100" onchange="previewImage2()" />
            <input type="file" id="image3" name="image3" class="block w-full text-sm text-slate-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  file:bg-violet-50 file:text-violet-700
                  hover:file:bg-violet-100" onchange="previewImage3()" />
          </div>
        
          <div class="pt-2">
            <p class="my-1 text-xs text-gray-500 pb-4" id="image_help">PNG atau JPG (Max. 2MB).</p>
          </div>
          @error('image2')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          @error('image3')
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
          <button 
          type="button" 
          class=" drop-shadow-lg inline-flex items-center px-4 py-2 shadow-md border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
          data-te-toggle="modal"
          data-te-target="#editmodal"
          data-te-ripple-init
          data-te-ripple-color="light" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>                   
              Edit Post
            </button>
        </div>

    @endforeach
  </div>

  <div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="editmodal"
  tabindex="-1"
  aria-labelledby="editmodallabel"
  aria-hidden="true">
  <div data-te-modal-dialog-ref
  class=" relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">

  <div class="bg-white drop-shadow-lg rounded-lg md:max-w-md md:mx-auto p-4 fixed inset-x-0 bottom-0 z-50 mb-4 mx-4 md:relative">
    <div class="md:flex items-center">
      <div class="rounded-full p-3 border border-gray-300 flex items-center justify-center w-16 h-16 flex-shrink-0 mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-auto h-auto text-orange-300">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>                    
      </div>
      <div class="mt-4 md:mt-0 md:ml-6 text-center md:text-left">
        <p class="font-bold">Edit Post</p>
        <p class="text-sm text-gray-700 mt-1">Sebelum melakukan edit, pastikan kamu telah memeriksa kembali konten yang ingin diubah. Apakah kamu yakin ingin melanjutkan?
        </p>
      </div>
    </div>
    <div class="text-center md:text-right mt-4 md:flex md:justify-end">
      <button type="submit" class="block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-orange-200 text-orange-700 hover:bg-orange-300 hover:text-orange-700 rounded-lg font-semibold text-sm md:ml-2 md:order-2 transition duration-300 ease-in-out">Edit Postingan</button>
      <button 
      type="button" 
      class="block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-gray-200 rounded-lg font-semibold text-sm mt-4
        md:mt-0 md:order-1 hover:bg-gray-300 transition duration-300 ease-in-out" 
        data-te-modal-dismiss
        data-te-ripple-init
        data-te-ripple-color="light">Batal</button>
    </div>
  </div>
</form>
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

    function previewImage2(){
      const img2 = document.querySelector('#image2');
      const imgPreview2 = document.querySelector('.img-preview2');

      imgPreview2.style.display = 'block';

      const oFReader2 = new FileReader();
      oFReader2.readAsDataURL(image2.files[0]);

      oFReader2.onload = function(oFREvent2){
        imgPreview2.src = oFREvent2.target.result;
      }
    }

    function previewImage3(){
      const img3 = document.querySelector('#image3');
      const imgPreview3 = document.querySelector('.img-preview3');

      imgPreview3.style.display = 'block';

      const oFReader3 = new FileReader();
      oFReader3.readAsDataURL(image3.files[0]);

      oFReader3.onload = function(oFREvent3){
        imgPreview3.src = oFREvent3.target.result;
      }
    }
</script>


@endsection