@extends ('partial.main_navbar')

@section('container')


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
              <label for="title" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Password</label>
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
    // graycss.classList.remove('text-gray-500');
    // graycss.classList.add('text-black');
    button.toggleAttribute("hidden");
    savebut.toggleAttribute("hidden");
    console.log("success")
});
</script>  

@endsection