@extends ('partial.main_navbar')

@section('container')


<div class="px-4 sm:px-6 lg:px-8 mt-4">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-bold text-gray-900 pt-8">Pengaturan Akun</h1>
    </div>
  
  <div class="col-lg-8 pb-2">
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
            max-w-lg" name="title" disabled value="admin">
          </div>

          <div class="mb-1">
            <label for="title" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Password</label>
            <input type="text" id="change1" class="form-control drop-shadow-md px-2 py-2 
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 text-gray-500  focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            max-w-lg" name="title" disabled value="********">
          </div>

            <button 
            type="button"
            id="button"  
            class="text-sm text-right font-bold text-black transition-all duration-200 rounded-lg mt-2">Ubah
            </button> 

            <div id="savebut" class="mt-4 pt-4" hidden>
                <a href="/123213" class="sticky duration-500 transform hover:-translate-y-3 text-sm text-white items-center justify-center px-4 py-3 font-bold rounded-md shadow-sm bg-gradient-to-r from-cyan-500 to-blue-500"> Simpan </a>
            </div>
                 
  </div>

<script>
const button= document.getElementById("button");
const change = document.getElementById("change");
const change1 = document.getElementById("change1");
const graycss = document.getElementById(".text-gray-500");
const savebut = document.getElementById("savebut");
console.log("tes")

button.addEventListener("click", function() {
    change.toggleAttribute("disabled");
    change1.toggleAttribute("disabled");
    // graycss.classList.remove('text-gray-500');
    // graycss.classList.add('text-black');
    button.toggleAttribute("hidden");
    savebut.toggleAttribute("hidden");
    console.log("success")
});
</script>  

@endsection