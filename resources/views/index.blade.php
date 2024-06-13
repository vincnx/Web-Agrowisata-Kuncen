@extends('layouts.template')

@section('content')
  <!---Background Section--->
  <div class="bg-gray-300 bg-[url('/public/img/Bg.svg')] bg-cover bg-center bg-no-repeat lg:bg-left">>
    <img src="{{ URL::to('/img/BG.svg') }}" alt="" class="invisible" />
  </div>

  {{-- wa fixed --}}
  <div class="waHover">
    <a href="https://wa.me/" target="_blank"><img src="{{ URL::to('/img/waSticky.svg') }}" alt="" width="45px" /></a>
  </div>

  {{-- dots --}}
  <div class="circlePart container mx-auto px-10">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </div>

  {{-- content pertama --}}
  <div class="contentSatu container mx-auto px-10">
    {{-- gambar --}}
    <img src="{{ URL::to('/img/firstImg.svg') }}" alt="" width="235px" />
    <div class="bg-main-page absolute -z-10 ml-2 mt-2">
      <img src="{{ URL::to('/img/firstImg.svg') }}" alt="" class="invisible" width="235px" />
    </div>

    {{-- testimoni --}}
    <div class="flex-grow-1">
      <h2 class="cstTxt">Agrowisata<br>Kuncen Polobogo</h2>

      <div class="box">
        <p class="text-main-page font-bold">Kenapa harus Agrowisata Kuncen?</p>
        <p class="boxContent my-11 text-justify text-sm text-gray-500">
          Agrowisata Kucen Pologobo menggabungkan fasilitas camping ground, restoran, dan pemandangan alam yang indah
          dalam satu destinasi. Pengunjung dapat menikmati berkemah di bawah bintang-bintang sambil menikmati hidangan
          lezat di restoran kami dengan latar belakang pemandangan alam yang memukau. Setiap sudut di Agrowisata Kucen
          Pologobo menawarkan pengalaman yang menyegarkan dan mendalam bagi para pengunjung yang mencari ketenangan dan
          keindahan alam.
        </p>
        <div class="ml-auto flex items-center justify-end gap-2">
          <p class="text-sm">4.6</p>
          @for ($i = 0; $i < 4; $i++)
            <img src="{{ URL::to('/img/Star.svg') }}" alt="" class="star" width="20px" />
          @endfor
          <img src="{{ URL::to('/img/FadeStar.svg') }}" alt="" class="star" width="20px" />
          <p class="text-sm">(80)</p>
        </div>
      </div>
    </div>

    {{-- layanan yang diberikan --}}
    <div class="flex min-w-[300px] flex-col items-center shadow-2xl">
      <h3 class="text-dark-blue-page text-uppercase my-8 font-bold">KAMI MENYEDIAKAN ANDA</h3>

      {{-- camp ground --}}
      <div class="containerServices hover:bg-gray-100">
        <img src="{{ '/img/camp.svg' }}" alt="" width="30px" />
        <div>
          <h5 id="titlebox">Camp Ground</h5>
          <p id="titleboxtxt">
            Rasakan pengalaman berkemah yang memikat di camping ground
            Kuncen Agrowisata.
          </p>
        </div>
      </div>

      {{-- restoran --}}
      <div class="containerServices hover:bg-gray-100">
        <img src="{{ '/img/restaurant.svg' }}" alt="" width="30px" />
        <div class="tetxmid">
          <h5 id="titlebox">Restaurant</h5>
          <p id="titleboxtxt">
            Cicipi hidangan lezat di restoran kami yang menggugah selera.
          </p>
        </div>
      </div>

      {{-- best view --}}
      <div class="containerServices hover:bg-gray-100">
        <img src="{{ '/img/bestview.svg' }}" alt="" width="30px" />
        <div class="tetxmid">
          <h5 id="titlebox">Best View</h5>
          <p id="titleboxtxt">
            Nikmati pemandangan alam yang indah di Kuncen Agrowisata.
          </p>
        </div>
      </div>
    </div>
  </div>

  {{-- content kedua --}}
  <div class="container mx-auto mt-11 px-10">
    <div class="">
      <h2 class="titlebox2">Fasilitas yang kami berikan</h2>
      <p id="deskripsibox2" class="text-gray-500">
        Agrowisata Kucen Pologobo menggabungkan fasilitas camping ground,
        restoran, dan pemandangan alam yang indah dalam satu destinasi.
        Pengunjung dapat menikmati berkemah di bawah bintang-bintang sambil
        menikmati hidangan lezat di restoran kami dengan latar belakang
        pemandangan alam yang memukau.
      </p>
    </div>
  </div>
  {{-- card slider --}}
  <div class="container mx-auto px-10">
    <div
      class="mt-16 grid auto-cols-[60%] grid-flow-col gap-6 overflow-x-auto rounded-md pb-12 md:auto-cols-[40%] lg:auto-cols-[6.81%] lg:px-0">
      <x-card title="Camp Ground" src="{{ URL::to('/img/c05baac3a45e0aef8b4566bb0fc222c4.jpeg') }}"
        desc="Agrowisata Kuncen memberikan kesempatan untuk berkemah dalam suasana alam yang menenangkan dan menyegarkan." />
      <x-card title="Restaurant" src="{{ URL::to('/img/resto.jpeg') }}"
        desc="Agrowisata Kuncen menyuguhkan pengalaman kuliner yang autentik dengan hidangan istimewa dari dapur lokalnya." />
      <x-card title="Best View" src="{{ URL::to('/img/view.png') }}"
        desc="Agrowisata Kuncen menawarkan pemandangan yang memukau, menyuguhkan keindahan alam yang tak terlupakan." />
      <x-card title="Acara Pramuka" src="{{ URL::to('/img/acara-pramuka.jpeg') }}"
        desc="Agrowisata Kuncen menyediakan petualangan pramuka untuk anak-anak dengan panduan ahli di alam terbuka." />
      <x-card title="Fun Outbond" src="{{ URL::to('/img/1. (1).png') }}"
        desc="Agrowisata Kuncen menyediakan petualangan seru dengan permainan dan tantangan di alam terbuka." />
      <x-card title="Wedding" src="{{ URL::to('/img/1. (6).png') }}"
        desc="Agrowisata Kuncen menyediakan pesta pernikahan yang tak terlupakan di tengah pemandangan alam yang indah." />
    </div>
  </div>

  {{-- content ketiga --}}
  <div class="container mx-auto mb-12 px-10">
    <div class="mt-12 rounded-lg text-center shadow-2xl" x-data="{ open: 'camp_ground' }">
      <div class="bg-main-page mt-8 inline-block rounded-3xl px-9 py-4">
        <h2 class="text-4xl font-semibold text-white">OUR PRICES</h2>
      </div>
      <div class="my-9">
        <a :class="open == 'camp_ground' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'camp_ground'">Camp Ground</a>
        <span class="mx-3 font-semibold text-gray-500">|</span>
        <a :class="open == 'menu_makanan' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'menu_makanan'">Menu Makanan</a>
        <span class="mx-3 font-semibold text-gray-500">|</span>
        <a :class="open == 'peta_lokasi' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'peta_lokasi'">Peta Lokasi</a>
        <span class="mx-3 font-semibold text-gray-500">|</span>
        <a :class="open == 'sewa_peralatan' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'sewa_peralatan'">Sewa Peralatan</a>
      </div>
      {{-- camp ground --}}
      <div class="" x-show="open == 'camp_ground'">
        <div
          class="grid auto-cols-max grid-flow-col gap-5 overflow-x-auto rounded-lg px-10 pb-10 md:grid-flow-row md:grid-cols-2 lg:grid-cols-4">
          @foreach ($camp_packages as $camp_package)
            <x-price-card class="mb-2" :data="$camp_package" />
          @endforeach
        </div>
      </div>
      {{-- menu makanan --}}
      <div class="w-full" x-show="open == 'menu_makanan'">
        <div>
          <h1>Menu makanan</h1>
        </div>
      </div>
      {{-- peta lokasi --}}
      <div class="w-full" x-show="open == 'peta_lokasi'">
        <div>
          <h1>peta lokasi</h1>
        </div>
      </div>
      {{-- sewa peralatan --}}
      <div class="w-full" x-show="open == 'sewa_peralatan'">
        <div>
          <h1>Sewa Peralatan</h1>
        </div>
      </div>
    </div>
  </div>

  {{-- content keempat --}}
  <div class="mb-11">
    <h2 class="contentempatTitle"> LEBIH DEKAT DENGAN KITA KUNCEN <span class="text-main-page">ISI PESANMU
        SEKARANG</span></h2>
    <div class="container mx-auto grid grid-cols-8 grid-rows-4 gap-6 px-10">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.129413678298!2d110.45435297476135!3d-7.339360692669203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a79e1f8801581%3A0x5f221d6b1eb55bf6!2sKuncen%20Camp%20Ground!5e0!3m2!1sen!2sid!4v1717669442033!5m2!1sen!2sid"
        style="border: 0" allowfullscreen="" loading="lazy" width="100%" height="100%"
        referrerpolicy="no-referrer-when-downgrade" class="col-span-5 row-span-3 row-start-1"></iframe>

      {{-- no telp --}}
      <div class="col-span-2 col-start-1 flex items-center gap-5 rounded-md p-9 shadow-xl">
        <img src="{{ URL::to('/img/Telepon.svg') }}" alt="" />
        <div class="text-dark-blue-page">
          <p class="text-lg font-bold leading-none">0813-5860-3314</p>
          <p class="noTelpTxt">Nomor Telepon</p>
        </div>
      </div>

      {{-- email --}}
      <div class="col-span-3 col-start-3 flex items-center gap-5 rounded-md p-9 shadow-xl">
        <img src="{{ URL::to('/img/Mail.svg') }}" alt="" />
        <div class="text-dark-blue-page">
          <p class="text-lg font-bold leading-none">buiesnessinquiermenst@gmail.com</p>
          <p class="noTelpTxt">Buisness Email</p>
        </div>
      </div>

      {{-- form --}}
      <div class="col-span-3 row-span-4 row-start-1 p-9 shadow-xl">
        <form action="" class="insideForm">
          <div>
            <label for="">Nama Lengkap</label>
            <input id="" type="text" name="" placeholder="Nama" />
          </div>
          <div>
            <label for="">Email anda</label>
            <input id="" type="text" name="" placeholder="Email" />
          </div>
          <div>
            <label for="">Subjek</label>
            <input id="" type="text" name="" placeholder="Subjek" />
          </div>
          <div>
            <label for="">Pesan</label>
            <textarea id="" name="" class="textarea" placeholder="Pesan anda"></textarea>
          </div>
          <x-primary-button class="w-fit">Kirim Pesan</x-primary-button>
        </form>
      </div>
    </div>
  </div>

  {{-- content kelima --}}
  <div class="container mx-auto mb-20 px-10" x-data="{ open: 'slide1' }">
    <h2 class="text-dark-blue-page text-center text-2xl font-bold">OUR GALLERY</h2>
    <div class="slideshow-container mt-10 grid grid-cols-12" x-show="open == 'slide1'">
      <div class="col-span-8 col-start-1">
        <img src="{{ URL::to('/img/1713434589404.jpg') }}" alt=""
          class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4">
        <img src="{{ URL::to('/img/sebelahPanjang.svg') }}" alt=""
          class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4 col-start-1">
        <img src="{{ URL::to('/img/normal1.svg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4">
        <img src="{{ URL::to('/img/normal3.svg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4">
        <img src="{{ URL::to('/img/1. (4).png') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
    </div>

    <div class="slideshow-container mt-10 grid grid-cols-12" x-show="open == 'slide2'">
      <div class="col-span-8 col-start-1">
        <img src="{{ URL::to('/img/panjang.svg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4">
        <img src="{{ URL::to('/img/kelima.svg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4 col-start-1">
        <img src="{{ URL::to('/img/1. (6).png') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4">
        <img src="{{ URL::to('/img/1. (1).png') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4">
        <img src="{{ URL::to('/img/acara-pramuka.jpeg') }}" alt=""
          class="h-full w-full rounded-lg object-cover">
      </div>
    </div>

    <div class="mt-5 flex justify-center">
      <span :class="open == 'slide1' ? 'bg-main-page' : ''" class="dot" @click="open = 'slide1'"></span>
      <span :class="open == 'slide2' ? 'bg-main-page' : ''" class="dot" @click="open = 'slide2'"></span>
    </div>
  </div>

  {{-- pengumuman --}}
  <div class="container mx-auto px-10 flex justify-between items-end mb-10">
    <h2 class="text-2xl font-bold">Pengumuman</h2>
    <a href="{{ route('berita_posts') }}" class="text-main-page font-bold">Lihat berita lainnya</a>
  </div>
  <div
    class="container mx-auto px-10 no-scrollbar grid auto-cols-[80%] pb-20 grid-flow-col gap-5 overflow-x-auto rounded-lg sm:auto-cols-max xl:auto-cols-auto">
    @foreach ($posts as $post)
      <x-card-pengumuman src="{{ Storage::url($post->gambar) }}" judul="{{ $post->judul }}"
        isi="{{ Str::words(strip_tags($post->isi), 20, '...') }}"
        waktu_upload="{{ Carbon\Carbon::parse($post->waktu_upload)->translatedFormat('l, d F Y') }}"
        slug="{{ $post->slug }}" class="max-w-sm" />
    @endforeach
  </div>

  <x-footer />
@endsection

@section('script')
  <script>
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" ngab", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " ngab";
    }
  </script>
@endsection
