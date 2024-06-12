@extends('layouts.template')

@section('content')
  <div class="mx-auto px-10 sm:container">
    <h1 class="text-dark-blue-page my-10 text-center text-2xl font-semibold lg:pt-10 lg:text-left lg:text-3xl">Berita
      Agrowisata Kuncen</h1>
    @if ($posts->count())
      {{-- berita utama --}}
      <div class="mb-10 lg:mb-20">
        {{-- <h2 class="text-2xl">Berita Terbaru</h2> --}}
        <div class="grid grid-cols-2 gap-x-7 md:h-[300px] lg:h-[500px]">
          <img src="{{ Storage::url($post->gambar) }}" alt=""
            class="col-span-2 h-full max-h-[500px] w-full rounded-md object-cover shadow-lg md:col-span-1">
          <div class="col-span-2 flex items-center md:col-span-1">
            <div class="mt-5 text-justify md:mt-0">
              <div class="mb-5">
                <h3 class="text-dark-blue-page mb-5 text-2xl font-semibold">{{ $post->judul }}</h3>
                <p class="text-dark-blue-page leading-5">{!! Str::words(strip_tags($post->isi), 20, '...') !!}</p>
                <p class="text-dark-blue-page hidden leading-5 lg:block">{!! Str::words(strip_tags($post->isi), 80, '...') !!}</p>
              </div>
              <a href="berita/{{ $post->slug }}">
                <x-primary-button>Baca Selengkapnya</x-primary-button>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>

  {{-- berita lainnya --}}
  <div class="container mx-auto px-10">
    <h2 class="text-dark-blue-page mb-5 text-2xl font-semibold">Berita Lainnya</h2>
    <article class=" mb-5 grid grid-cols-12 gap-7">
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
