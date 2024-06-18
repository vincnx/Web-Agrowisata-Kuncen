@extends('layouts.template')

@section('content')
  <!---Background Section--->
  <div class="bg-gray-300 bg-[url('/public/img/Bg.png')] bg-cover bg-center bg-no-repeat py-72 lg:bg-left"></div>

  {{-- wa fixed --}}
  <div class="container mx-auto px-10">
    <x-wa-hover link="https://wa.me/"></x-wa-hover>
  </div>
  {{-- <a href="https://wa.me/" target="_blank"><img src="{{ URL::to('/img/waSticky.svg') }}" alt="" width="45px" /></a> --}}

  {{-- dots --}}
  <div class="container mx-auto my-11 flex justify-center gap-11 px-10 lg:justify-end">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </div>

  {{-- content pertama --}}
  <div class="container mx-auto mt-11 flex flex-col items-start gap-10 px-10 lg:mt-24 lg:flex-row">
    {{-- gambar --}}
    <img src="{{ URL::to('/img/Bg.png') }}" alt="" class="hidden h-80 w-56 object-cover lg:block" />
    <div class="bg-main-page absolute -z-10 ml-2 mt-2 hidden h-80 w-56 lg:block"></div>

    {{-- testimoni --}}
    <div class="flex-grow-1">
      <h2 class="text-dark-blue-page text-center text-2xl font-bold leading-none lg:text-start">AGROWISATA<br>KUNCEN
        POLOBOGO</h2>

      <div class="box my-11 bg-gray-100 px-6 py-10">
        <p class="text-main-page font-bold">Kenapa harus Agrowisata Kuncen?</p>
        <p class="my-8 text-justify text-sm text-dark-blue-page lg:my-11">
          Agrowisata Kucen Pologobo menggabungkan fasilitas camping ground, restoran, dan pemandangan alam yang indah
          dalam satu destinasi. Pengunjung dapat menikmati berkemah di bawah bintang-bintang sambil menikmati hidangan
          lezat di restoran kami dengan latar belakang pemandangan alam yang memukau. Setiap sudut di Agrowisata Kucen
          Pologobo menawarkan pengalaman yang menyegarkan dan mendalam bagi para pengunjung yang mencari ketenangan dan
          keindahan alam.
        </p>
        <div class="ml-auto flex items-center justify-end gap-2">
          <p class="text-sm">4.6</p>
          @for ($i = 0; $i < 4; $i++)
            <div class="h-5 w-5">
              <svg width="100%" height="100%" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z"
                  fill="#FD9B00" />
              </svg>
            </div>
          @endfor
          <div class="h-5 w-5">
            <svg width="100%" height="100%" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z"
                fill="url(#paint0_linear_6_412)" />
              <defs>
                <linearGradient id="paint0_linear_6_412" x1="7" y1="11" x2="12.5" y2="11"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FD9B00" />
                  <stop offset="1" stop-color="#D0D0D0" stop-opacity="0.63" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <p class="text-sm">(80)</p>
        </div>
      </div>
    </div>

    {{-- layanan yang diberikan --}}
    <div class="flex min-w-[300px] flex-col items-center shadow-xl">
      <h3 class="text-dark-blue-page text-uppercase my-8 font-bold">KAMI MENYEDIAKAN ANDA</h3>

      {{-- camp ground --}}
      <div class="flex items-center gap-3 px-5 py-4 align-middle hover:bg-gray-100">
        <div class="max-w-[38px]">
          <svg width="100%" height="100%" viewBox="0 0 38 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M23.4713 8.56312C23.7041 8.15324 23.791 7.6511 23.7129 7.16581C23.6349 6.68052 23.3983 6.25131 23.0545 5.97144C22.7108 5.69158 22.2877 5.58367 21.8771 5.67117C21.4665 5.75867 21.1017 6.03451 20.8619 6.43875L18.9999 9.645L17.1379 6.43875C17.0211 6.23313 16.871 6.05697 16.6964 5.92046C16.5217 5.78395 16.3259 5.6898 16.1204 5.64344C15.9148 5.59709 15.7035 5.59946 15.4987 5.6504C15.2939 5.70135 15.0996 5.79988 14.9272 5.94027C14.7548 6.08067 14.6075 6.26016 14.494 6.46836C14.3805 6.67656 14.303 6.90934 14.2659 7.15324C14.2288 7.39714 14.233 7.64732 14.2781 7.88932C14.3231 8.13132 14.4083 8.36034 14.5286 8.56312L17.0778 12.9544L3.91867 35.625H3.16659C2.74666 35.625 2.34393 35.8225 2.047 36.1742C1.75007 36.5258 1.58325 37.0027 1.58325 37.5C1.58325 37.9973 1.75007 38.4742 2.047 38.8258C2.34393 39.1775 2.74666 39.375 3.16659 39.375H34.8333C35.2532 39.375 35.6559 39.1775 35.9528 38.8258C36.2498 38.4742 36.4166 37.9973 36.4166 37.5C36.4166 37.0027 36.2498 36.5258 35.9528 36.1742C35.6559 35.8225 35.2532 35.625 34.8333 35.625H34.0828L20.9221 12.9563L23.4713 8.56312ZM25.3111 35.625H30.24L18.9999 16.2638L7.75984 35.625H12.6903L17.6858 27.0806C17.8329 26.8292 18.0294 26.6238 18.2582 26.4819C18.4871 26.34 18.7416 26.2659 18.9999 26.2659C19.2582 26.2659 19.5127 26.34 19.7416 26.4819C19.9705 26.6238 20.1669 26.8292 20.3141 27.0806L25.3111 35.625ZM16.541 35.625H21.4588L18.9999 31.4194L16.541 35.625Z"
              fill="#FD9B00" />
          </svg>
        </div>
        <div>
          <h5 class="text-main-page mb-1 font-bold">Camp Ground</h5>
          <p class="text-dark-blue-page text-justify text-sm leading-5">
            Rasakan pengalaman berkemah yang memikat di camping ground
            Kuncen Agrowisata.
          </p>
        </div>
      </div>

      {{-- restoran --}}
      <div class="flex items-center gap-3 px-5 py-4 align-middle hover:bg-gray-100">
        <div class="max-w-[38px]">
          <svg width="100%" height="100%" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M3.87708 3.01892L31.0164 26.8686C31.5314 27.3212 31.8207 27.935 31.8207 28.575C31.8207 29.215 31.5314 29.8288 31.0164 30.2814C30.5013 30.7338 29.8029 30.9879 29.0747 30.9879C28.3465 30.9879 27.648 30.7338 27.133 30.2814L20.5034 24.355C20.0695 23.9679 19.8261 23.4464 19.8257 22.9031V22.5451C19.8257 22.2707 19.7638 21.9991 19.6434 21.746C19.523 21.4928 19.3466 21.2632 19.1244 21.0705L18.2685 20.3759C17.9779 20.1403 17.6245 19.9727 17.2409 19.8885C16.8573 19.8043 16.4558 19.8063 16.0733 19.8943C15.4702 20.0326 14.8363 20.0299 14.2347 19.8865C13.633 19.7431 13.0845 19.4639 12.6436 19.0767L6.35066 13.5459C2.61746 10.2652 1.24366 5.31113 3.87708 3.01892Z"
              stroke="#FD9B00" stroke-width="3" stroke-linejoin="round" />
            <path
              d="M29.107 2L23.4166 7.00065C22.9788 7.38537 22.6314 7.84213 22.3944 8.34484C22.1574 8.84754 22.0355 9.38635 22.0355 9.93049V10.8924C22.0355 11.0285 22.005 11.1633 21.9457 11.289C21.8864 11.4148 21.7995 11.529 21.69 11.6252L20.8569 12.3573M23.2141 14.4288L24.0472 13.6967C24.1567 13.6004 24.2866 13.524 24.4297 13.4719C24.5728 13.4199 24.7262 13.3931 24.881 13.3931H25.9757C26.5948 13.3931 27.208 13.2859 27.78 13.0776C28.3521 12.8694 28.8718 12.5641 29.3096 12.1793L35 7.17867M32.0535 4.58934L26.1605 9.76801M14.3746 23.7504L7.02902 30.2419C6.47647 30.7273 5.72716 31 4.94586 31C4.16455 31 3.41524 30.7273 2.86269 30.2419C2.31031 29.7563 2 29.0978 2 28.4112C2 27.7246 2.31031 27.0661 2.86269 26.5806L9.07093 21.1611"
              stroke="#FD9B00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div>
          <h5 class="text-main-page mb-1 font-bold">Restaurant</h5>
          <p class="text-dark-blue-page text-justify text-sm leading-5">
            Cicipi hidangan lezat di restoran kami yang menggugah selera.
          </p>
        </div>
      </div>

      {{-- best view --}}
      <div class="flex items-center gap-3 px-5 py-4 align-middle hover:bg-gray-100">
        <div class="max-w-[38px]">
          <svg width="100%" height="100%" viewBox="0 0 35 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M17.5 0C28.4375 0 35 11.5 35 11.5C35 11.5 28.4375 23 17.5 23C6.5625 23 0 11.5 0 11.5C0 11.5 6.5625 0 17.5 0ZM17.5 2.09091C9.8 2.09091 4.37063 8.88845 2.57031 11.5C4.36844 14.1095 9.79781 20.9091 17.5 20.9091C25.2 20.9091 30.6294 14.1115 32.4297 11.5C30.6316 8.89054 25.2022 2.09091 17.5 2.09091ZM17.5 4.18182C19.5306 4.18182 21.478 4.95284 22.9138 6.32526C24.3496 7.69769 25.1562 9.5591 25.1562 11.5C25.1562 13.4409 24.3496 15.3023 22.9138 16.6747C21.478 18.0472 19.5306 18.8182 17.5 18.8182C15.4694 18.8182 13.522 18.0472 12.0862 16.6747C10.6504 15.3023 9.84375 13.4409 9.84375 11.5C9.84375 9.5591 10.6504 7.69769 12.0862 6.32526C13.522 4.95284 15.4694 4.18182 17.5 4.18182ZM17.5 6.27273C16.0501 6.27437 14.6601 6.82563 13.6349 7.80557C12.6097 8.78552 12.033 10.1141 12.0312 11.5C12.0312 14.3813 14.4834 16.7273 17.5 16.7273C20.5166 16.7273 22.9688 14.3813 22.9688 11.5C22.9688 8.61873 20.5166 6.27273 17.5 6.27273Z"
              fill="#FD9B00" />
          </svg>
        </div>
        <div>
          <h5 class="text-main-page mb-1 font-bold">Best View</h5>
          <p class="text-dark-blue-page text-justify text-sm leading-5">
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
      <p class="my-11 text-center text-gray-500">
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
      class="mt-16 grid auto-cols-[80%] grid-flow-col gap-6 overflow-x-auto rounded-md pb-12 md:auto-cols-[40%] lg:auto-cols-[6.81%] lg:px-0">
      <x-card title="Camp Ground" src="{{ URL::to('/img/campervan2.jpeg') }}"
        desc="Agrowisata Kuncen memberikan kesempatan untuk berkemah dalam suasana alam yang menenangkan dan menyegarkan." />
      <x-card title="Restaurant" src="{{ URL::to('/img/resto.jpeg') }}"
        desc="Agrowisata Kuncen menyuguhkan pengalaman kuliner yang autentik dengan hidangan istimewa dari dapur lokalnya." />
      <x-card title="Best View" src="{{ URL::to('/img/view.png') }}"
        desc="Agrowisata Kuncen menawarkan pemandangan yang memukau, menyuguhkan keindahan alam yang tak terlupakan." />
      <x-card title="Acara Pramuka" src="{{ URL::to('/img/acara-pramuka.jpeg') }}"
        desc="Agrowisata Kuncen menyediakan petualangan pramuka untuk anak-anak dengan panduan ahli di alam terbuka." />
      <x-card title="Fun Outbond" src="{{ URL::to('/img/outbond2.png') }}"
        desc="Agrowisata Kuncen menyediakan petualangan seru dengan permainan dan tantangan di alam terbuka." />
      <x-card title="Wedding" src="{{ URL::to('/img/wedding.png') }}"
        desc="Agrowisata Kuncen menyediakan pesta pernikahan yang tak terlupakan di tengah pemandangan alam yang indah." />
    </div>
  </div>

  {{-- content ketiga --}}
  <div class="container mx-auto mb-12 px-10">
    <div class="mt-12 rounded-lg text-center shadow-2xl" x-data="{ open: 'camp_ground' }">
      <div class="bg-main-page mt-8 inline-block rounded-3xl px-9 py-4">
        <h2 class="text-xl font-semibold text-white lg:text-4xl">OUR PRICES</h2>
      </div>
      <div class="my-9 text-center">
        <a :class="open == 'camp_ground' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'camp_ground'">Camp Ground</a>
        <span class="mx-3 font-semibold text-gray-500">|</span>
        <a :class="open == 'menu_makanan' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'menu_makanan'">Menu Makanan</a>
        <span class="mx-3 hidden font-semibold text-gray-500 sm:inline">|</span>
        <br class="sm:hidden">
        <a :class="open == 'peta_lokasi' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'peta_lokasi'">Peta Lokasi</a>
        <span class="mx-3 font-semibold text-gray-500">|</span>
        <a :class="open == 'sewa_peralatan' ? 'text-main-page' : ''" class="cursor-pointer font-semibold text-gray-500"
          @click="open = 'sewa_peralatan'">Sewa Peralatan</a>
      </div>
      {{-- camp ground --}}
      <div class="" x-show="open == 'camp_ground'">
        <div
          class="col-span-12 grid auto-cols-max grid-flow-col gap-5 overflow-x-auto rounded-lg px-10 pb-10 md:grid-flow-row md:grid-cols-2 xl:grid-cols-4">
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
  <div class="container mx-auto mb-11 px-10">
    <h2 class="text-dark-blue-page my-11 text-center text-xl font-bold"> LEBIH DEKAT DENGAN KITA KUNCEN <span
        class="text-main-page">ISI PESANMU
        SEKARANG</span></h2>
    <div class="grid grid-cols-8 grid-rows-4 gap-6">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.129413678298!2d110.45435297476135!3d-7.339360692669203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a79e1f8801581%3A0x5f221d6b1eb55bf6!2sKuncen%20Camp%20Ground!5e0!3m2!1sen!2sid!4v1717669442033!5m2!1sen!2sid"
        style="border: 0" allowfullscreen="" loading="lazy" width="100%" height="100%"
        referrerpolicy="no-referrer-when-downgrade"
        class="col-span-8 row-span-1 rounded-md lg:col-span-5 lg:row-span-4 xl:row-span-3">
      </iframe>

      {{-- form --}}
      <div class="col-span-8 row-span-2 p-9 shadow-xl lg:col-span-3 lg:row-span-4">
        <form action="" class="flex flex-col gap-5">
          <div>
            <label for="nama" class="mb-2">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama"
              class="h-10 w-full rounded-md border-none bg-gray-100 ps-4" />
          </div>
          <div>
            <label for="email">Email anda</label>
            <input type="text" name="email" placeholder="Email"
              class="h-10 w-full rounded-md border-none bg-gray-100 ps-4" />
          </div>
          <div>
            <label for="subjek">Subjek</label>
            <input type="text" name="subjek" placeholder="Subjek"
              class="h-10 w-full rounded-md border-none bg-gray-100 ps-4" />
          </div>
          <div>
            <label for="pesan">Pesan</label>
            <textarea name="pesan" class="h-32 w-full resize-none rounded-md border-none bg-gray-100 ps-4 pt-4 lg:h-52"
              placeholder="Pesan anda"></textarea>
          </div>
          <x-primary-button class="w-fit">Kirim Pesan</x-primary-button>
        </form>
      </div>

      {{-- no telp & email small --}}
      <div
        class="col-span-8 flex flex-col items-center justify-center gap-6 rounded-md p-9 text-center shadow-xl lg:flex-row lg:justify-around lg:text-start xl:hidden">
        <div class="flex flex-col items-center gap-2 lg:flex-row">
          <div class="w-[50px]">
            <svg width="100%" height="100%" viewBox="0 0 50 54" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M48.9546 26.4989C48.8902 19.4714 46.2956 12.7547 41.7412 7.82579C37.1869 2.89687 31.0456 0.159226 24.6678 0.214807L24.7153 5.51459C28.5201 5.48155 32.2504 6.69185 35.435 8.99258C38.6195 11.2933 41.1154 14.5812 42.6074 18.441C43.5975 21.0047 44.1199 23.7574 44.1447 26.5418L48.9546 26.4989ZM0.808927 21.6288L0.690048 8.37937C0.683743 7.67657 0.931068 7.0003 1.37762 6.49932C1.82416 5.99834 2.43336 5.71369 3.07118 5.70799L15.0957 5.60055C15.7335 5.59485 16.3477 5.86857 16.8032 6.36149C17.2586 6.85441 17.5181 7.52616 17.5244 8.22895L17.6195 18.8285C17.6258 19.5313 17.3785 20.2076 16.9319 20.7086C16.4854 21.2096 15.8762 21.4942 15.2383 21.4999L10.4285 21.5429C10.479 27.1653 12.5544 32.5392 16.1981 36.4826C19.8418 40.426 24.7554 42.6157 29.858 42.5701L29.8104 37.2703C29.8041 36.5675 30.0514 35.8913 30.498 35.3903C30.9445 34.8893 31.5537 34.6047 32.1916 34.599L41.8112 34.513C42.449 34.5073 43.0632 34.781 43.5187 35.274C43.9741 35.7669 44.2335 36.4386 44.2398 37.1414L44.3587 50.3909C44.365 51.0937 44.1177 51.77 43.6712 52.2709C43.2246 52.7719 42.6154 53.0566 41.9776 53.0623L29.9531 53.1697C14.0158 53.3121 0.966489 39.1897 0.808927 21.6288Z"
                fill="#FD9B00" />
              <path
                d="M38.1813 20.5106C38.9246 22.4327 39.3166 24.4969 39.3349 26.5849L35.0061 26.6236C34.9933 25.1619 34.7193 23.7168 34.1997 22.3709C33.6801 21.025 32.9251 19.8046 31.9778 18.7794C31.0305 17.7543 29.9096 16.9444 28.679 16.3962C27.4483 15.848 26.1322 15.5721 24.8057 15.5843L24.7629 10.8145C27.6166 10.7891 30.4147 11.6968 32.8031 13.4227C35.1916 15.1486 37.0632 17.6151 38.1813 20.5106Z"
                fill="#FD9B00" />
            </svg>
          </div>
          <div class="text-dark-blue-page">
            <p class="font-bold leading-none lg:text-lg">0813-5860-3314</p>
            <p>Nomor Telepon</p>
          </div>
        </div>
        <div class="flex flex-col items-center gap-2 lg:flex-row">
          <div class="w-[50px]">
            <svg width="100%" height="100%" viewBox="0 0 58 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M51.4722 0.501699L6.57889 0.501491C3.49247 0.501477 0.995295 3.14521 0.99531 6.37646L0.967416 41.6265C0.967431 44.8577 3.49269 47.5015 6.57911 47.5015L51.4724 47.5017C54.5589 47.5017 57.0841 44.858 57.0841 41.6267L57.0839 6.37673C57.0839 3.14548 54.5586 0.501714 51.4722 0.501699ZM51.4723 12.2517L29.0257 26.9391L6.57895 12.2515L6.57892 6.37649L29.0257 21.0641L51.4723 6.3767L51.4723 12.2517Z"
                fill="#FD9B00" />
            </svg>
          </div>
          <div class="text-dark-blue-page">
            <p class="font-bold leading-none lg:text-lg">buiesnessinquiermenst@gmail.com</p>
            <p>Buisness Email</p>
          </div>
        </div>
      </div>

      {{-- no telp --}}
      <div class="col-span-2 col-start-1 hidden items-center gap-5 rounded-md p-9 shadow-xl xl:flex">
        <div class="w-[50px]">
          <svg width="100%" height="100%" viewBox="0 0 50 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M48.9546 26.4989C48.8902 19.4714 46.2956 12.7547 41.7412 7.82579C37.1869 2.89687 31.0456 0.159226 24.6678 0.214807L24.7153 5.51459C28.5201 5.48155 32.2504 6.69185 35.435 8.99258C38.6195 11.2933 41.1154 14.5812 42.6074 18.441C43.5975 21.0047 44.1199 23.7574 44.1447 26.5418L48.9546 26.4989ZM0.808927 21.6288L0.690048 8.37937C0.683743 7.67657 0.931068 7.0003 1.37762 6.49932C1.82416 5.99834 2.43336 5.71369 3.07118 5.70799L15.0957 5.60055C15.7335 5.59485 16.3477 5.86857 16.8032 6.36149C17.2586 6.85441 17.5181 7.52616 17.5244 8.22895L17.6195 18.8285C17.6258 19.5313 17.3785 20.2076 16.9319 20.7086C16.4854 21.2096 15.8762 21.4942 15.2383 21.4999L10.4285 21.5429C10.479 27.1653 12.5544 32.5392 16.1981 36.4826C19.8418 40.426 24.7554 42.6157 29.858 42.5701L29.8104 37.2703C29.8041 36.5675 30.0514 35.8913 30.498 35.3903C30.9445 34.8893 31.5537 34.6047 32.1916 34.599L41.8112 34.513C42.449 34.5073 43.0632 34.781 43.5187 35.274C43.9741 35.7669 44.2335 36.4386 44.2398 37.1414L44.3587 50.3909C44.365 51.0937 44.1177 51.77 43.6712 52.2709C43.2246 52.7719 42.6154 53.0566 41.9776 53.0623L29.9531 53.1697C14.0158 53.3121 0.966489 39.1897 0.808927 21.6288Z"
              fill="#FD9B00" />
            <path
              d="M38.1813 20.5106C38.9246 22.4327 39.3166 24.4969 39.3349 26.5849L35.0061 26.6236C34.9933 25.1619 34.7193 23.7168 34.1997 22.3709C33.6801 21.025 32.9251 19.8046 31.9778 18.7794C31.0305 17.7543 29.9096 16.9444 28.679 16.3962C27.4483 15.848 26.1322 15.5721 24.8057 15.5843L24.7629 10.8145C27.6166 10.7891 30.4147 11.6968 32.8031 13.4227C35.1916 15.1486 37.0632 17.6151 38.1813 20.5106Z"
              fill="#FD9B00" />
          </svg>
        </div>
        <div class="text-dark-blue-page">
          <p class="text-lg font-bold leading-none">0813-5860-3314</p>
          <p>Nomor Telepon</p>
        </div>
      </div>

      {{-- email --}}
      <div class="col-span-3 hidden items-center gap-5 rounded-md p-9 shadow-xl xl:flex">
        <div class="hidden w-[50px] xl:block">
          <svg width="100%" height="100%" viewBox="0 0 58 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M51.4722 0.501699L6.57889 0.501491C3.49247 0.501477 0.995295 3.14521 0.99531 6.37646L0.967416 41.6265C0.967431 44.8577 3.49269 47.5015 6.57911 47.5015L51.4724 47.5017C54.5589 47.5017 57.0841 44.858 57.0841 41.6267L57.0839 6.37673C57.0839 3.14548 54.5586 0.501714 51.4722 0.501699ZM51.4723 12.2517L29.0257 26.9391L6.57895 12.2515L6.57892 6.37649L29.0257 21.0641L51.4723 6.3767L51.4723 12.2517Z"
              fill="#FD9B00" />
          </svg>
        </div>
        <div class="text-dark-blue-page">
          <p class="text-pretty font-bold leading-none lg:text-lg">buiesnessinquiermenst@gmail.com</p>
          <p>Buisness Email</p>
        </div>
      </div>

    </div>
  </div>

  {{-- content kelima --}}
  <div class="container mx-auto mb-20 px-10" x-data="{ open: 'slide1' }">
    <h2 class="text-dark-blue-page text-center text-2xl font-bold">OUR GALLERY</h2>
    <div class="slideshow-container mt-10 grid grid-cols-12 grid-rows-[270px_270px] gap-2 overflow-hidden lg:gap-5"
      x-show="open == 'slide1'">
      <div class="col-span-12 md:col-span-8">
        <img src="{{ URL::to('/img/Bg.png') }}" alt="" class="h-full w-full rounded-md object-cover">
      </div>
      <div class="col-span-4 hidden md:block">
        <img src="{{ URL::to('/img/view.png') }}" alt="" class="h-full w-full rounded-md object-cover">
      </div>
      <div class="col-span-6 md:col-span-4">
        <img src="{{ URL::to('/img/normal1.png') }}" alt="" class="h-full w-full rounded-md object-cover">
      </div>
      <div class="col-span-6 md:col-span-4">
        <img src="{{ URL::to('/img/normal3.png') }}" alt="" class="h-full w-full rounded-md object-cover">
      </div>
      <div class="col-span-4 hidden md:block">
        <img src="{{ URL::to('/img/normal2.png') }}" alt="" class="h-full w-full rounded-md object-cover">
      </div>
    </div>

    <div class="slideshow-container mt-10 grid grid-cols-12 grid-rows-[270px_270px] gap-2 overflow-hidden lg:gap-5"
      x-show="open == 'slide2'">
      <div class="col-span-12 md:col-span-8">
        <img src="{{ URL::to('/img/campervan2.jpeg') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4 hidden md:block">
        <img src="{{ URL::to('/img/wedding.png') }}" alt="" class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-6 md:col-span-4">
        <img src="{{ URL::to('/img/panorama-tentang1.jpg') }}" alt=""
          class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-6 md:col-span-4">
        <img src="{{ URL::to('/img/rumah-kayu-segitiga.jpeg') }}" alt=""
          class="h-full w-full rounded-lg object-cover">
      </div>
      <div class="col-span-4 hidden md:block">
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
  <div class="container mx-auto mb-10 flex items-end justify-between px-10">
    <h2 class="text-2xl font-bold">Pengumuman</h2>
    <a href="{{ route('berita_posts') }}" class="text-main-page font-bold">Lihat berita lainnya</a>
  </div>
  <div
    class="no-scrollbar container mx-auto grid auto-cols-[80%] grid-flow-col gap-5 overflow-x-auto rounded-md px-10 pb-20 sm:auto-cols-max xl:auto-cols-auto">
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
