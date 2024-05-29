@extends('layouts.template')

@section('content')
  {{-- jumbotron --}}
  <section
    class="bg-gray-300 bg-[url('/public/img/jumbotron-tentang.png')] bg-cover bg-center bg-no-repeat bg-blend-multiply mb-24">
    <div class="container mx-auto px-10 py-36 text-center sm:items-start lg:py-48">
      <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight drop-shadow-md text-white md:text-5xl lg:text-6xl">TENTANG KAMI</h1>
    </div>
  </section>

  <article class="container grid grid-cols-12 gap-x-5 mx-auto text-justify">
    {{-- description 1 --}}
    <p class="col-start-3 col-span-8 mb-24">
      Berada di lereng Gunung Merbabu, Desa Polobogo, Kecamatan Getasan, Kabupaten Semarang. Agrowisata kuncen polobogo merupakan salah satu destinasi yang dapat dikunjungi terutama bagi para pengunjung yang mencari pengalaman baru dengan suasana di alam terbuka. Letaknya yang berada di ketinggian 700 mdpl membuat agrowisata kuncen memiliki udara yang sejuk beserta pemandangan alam yang memesona dari rawa pening dan banyaknya perbukitan yang juga turut terlihat dari agrowisata kuncen Polobogo.<br><br>
      Agrowisata Kuncen Polobogo menggabungkan kearifan alam dengan berbagai aktivitas-aktivitas yang bisa dinikmati oleh para pengunjung.
    </p>
    {{-- panorama --}}
    <img src="{{asset('img/panorama-tentang.png')}}" alt="panorama agrowisata kuncen" class="col-start-2 col-span-10 mb-24">
    {{-- description 2 --}}
    <div class="col-start-2 col-span-10 grid grid-cols-10 items-center mb-24">
      <img src="{{ asset('img/tenda-tentang.png') }}" alt="camping ground agrowisata kuncen" class="col-span-5">
      <p class="col-span-5 pl-12">
        Agrowisata kuncen polobogo menawarkan aktivitas camping ground dengan area perkemahan yang luas dan dilengkapi dengan fasilitas-fasilitas seperti kamar mandi dan area parkir.<br>
        Selain itu Agrowisata Kuncen Polobogo juga menawarkan aktivitas campervan park yang memungkinkan para pengunjung untuk membawa kendaraan mereka sendiri dan menikmati suasana dan pemandangan dengan pengalaman yang baru.<br>
        Pengunjung juga dapat mencicipi hidangan lezat di restoran Agrowisata Kuncen yang menggugah selera.<br>
        Selain itu, agrowisata kuncen juga dapat mengakomodasi kegiatan-kegiatan lainnya.<br><br>
        Jadi, tunggu apa lagi? Reservasi sekarang dan dapatkan pengalaman tak terlupakan!
      </p>
    </div>
    {{-- other activities --}}
    <div class="col-start-1 col-span-12 grid grid-cols-2 grid-rows-2 mb-24">
      <img src="{{ asset('img/api-unggun.png') }}" alt="" class="row-span-2 h-[100%]">
      <img src="{{ asset('img/wedding.png') }}" alt="">
      <img src="{{ asset('img/outbond.png') }}" alt="">
    </div>
  </article>


@endsection
