@extends('layouts.admin-dashboard')

@section('content')
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <form class="mx-auto max-w-full" enctype="multipart/form-data" method="POST"
        action="{{ route('admin.berita.store') }}">
        @csrf
        <!-- judul -->
        <div class="mb-5">
          <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Judul Berita</label>
          <div class="mt-2">
            <div
              class="flex w-full rounded-md p-1 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
              <input id="judul" type="text" name="judul" value="{{ old('judul') }}"
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
              <img id="img-preview" alt="" class="rounded-lg">
              <svg id="preview-hidden" class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                  clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                <label for="gambar"
                  class="txt-preview relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="gambar" name="gambar" type="file" class="sr-only" onchange="display_image()">
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
            <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}">
            <trix-editor input="isi" class="trix-content"></trix-editor>
          </div>
        </div>
        <button type="submit"
          class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan
          Berita
        </button>
      </form>
    </div>
  </div>
@endsection

@section('script')
  <script>
    function display_image() {
      const img = document.querySelector('#gambar')
      const img_preview = document.querySelector('#img-preview')
      const txt_preview = document.querySelector('.txt-preview')
      const preview_hidden = document.querySelector('#preview-hidden')

      img_preview.style.display = 'block'
      preview_hidden.style.display = 'none'
      txt_preview.style.display = 'inline'
      img_preview.src = URL.createObjectURL(img.files[0])
    }
  </script>
@endsection
