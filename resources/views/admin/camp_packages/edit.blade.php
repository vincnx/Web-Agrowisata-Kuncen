@extends('layouts.admin-dashboard')

@section('content')
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <form class="mx-auto max-w-full" enctype="multipart/form-data" method="POST"
      action="{{ route('admin.paket-camping.update', $paket_camping->id) }}">
        @csrf
        @method('put')
        <!-- Nama paket -->
        <div class="mb-5">
          <label for="nama" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Paket</label>
          <div class="mt-2">
            <div
              class="flex w-full rounded-md p-1 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
              <input id="nama" type="text" name="nama" value="{{ old('nama', $paket_camping->nama) }}"
                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
              </div>
            </div>
            @error('nama')
            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>
        {{-- harga --}}
        <div class="mb-5">
          <label for="harga" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Harga</label>
          <input id="harga" type="number" name="harga" step="100" min="0" value="{{ old('harga', $paket_camping->harga) }}"
          class="block w-full rounded-md border-gray-300 p-1 py-2.5 text-sm text-gray-900 focus:ring-indigo-600" />
          @error('harga')
          <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
          @enderror
        </div>
        <!-- isi berita -->
        <div class="mb-5">
          <label for="fasilitas" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Fasilitas</label>
          <ul
            class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
            {{-- tenda --}}
            <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
              <div class="flex items-center ps-3">
                <input id="vue-checkbox-list" type="checkbox" value="1" name="tenda"
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700" {{ ($paket_camping->tenda) ? 'checked' : '' }}>
                <label for="vue-checkbox-list"
                  class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Tenda</label>
              </div>
            </li>
            {{-- matras --}}
            <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
              <div class="flex items-center ps-3">
                <input id="react-checkbox-list" type="checkbox" value="1" name="matras"
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700" {{ ($paket_camping->matras) ? 'checked' : '' }}>
                <label for="react-checkbox-list"
                  class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Matras</label>
              </div>
            </li>
            {{-- sleeping bag --}}
            <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
              <div class="flex items-center ps-3">
                <input id="angular-checkbox-list" type="checkbox" value="1" name="sleeping_bag"
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700" {{ ($paket_camping->sleeping_bag) ? 'checked' : '' }}>
                <label for="angular-checkbox-list"
                  class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sleeping Bag</label>
              </div>
            </li>
            {{-- kayu bakar --}}
            <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
              <div class="flex items-center ps-3">
                <input id="angular-checkbox-list" type="checkbox" value="1" name="kayu_bakar"
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700" {{ ($paket_camping->kayu_bakar) ? 'checked' : '' }}>
                <label for="angular-checkbox-list"
                  class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Kayu Bakar</label>
              </div>
            </li>
            {{-- alat masak --}}
            <li class="w-full dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="laravel-checkbox-list" type="checkbox" value="1" name="alat_masak"
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700" {{ ($paket_camping->alat_masak) ? 'checked' : '' }}>
                <label for="laravel-checkbox-list"
                  class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Alat Masak</label>
              </div>
            </li>
          </ul>
        </div>

        <x-primary-button>Perbarui Paket</x-primary-button>
      </form>
    </div>
  </div>
@endsection