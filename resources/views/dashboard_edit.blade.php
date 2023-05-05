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

        {{-- <div class="mb-1">
          <label for="slug" class="form-label block text-sm font-medium text-gray-700 pt-4 pb-2">Slug</label>
          <input type="text" class="form-control drop-shadow-md px-2 py-2 
          mt-1
          block
          w-full
          rounded-md
          border-gray-300
          shadow-sm
          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
          max-w-lg pointer-events-none bg-neutral-100" id="slug" name="slug">
        </div> --}}

        <div class="py-6">
          <label for="konten" class="form-label block text-sm font-medium text-gray-700 pb-2">Konten</label>
          <input id="konten" type="hidden" name="konten" value="{{ old('konten', $item->konten) }}">
          <trix-editor input="konten" class="shadow-md"></trix-editor>
        </div>

        <div class="relative">
          <label for="kategori" class="form-label block text-sm font-medium text-gray-700 pb-2">Kategori</label>
          <select id="kategori" name="kategori" class="form-control block w-5/12 bg-white border border-gray-200 text-gray-700 shadow-md py-3 px-4 pr-8 rounded-md focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option value="Ecopreneur" {{ old('kategori', $item->kategori) == 'Ecoproneur' ? 'selected' : '' }}>Ecopreneur</option>
            <option value="Ecoschool" {{ old('kategori', $item->kategori) == 'Ecoschool' ? 'selected' : '' }}>Ecoschool</option>
            <option value="Tari" {{ old('kategori', $item->kategori) == 'Tari' ? 'selected' : '' }}>Tari</option>
            <option value="Karya dan Prestasi" {{ old('kategori', $item->kategori) == 'Karya dan Prestasi' ? 'selected' : '' }}>Karya dan Prestasi</option>
          </select>
        </div>
        
        <div class="pt-8">
          <button type="submit" class=" drop-shadow-lg inline-flex items-center px-4 py-2 shadow-md border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="return confirm('Apakah kamu yakin?')">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>          
              Edit Post
            </button>
        </div>
      </form>
    @endforeach
  </div>

@endsection