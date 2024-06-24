@extends('layouts.admin-dashboard')

@section('content')
  <h1 class="text-dark-blue-page mb-20 text-center text-5xl font-bold">Dashboard Agrowisata Kuncen</h1>

  <div class="mb-11 grid grid-cols-12 gap-6">
    {{-- menu makanan --}}
    <div class="col-span-4">
      <form action="{{ route('admin.index.edit', $price_images->id ) }}" class="mb-5 flex items-end justify-between" enctype="multipart/form-data" method="post">
        <h2 class="text-dark-blue-page text-2xl font-semibold">Menu Makanan</h2>
        @csrf
        @method('put')
        <label for="makanan" class="text-main-page cursor-pointer font-semibold">
          <span>Edit</span>
          <input id="makanan" name="img_file" type="file" class="sr-only" onchange="change_image(this.id, event)">
        </label>
        <input type="text" name="type" value="makanan" class="hidden">
        <button type="submit" class="text-main-page font-semibold hidden" id="submit-makanan">Simpan</button>
      </form>
      <img src={{ Storage::url($price_images->makanan) }} id="img-makanan" alt="" class="rounded-md w-full aspect-[9/12] object-contain bg-dark-blue-page">
    </div>

    {{-- peta lokasi --}}
    <div class="col-span-4">
      <form action="{{ route('admin.index.edit', $price_images->id ) }}" class="mb-5 flex items-end justify-between" enctype="multipart/form-data" method="post">
        <h2 class="text-dark-blue-page text-2xl font-semibold">Peta Lokasi</h2>
        @csrf
        @method('put')
        <label for="peta" class="text-main-page cursor-pointer font-semibold">
          <span>Edit</span>
          <input id="peta" name="img_file" type="file" class="sr-only" onchange="change_image(this.id, event)">
        </label>
        <input type="text" name="type" value="peta" class="hidden">
        <button type="submit" class="text-main-page font-semibold hidden" id="submit-peta">Simpan</button>
      </form>
      <img src={{ Storage::url($price_images->peta) }} id="img-peta" alt="" class="rounded-md w-full aspect-[9/12] object-contain bg-dark-blue-page">
    </div>

    {{-- peralatan --}}
    <div class="col-span-4 h-full overflow-hidden">
      <form action="{{ route('admin.index.edit', $price_images->id ) }}" class="mb-5 flex items-end justify-between" enctype="multipart/form-data" method="post">
        <h2 class="text-dark-blue-page text-2xl font-semibold">Peralatan</h2>
        @csrf
        @method('put')
        <label for="peralatan" class="text-main-page cursor-pointer font-semibold">
          <span>Edit</span>
          <input id="peralatan" name="img_file" type="file" class="sr-only" onchange="change_image(this.id, event)">
        </label>
        <input type="text" name="type" value="peralatan" class="hidden">
        <button type="submit" class="text-main-page font-semibold hidden" id="submit-peralatan">Simpan</button>
      </form>
      <img src={{ Storage::url($price_images->peralatan) }} id="img-peralatan" alt="" class="rounded-md w-full aspect-[9/12] object-contain bg-dark-blue-page">
    </div>
  </div>

  <div class="mb-11 grid grid-cols-12 gap-6">
    {{-- paket camping --}}
    <div class="col-span-12 h-fit sm:col-span-6">
      <div class="mb-5 flex items-end justify-between">
        <h2 class="text-dark-blue-page text-2xl font-semibold">Paket Camping</h2>
        <a href="{{ route('admin.paket-camping.index') }}" class="text-main-page text-end font-semibold">Lihat
          Selengkapnya</a>
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
    <div class="col-span-12 h-fit sm:col-span-6">
      <div class="mb-5 flex items-end justify-between">
        <h2 class="text-dark-blue-page text-2xl font-semibold">Pesan Pengunjung</h2>
        <a href="{{ route('admin.pesan') }}" class="text-main-page text-end font-semibold">Lihat Selengkapnya</a>
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
                  {{ Str::limit(strip_tags($message->pesan), 20, '...') }}
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
    <div class="overflow-x-auto rounded-lg shadow-md">
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

@section('script')
  <script>
    function a(){
      const img = document.querySelector('#gambar')
      document.body.style.backgroudColor = "red"
    }
    function change_image(id) {
      console.log(id)
      const img = document.querySelector('#' + id)
      const img_preview = document.querySelector('#img-' + id)
      document.querySelector('#submit-' + id).style.display = 'block'
      img_preview.src = URL.createObjectURL(img.files[0])
    }
  </script>
@endsection