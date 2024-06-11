@extends('layouts.template')

@section('content')
  <div class="container mx-auto px-10">
    <h1 class="text-dark-blue-page my-10 lg:pt-10 text-2xl lg:text-3xl font-semibold text-center lg:text-left">Berita Agrowisata Kuncen</h1>
    @if ($posts->count())
      {{-- berita utama --}}
      <div class="mb-20">
        {{-- <h2 class="text-2xl">Berita Terbaru</h2> --}}
        <div class="grid md:h-[300px] lg:h-[450px] grid-cols-2 gap-x-7">
          <img src="{{ Storage::url($post->gambar) }}" alt="" class="col-span-2 md:col-span-1 h-full w-full max-h-[500px] object-cover shadow-lg rounded-sm">
          <div class="col-span-2 md:col-span-1 flex items-center">
            <div class="text-justify mt-5 md:mt-0">
              <div class="mb-5">
                <h3 class="text-dark-blue-page mb-5 text-2xl font-semibold">{{ $post->judul }}</h3>
                <p class="text-dark-blue-page leading-5 ">{!! Str::words(strip_tags($post->isi), 20, '...') !!}</p>
                <p class="text-dark-blue-page leading-5 hidden lg:block">{!! Str::words(strip_tags($post->isi), 80, '...') !!}</p>
              </div>
              <a href="berita/{{ $post->slug }}">
                <x-primary-button>Baca Selengkapnya</x-primary-button>
              </a>
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
            slug="{{ $post->slug }}" class="col-span-12 md:col-span-4" />
        @endforeach
      </article>
      {{ $posts->links() }}
  </div>
  @endif

  <x-footer class="mt-5" />
@endsection
