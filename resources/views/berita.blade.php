@extends('layouts.template')
{{-- 
@if ($po
  sts->count())
    <div class="card mb-5">
      @if ($posts[0]->image)
      <div class="d-flex justify-content-center">
        <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top" style="max-height: 400px; max-widht: 1200px; width: auto; height: auto" alt="...">
      </div>
      @else
      <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
      @endif
      <div class="card-body">
        <h2 class="card-title mb-0"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
        <p class="mb-3"><small>By : <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none text-dark">{{ $posts[0]->user->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->category->name }}</a></small></p>
        <p class="card-text text mb-2">{{ $posts[0]->excerpt }}</p>
        <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
      </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap">
      @foreach ($posts->slice(1, 9) as $post)
        <div class="card mb-3" style="width: 30%">
          @if ($post->image)
          <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top"   alt="...">
          @else
          <img src="https://source.unsplash.com/800x550/?{{ $post->category->name }}" class="card-img-top" alt="...">
          @endif
          <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h2>
              <p class="mb-3"><small>By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none text-dark">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a></small></p>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="blog/{{ $post->slug }}" class="btn btn-primary">View more</a>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p class="fs-3">No Post Yet.</p>
  @endif --}}

@section('content')
  <div class="container mx-auto px-10">
    <h1 class="text-dark-blue-page text-3xl font-semibold my-10 pt-10">Berita Agrowisata Kuncen</h1>
    @if ($posts->count())
      {{-- berita utama --}}
      <div class="mb-10">
        {{-- <h2 class="text-2xl">Berita Terbaru</h2> --}}
        <div class="grid grid-cols-12 gap-x-7 h-[450px]">
          <img src="{{ Storage::url($posts[0]->gambar) }}" alt="" class="col-span-6 object-cover h-full">
          <div class="col-span-6 flex items-center">
            <div class="text-justify">
              <div class="mb-5">
                <h3 class="text-2xl mb-5 font-semibold text-dark-blue-page">{{ $posts[0]->judul }}</h3>
                <p class="text-dark-blue-page leading-5">{!! Str::words(strip_tags($posts[3]->isi), 120, '...') !!}</p>
              </div>
              <a href="berita/{{ $posts[0]->slug }}" class="'inline-flex items-center px-4 py-2 bg-main-page dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    @endif

    <div class="grid grid-cols-12 gap-x-6">
      @foreach ($posts->slice(1, 9) as $post)
      <x-card-pengumuman src="{{ Storage::url($post->gambar) }}" judul="{{ $post->judul }}"
        isi="{{ Str::words(strip_tags($post->isi), 20, '...') }}"
        waktu_upload="{{ Carbon\Carbon::parse($post->waktu_upload)->translatedFormat('l, d F Y') }}" 
        slug="{{ $post->slug }}"
        class="col-span-4"/>
        {{-- <div class="card mb-3" style="width: 30%">
          @if ($post->image)
          <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top"   alt="...">
          @else
          <img src="https://source.unsplash.com/800x550/?{{ $post->category->name }}" class="card-img-top" alt="...">
          @endif
          <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h2>
              <p class="mb-3"><small>By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none text-dark">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a></small></p>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="blog/{{ $post->slug }}" class="btn btn-primary">View more</a>
          </div>
        </div> --}}
      @endforeach
    </div>
  </div>


  {{-- <div class="container mx-auto px-16">
    <div class="grid grid-cols-12 gap-5">
      @foreach ($posts as $post)
        <x-card-pengumuman src="{{ Storage::url($post->gambar) }}" judul="{{ $post->judul }}"
          isi="{{ Str::words(strip_tags($post->isi), 20, '...') }}"
          waktu_upload="{{ Carbon\Carbon::parse($post->waktu_upload)->translatedFormat('l, d F Y') }}" 
          slug="{{ $post->slug }}"
          class="col-span-4"/>
      @endforeach
    </div>
  </div>
  {{ $posts->links() }} --}}
@endsection
