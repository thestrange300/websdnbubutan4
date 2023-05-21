@extends ('partial.main_navbar')

@section('container')

{{-- <script>
  setTimeout(() => {
  const toastPost = document.getElementById('toast-post');
  toastPost.classList.add('transition', 'duration-500', 'ease-in-out', 'opacity-0', 'h-0', 'hidden');
}, 4000);
</script> --}}

@if (session()->has('success'))
    <div class="absolute right-8 top-16 max-w-xs bg-white border rounded-md shadow-lg" role="alert" id="toast-post">
      <div class="flex p-4">
        <div class="flex-shrink-0">
          <svg class="h-4 w-4 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg>
        </div>
        <div class="ml-3">
          <p class="text-sm text-gray-700">
            {{ session('success') }}
          </p>
        </div>
      </div>
    </div>
@endif

@if (session()->has('error'))
    <div class="absolute right-8 top-16 max-w-xs bg-white border rounded-md shadow-lg" role="alert" id="toast-post">
      <div class="flex p-4">
        <div class="flex-shrink-0">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-red-400 mt-0.5">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
          </svg>          
        </div>
        <div class="ml-3">
          <p class="text-sm text-gray-700">
            {{ session('error') }}
          </p>
        </div>
      </div>
    </div>
@endif


<div class="px-4 sm:px-6 lg:px-8 mt-4">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-bold text-gray-900 pt-8">Pengaturan Akun</h1>
    </div>
  
  <div class="col-lg-8 pb-2">
          <form action="{{ route('update.setting') }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ auth()->id() }}">
            <div class="mb-1">
              <label for="title" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Username</label>
              <input type="text" id="change" class="form-control drop-shadow-md px-2 py-2 
              mt-1
              block
              w-full
              rounded-md
              border-gray-300
              shadow-sm
              focus:border-indigo-300 text-gray-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
              max-w-lg" name="username" disabled value="{{ old('username') ?? auth()->user()->username }}">
            </div>
  
            <div class="mb-1">
              <label for="title" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Password Lama</label>
              <input type="password" id="change1" class="form-control drop-shadow-md px-2 py-2 
              mt-1
              block
              w-full
              rounded-md
              border-gray-300
              shadow-sm
              focus:border-indigo-300 text-gray-500  focus:ring focus:ring-indigo-200 focus:ring-opacity-50
              max-w-lg" name="password" disabled value="">
            </div>
            
            <div class="mb-1">
              <label for="title" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Password Baru</label>
              <input type="password" id="change2" class="form-control drop-shadow-md px-2 py-2 
              mt-1
              block
              w-full
              rounded-md
              border-gray-300
              shadow-sm
              focus:border-indigo-300 text-gray-500  focus:ring focus:ring-indigo-200 focus:ring-opacity-50
              max-w-lg" name="new_password" disabled value="">
            </div>
  
              <button 
              type="button"
              id="button"  
              class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2">Ubah
              </button> 
  
              <div class="pt-4" id="savebut" hidden>
                <button type="submit" class="hover:transform hover:scale-110 transition duration-300 drop-shadow-lg inline-flex items-center px-3 py-2 shadow-md border border-transparent text-base font-bold rounded-md text-white bg-gradient-to-r from-cyan-500 to-blue-500" >        
                    Simpan
                  </button>
              </div>
          </form>
    </div>
  </div>

<script>
const button= document.getElementById("button");
const change = document.getElementById("change");
const change1 = document.getElementById("change1");
const change2 = document.getElementById("change2");
const graycss = document.getElementById(".text-gray-500");
const savebut = document.getElementById("savebut");
console.log("tes")

button.addEventListener("click", function() {
    change1.toggleAttribute("disabled");
    change2.toggleAttribute("disabled");
    // graycss.classList.remove('text-gray-500');
    // graycss.classList.add('text-black');
    button.toggleAttribute("hidden");
    savebut.toggleAttribute("hidden");
    console.log("success")
});
</script>  

@endsection