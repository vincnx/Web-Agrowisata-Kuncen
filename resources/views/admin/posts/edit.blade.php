@extends('layouts.admin-dashboard')

@section('content')
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <form class="mx-auto max-w-full" enctype="multipart/form-data" method="POST"
        action="{{ route('admin.berita.update', $post->id) }}">
        @csrf
        @method('put')
        <!-- judul -->
        <div class="mb-5">
          <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Judul Berita</label>
          <div class="mt-2">
            <div
              class="flex w-full rounded-md p-1 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
              <input id="judul" type="text" name="judul" value="{{ old('judul', $post->judul) }}"
                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
              @error('judul')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>
        <!-- gambar -->
        <div class="mb-5">
          <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Gambar</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-8">
            <div class="text-center">
              <img id="img-preview" src="{{ Storage::url($post->gambar) }}" alt="" class="rounded-lg max-h-80">
              <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                <label for="gambar"
                  class="txt-preview relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="gambar" name="gambar" type="file" class="sr-only" onchange="display_image(event)">
                </label>
                <p class="txt-preview pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
        <!-- isi berita -->
        <div class="mb-5">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Isi Berita</label>
          <div class="mt-2 justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-8">
            <input id="isi" type="hidden" name="isi" value="{{ old('isi', $post->isi) }}">
            <trix-editor input="isi" class="trix-content"></trix-editor>
          </div>
        </div>
        <button type="submit"
          class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
          Berita
        </button>
      </form>
    </div>
  </div>
@endsection

@section('script')
  <script>
    function a(){
      const img = document.querySelector('#gambar')
      document.body.style.backgroudColor = "red"
    }
    function display_image() {
      const img = document.querySelector('#gambar')
      const img_preview = document.querySelector('#img-preview')
      const txt_preview = document.querySelector('.txt-preview')

      img_preview.style.display = 'block'
      txt_preview.style.display = 'inline'
      img_preview.src = URL.createObjectURL(img.files[0])
    }
  </script>
@endsection
