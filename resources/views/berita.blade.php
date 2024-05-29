@extends('layouts.template')

@section('content')
  <h1 class="text-green-page text-center text-3xl font-semibold my-10 pt-10">Berita Agrowisata Kuncen</h1>

  <div class="container mx-auto px-16">
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
@endsection
