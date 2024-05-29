@extends('layouts.admin-dashboard')

@section('content')
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      {{-- button --}}
      <a href="{{ route('admin.berita.create') }}">
        <x-primary-button class="justify-end mb-5">
          {{ __('Tambah Berita') }}
        </x-primary-button>
      </a>
      {{-- table --}}
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
          <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                Judul Berita
              </th>
              <th scope="col" class="px-6 py-3 text-center">
                Gambar
              </th>
              <th scope="col" class="px-6 py-3">
                Isi Berita
              </th>
              <th scope="col" class="px-6 py-3">
                Terakhir diperbaharui
              </th>
              <th scope="col" class="px-6 py-3">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                {{-- judul --}}
                <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                  {{ $post->judul }}
                </td>
                {{-- gambar --}}
                <td class="px-6 py-4 text-center">
                  <a href="{{ Storage::url($post->gambar) }}" target="_blank" class="flex justify-center"><img
                      src="{{ Storage::url($post->gambar) }}" alt="" class="h-16 max-w-sm "></a>
                </td>
                {{-- isi berita --}}
                <td class="px-6 py-4">
                  <span class="hidden md:block">
                    {{ Str::words(strip_tags($post->isi), 5, '...')  }}
                  </span>
                  <span class="md:hidden">
                    {{ Str::words(strip_tags($post->isi), 3, '...')  }}
                  </span>
                </td>
                {{-- waktu upload --}}
                <td class="px-6 py-4">
                  {{ $post->waktu_upload }}
                </td>
                {{-- aksi --}}
                <td class="px-6 py-4">
                  <a href="{{ route('admin.berita.edit', $post->id) }}"
                    class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                  <form action="{{ route('admin.berita.destroy', $post->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('delete')
                    <button type="submit"
                      class="font-medium text-red-600 hover:underline dark:text-blue-500">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection