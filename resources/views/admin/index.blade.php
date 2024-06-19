@extends('layouts.admin-dashboard')

@section('content')
  <h1 class="text-dark-blue-page mb-20 text-center text-5xl font-bold">Dashboard Agrowisata Kuncen</h1>
  <div class="grid grid-cols-12 gap-6 mb-11">
    {{-- paket camping --}}
    <div class="col-span-6 h-fit">
      <div class="mb-5 flex items-end justify-between">
        <h2 class="text-dark-blue-page text-2xl font-semibold">Paket Camping</h2>
        <a href="{{ route('admin.paket-camping.index') }}" class="text-main-page text-end font-semibold">Lihat Selengkapnya</a>
      </div>
      <div class="overflow-x-auto rounded-lg shadow-md">
        <table class="w-full text-left text-sm text-gray-500 rtl:text-right">
          <thead class="bg-main-page text-dark-blue-page text-xs uppercase">
            <tr>
              <th scope="col" class="px-6 py-3">
                Nama Paket
              </th>
              <th scope="col" class="px-6 py-3 text-center">
                Harga
              </th>
              <th scope="col" class="px-6 py-3">
                Fasilitas
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($packages as $package)
              <tr
                class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                {{-- nama --}}
                <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                  {{ $package->nama }}
                </td>
                {{-- harga --}}
                <td class="px-6 py-4 text-center">
                  {{ $package->harga }}
                </td>
                {{-- fasilitas --}}
                <td class="px-6 py-4">
                  <p>
                    @php
                      $facilities = [];
                      if ($package->tenda) {
                          $facilities[] = 'Tenda';
                      }
                      if ($package->matras) {
                          $facilities[] = 'Matras';
                      }
                      if ($package->sleeping_bag) {
                          $facilities[] = 'Sleeping Bag';
                      }
                      if ($package->kayu_bakar) {
                          $facilities[] = 'Kayu Bakar';
                      }
                      if ($package->alat_masak) {
                          $facilities[] = 'Alat Masak';
                      }
                      echo implode(', ', $facilities);
                    @endphp
                  </p>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    {{-- pesan --}}
    <div class="col-span-6 h-fit">
      <div class="mb-5 flex items-end justify-between">
        <h2 class="text-dark-blue-page text-2xl font-semibold">Pesan Pengunjung</h2>
        <a href="{{ route('admin.index') }}" class="text-main-page text-end font-semibold">Lihat Selengkapnya</a>
      </div>
      <div class="overflow-x-auto rounded-lg shadow-md">
        <table class="w-full text-left text-sm text-gray-500 rtl:text-right">
          <thead class="bg-main-page text-dark-blue-page text-xs uppercase">
            <tr>
              <th scope="col" class="px-6 py-3">
                Subjek
              </th>
              <th scope="col" class="px-6 py-3 text-center">
                Pesan
              </th>
              <th scope="col" class="px-6 py-3">
                Oleh
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($messages as $message)
              <tr
                class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                {{-- subjek --}}
                <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                  {{ $message->subjek }}
                </td>
                {{-- isi --}}
                <td class="px-6 py-4 text-center">
                  {{ Str::words(strip_tags($message->pesan), 5, '...') }}
                </td>
                {{-- fasilitas --}}
                <td class="px-6 py-4">
                  <p>{{ Str::words(strip_tags($message->nama), 3, '...') }}</p>
                  <p>{{ $message->email }}</p>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {{-- berita --}}
  <div class="h-fit">
    <div class="mb-5 flex items-end justify-between">
      <h2 class="text-dark-blue-page text-2xl font-semibold">Berita Kuncen</h2>
      <a href="{{ route('admin.berita.index') }}" class="text-main-page text-end font-semibold">Lihat Selengkapnya</a>
    </div>
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="bg-main-page text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
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
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr
              class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
              {{-- judul --}}
              <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                {{ $post->judul }}
              </td>
              {{-- gambar --}}
              <td class="px-6 py-4 text-center">
                <a href="{{ Storage::url($post->gambar) }}" target="_blank" class="flex justify-center"><img
                    src="{{ Storage::url($post->gambar) }}" alt="" class="h-16 max-w-sm"></a>
              </td>
              {{-- isi berita --}}
              <td class="px-6 py-4">
                <span class="hidden md:block">
                  {{ Str::words(strip_tags($post->isi), 5, '...') }}
                </span>
                <span class="md:hidden">
                  {{ Str::words(strip_tags($post->isi), 3, '...') }}
                </span>
              </td>
              {{-- waktu upload --}}
              <td class="px-6 py-4">
                {{ $post->waktu_upload }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
