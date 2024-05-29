@extends('layouts.template')

@section('content')
<div class="container mx-auto">
  <h1 class="text-green-page text-center text-3xl font-semibold my-10 pt-10">{{ $post->judul }}</h1>
  <img class="rounded-lg float-left max-h-96 mr-5" src="{{ Storage::url($post->gambar) }}" alt=""/>
  {!! $post->isi !!}
</div>
@endsection
