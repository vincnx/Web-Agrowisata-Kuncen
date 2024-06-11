@extends('layouts.template')

@section('content')
  {{-- jumbotron --}}
  <section
    class="bg-gray-300 bg-[url('/public/img/1713434589404.jpg')] bg-cover bg-center bg-no-repeat bg-blend-multiply lg:bg-left">
    <div class="container mx-auto flex flex-col items-center px-10 py-24 pt-16 text-center sm:items-start lg:py-48">
      <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">Agrowisata
        Kuncen</h1>
      <p class="mb-8 text-lg font-bold text-white lg:text-xl">Camping Ground, Outbond, Resto & Cafe</p>
      <a href="#">
        <div≈ 
          class="flex w-fit items-center gap-2 rounded-full bg-white/50 px-4 py-2 text-center text-base font-medium text-white focus:ring-4 focus:ring-gray-400">
          <p>
            Reservasi
          </p>
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 16 22" fill="none">
            <path
              d="M14.8386 10.2874L1.93705 0.376053C1.72178 0.210593 1.43636 0.119044 1.14 0.120393C0.843638 0.121743 0.55907 0.215889 0.345317 0.383304L0.331526 0.394632C0.227543 0.475793 0.144893 0.573292 0.0886025 0.681198C0.0323126 0.789104 0.00356023 0.905161 0.00409384 1.02231C0.00462744 1.13946 0.0344358 1.25525 0.0917064 1.36264C0.148978 1.47003 0.232512 1.56677 0.337231 1.64698L12.4864 10.9797L0.422736 20.419C0.318753 20.5002 0.236103 20.5977 0.179813 20.7056C0.123523 20.8135 0.0947704 20.9296 0.095304 21.0467C0.0958376 21.1638 0.125646 21.2796 0.182917 21.387C0.240188 21.4944 0.323722 21.5912 0.428441 21.6714L0.442334 21.6826C0.657603 21.848 0.943017 21.9396 1.23938 21.9382C1.53574 21.9369 1.82031 21.8427 2.03407 21.6753L14.8448 11.6468C14.9574 11.5586 15.047 11.4528 15.1079 11.3356C15.1689 11.2185 15.2 11.0926 15.1995 10.9655C15.1989 10.8384 15.1666 10.7128 15.1046 10.5962C15.0425 10.4796 14.952 10.3746 14.8386 10.2874Z"
              fill="white" />
          </svg>
        </div≈>
      </a>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 200" fill="none">
        <path d="M-93.6247 226.493H2499.68C2528.52 220.33 1244.45 -240.079 -93.6247 226.493Z" fill="white"
          fill-opacity="0.2" />
        <path
          d="M-129.667 6.34922C-129.667 6.34922 -52.8275 -22.2222 463.441 49.2064C979.71 120.635 979.269 181.232 1488.77 87.3016C1998.28 -6.62856 1887.38 -14.2857 2314.8 17.4603V231.746H-57.63L-129.667 6.34922Z"
          fill="white" fill-opacity="0.35" />
        <path
          d="M-100.853 115.079C-100.853 115.079 319.888 9.02144 1075.76 142.857C1344.7 190.476 1571.62 219.841 2033.86 126.984L2036.26 203.175H-72.0375L-100.853 115.079Z"
          fill="white" />
      </svg>
    </div>
  </section>

  {{-- description 1 --}}
  <div class="container mx-auto mt-10 px-10 text-center">
    <h2 class="text-green-page text-3xl font-semibold">We Provide You</h2>
    <p class="mt-8 text-xl font-medium">Agrowisata Kucen Pologobo menggabungkan fasilitas camping ground, restoran,
      dan pemandangan alam yang indah dalam satu destinasi. Pengunjung dapat menikmati berkemah di bawah
      bintang-bintang sambil menikmati hidangan lezat di restoran kami dengan latar belakang pemandangan alam yang
      memukau.</p>
  </div>

  {{-- card group --}}
  <div
    class="no-scrollbar rounded-lg mx-auto -mb-28 mt-16 grid auto-cols-[60%] grid-flow-col gap-5 overflow-x-auto px-10 md:auto-cols-[40%] lg:auto-cols-[9.3%] lg:container lg:px-0 xl:px-10">
    <x-card title="Camp Ground" src="{{ URL::to('/img/c05baac3a45e0aef8b4566bb0fc222c4.jpeg') }}"
      desc="Agrowisata Kuncen memberikan kesempatan untuk berkemah dalam suasana alam yang menenangkan dan menyegarkan."/>
    <x-card title="Restaurant" src="{{ URL::to('/img/resto.jpeg') }}"
      desc="Agrowisata Kuncen menyuguhkan pengalaman kuliner yang autentik dengan hidangan istimewa dari dapur lokalnya." />
    <x-card title="Best View" src="{{ URL::to('/img/view.png') }}"
      desc="Agrowisata Kuncen menawarkan pemandangan yang memukau, menyuguhkan keindahan alam yang tak terlupakan." />
    <x-card title="Acara Pramuka" src="{{ URL::to('/img/acara-pramuka.jpeg') }}"
      desc="Agrowisata Kuncen menyediakan Petualangan pramuka untuk anak-anak dengan panduan ahli di alam terbuka." />
  </div>

  {{-- description 2 --}}
  <div class="bg-green-page z-[-10] -mb-28">
    <div class="mx-auto grid grid-cols-11 gap-10 py-40 text-center lg:container md:py-52 lg:text-justify">
      <div class="col-start-2 col-end-11 lg:col-end-7">
        <h2 class="text-4xl font-semibold text-white">LET’S START YOUR JOURNEY WITH US</h2>
        <p class="pt-8 font-medium text-white">Agrowisata Kucen Pologobo adalah destinasi yang memikat bagi para
          pencinta alam dan petualangan. Terletak
          di tengah keindahan alam yang memesona, Kucen Pologobo menawarkan pengalaman yang tak terlupakan dengan
          fasilitas camping ground yang nyaman serta restoran yang menyajikan hidangan lezat. Dengan pemandangan alam
          yang memukau sebagai latar belakang, setiap kunjungan ke Kucen Pologobo menjadi petualangan yang memperkaya
          jiwa dan memanjakan indera.</p>
      </div>
      <img src="{{ URL::to('/img/img vector.png') }}" alt=""
        class="col-span-4 col-start-7 hidden w-full object-cover lg:block">
    </div>
  </div>

  {{-- price list --}}
  <div class="container mx-auto mb-20 grid grid-cols-11">
    <div class="col-span-9 col-start-2 rounded-lg bg-white p-9 text-center shadow-xl" x-data="{ open: 'camp_ground' }">
      <h2 class="text-green-page text-4xl font-semibold">PRICE LIST</h2>
      <div class="my-9">
        <a :class="open == 'camp_ground' ? 'text-green-page' : ''" class="cursor-pointer font-semibold text-gray-400"
          @click="open = 'camp_ground'">Camp Ground</a>
        <span class="mx-3 font-semibold text-gray-400">|</span>
        <a :class="open == 'menu_makanan' ? 'text-green-page' : ''" class="cursor-pointer font-semibold text-gray-400"
          @click="open = 'menu_makanan'">Menu Makanan</a>
        <span class="mx-3 font-semibold text-gray-400">|</span>
        <a :class="open == 'sewa_peralatan' ? 'text-green-page' : ''" class="cursor-pointer font-semibold text-gray-400"
          @click="open = 'sewa_peralatan'">Sewa Peralatan</a>
      </div>
      {{-- camp ground --}}
      <div class="w-full" x-show="open == 'camp_ground'">
        <div
          class="grid auto-cols-max grid-flow-col gap-5 overflow-x-auto rounded-lg md:grid-flow-row md:grid-cols-2 lg:grid-cols-3">
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
      {{-- sewa peralatan --}}
      <div class="w-full" x-show="open == 'sewa_peralatan'">
        <div>
          <h1>Sewa Peralatan</h1>
        </div>
      </div>
    </div>
  </div>

  {{-- most visitor place --}}
  <div class="container mx-auto mb-20 text-center">
    <h2 class="text-2xl font-medium">Most Visitor Place</h2>
    <div class="mt-10 grid grid-cols-11 grid-rows-2 gap-5">
      <div class="col-span-6 col-start-2">
        <img src="{{ URL::to('/img/1713434589404.jpg') }}" alt="" class="rounded-lg">
      </div>
      <div class="col-span-3">
        <img src="{{ URL::to('/img/1713434589404.jpg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-3 col-start-2">
        <img src="{{ URL::to('/img/1713434589404.jpg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-3">
        <img src="{{ URL::to('/img/1713434589404.jpg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-3">
        <img src="{{ URL::to('/img/1713434589404.jpg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
    </div>
  </div>

  {{-- map --}}
  <div class="bg-green-page mb-20 py-10">
    <div class="container mx-auto grid grid-cols-12 items-center gap-5 px-16">
      <div class="col-span-12 text-center md:order-last md:col-span-7 md:text-left">
        <p class="text-xl font-semibold text-white lg:text-4xl">Agrowisata Kuncen Polobogo <br> <span
            class="text-base font-medium lg:text-xl">Polobogo, Kec. Getasan, Kabupaten Semarang, Jawa Tengah
            50774</span></p>
      </div>
      <div class="col-span-12 aspect-square rounded-lg md:col-span-5">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1093349031353!2d110.45357307582286!3d-7.3416174926669875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a791100000001%3A0x7e8520e8c19c266c!2sAgro%20Wisata%20Kuncen%20Polobogo!5e0!3m2!1sid!2sid!4v1714094003209!5m2!1sid!2sid"
          width="100%" height=100% style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" class="rounded-lg"></iframe>
      </div>
    </div>
  </div>

  {{-- pengumuman --}}
  <div class="container mx-auto mb-20 px-16">
    <h2 class="mb-10 text-2xl font-medium">Pengumuman</h2>
    <div
      class="no-scrollbar grid auto-cols-[80%] grid-flow-col gap-5 overflow-x-auto rounded-lg sm:auto-cols-max xl:auto-cols-auto">
      @foreach ($posts as $post)
        <x-card-pengumuman src="{{ Storage::url($post->gambar) }}" judul="{{ $post->judul }}"
          isi="{{ Str::words(strip_tags($post->isi), 20, '...') }}"
          waktu_upload="{{ Carbon\Carbon::parse($post->waktu_upload)->translatedFormat('l, d F Y') }}"
          slug="{{ $post->slug }}" />
      @endforeach
    </div>
  </div>

  {{-- media sosial --}}
  <div class="container mx-auto mb-20 px-16 text-center">
    <h2 class="mb-10 text-2xl font-medium">Media Sosial Agrowisata Kuncen Polobogo</h2>
    <div class="grid grid-cols-4 grid-rows-2 gap-5">
      <div class="col-span-2 row-span-2 aspect-square rounded-md border flex flex-col justify-center items-center">
        <svg class="h-32 w-32 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd"
            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
            clip-rule="evenodd" />
          <path fill="currentColor"
            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
        </svg>
        <p>Whatsapp</p>
        <p>082135235808</p>
        <p>081358603314</p>
      </div>
      <div class="rounded-md border">
        <p>instagram</p>
      </div>
      <div class="rounded-md border">
        <p>instagram</p>
      </div>
      <div class="rounded-md border">
        <p>instagram</p>
      </div>
      <div class="rounded-md border">
        <p>instagram</p>
      </div>
    </div>
  </div>

  <x-footer />
@endsection
