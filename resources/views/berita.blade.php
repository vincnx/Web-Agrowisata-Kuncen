@extends('layouts.template')

@section('content')
  <div class="container mx-auto px-10">
    <h1 class="text-dark-blue-page my-10 pt-10 text-3xl font-semibold">Berita Agrowisata Kuncen</h1>
    @if ($posts->count())
      {{-- berita utama --}}
      <div class="mb-20">
        {{-- <h2 class="text-2xl">Berita Terbaru</h2> --}}
        <div class="grid h-[450px] grid-cols-12 gap-x-7">
          <img src="{{ Storage::url($post->gambar) }}" alt="" class="col-span-6 h-full w-full object-cover">
          <div class="col-span-6 flex items-center">
            <div class="text-justify">
              <div class="mb-5">
                <h3 class="text-dark-blue-page mb-5 text-2xl font-semibold">{{ $post->judul }}</h3>
                <p class="text-dark-blue-page leading-5">{!! Str::words(strip_tags($post->isi), 120, '...') !!}</p>
              </div>
              <a href="berita/{{ $post->slug }}"
                class="'inline-flex bg-main-page duration-150' items-center rounded-md border border-transparent px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300">Baca
                Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      {{-- berita lainnya --}}
      <article class="mb-5 grid grid-cols-12 gap-6">
        @foreach ($posts as $post)
          <x-card-pengumuman src="{{ Storage::url($post->gambar) }}" judul="{{ $post->judul }}"
            isi="{{ Str::words(strip_tags($post->isi), 20, '...') }}"
            waktu_upload="{{ Carbon\Carbon::parse($post->waktu_upload)->translatedFormat('l, d F Y') }}"
            slug="{{ $post->slug }}" class="col-span-4" />
        @endforeach
      </article>
      {{ $posts->links() }}
  </div>
  @endif

  <x-footer class="mt-5" />
@endsection
