@extends ('partial.main_navbar')

@section('container')

@if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ session('success') }}</span>
      <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652c-.78-.781-2.047-.781-2.828 0L10 7.172 8.48 5.652c-.78-.781-2.048-.781-2.828 0-.781.78-.781 2.047 0 2.828L7.172 10l-1.52 1.52c-.78.781-.78 2.048 0 2.828.78.78 2.048.78 2.828 0L10 12.828l1.52 1.52c.78.78 2.047.78 2.828 0 .78-.78.78-2.047 0-2.828L12.828 10l1.52-1.52c.78-.781.78-2.048 0-2.828z"/></svg>
      </span>
    </div>
@endif

@if (session()->has('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ session('error') }}</span>
      <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652c-.78-.781-2.047-.781-2.828 0L10 7.172 8.48 5.652c-.78-.781-2.048-.781-2.828 0-.781.78-.781 2.047 0 2.828L7.172 10l-1.52 1.52c-.78.781-.78 2.048 0 2.828.78.78 2.048.78 2.828 0L10 12.828l1.52 1.52c.78.78 2.047.78 2.828 0 .78-.78.78-2.047 0-2.828L12.828 10l1.52-1.52c.78-.781.78-2.048 0-2.828z"/></svg>
      </span>
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