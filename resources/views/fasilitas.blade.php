@extends('layouts.template')

@section('content')
  {{-- jumbotron --}}
  <section
    class="mb-14 bg-gray-300 bg-[url('/public/img/panorama-fasilitas3.jpg')] bg-cover bg-center bg-no-repeat lg:mb-24">
    <div class="container mx-auto px-10 py-36 text-center sm:items-start lg:py-48">
      <h1
        class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-white drop-shadow-md md:text-5xl lg:text-6xl">
        FASILITAS</h1>
    </div>
  </section>

  {{-- content --}}
  <section class="container mx-auto grid grid-cols-12 gap-x-5 px-10">
    @for ($i = 0; $i < 6; $i++)
      <figure class="bg-[url('/public/img/pendopo.png')] flex justify-center items-end col-span-6 md:col-span-4 aspect-square bg-cover mb-10 md:mb-14">
        <p class="text-white font-bold mb-3 text-xs sm:text-base">PENDOPO</p>
      </figure>
    @endfor
  </section>

  {{-- footer --}}
  <x-footer/>
@endsection
