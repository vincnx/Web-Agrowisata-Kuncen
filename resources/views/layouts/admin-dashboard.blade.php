<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  {{-- trix editor --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

  {{-- alpine --}}
  <script src="//unpkg.com/alpinejs" defer></script>
  
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <div class="w-full flex-col md:flex md:min-h-screen md:flex-row">
    <div
      class="flex w-full flex-shrink-0 flex-col bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-200 md:w-64"
      x-data="{ open: false }" @click.away="open = false">
      
      <div class="flex flex-shrink-0 flex-row items-center justify-between px-4 py-4">
        {{-- logo --}}
        <a href="{{ route('beranda') }}" class="flex items-center">
          <img src="{{ URL::to('/img/RemoveBGLogo.png') }}" alt="" class="max-w-14">
          <p class="leading-none text-sm">AGROWISATA<br><span class="font-bold">KUNCEN POLOBOGO</span><br><span class="text-xs font-light italic leading-none">Come Here to Believe it</span></p>
        </a>
        {{-- responsive toggle --}}
        <button class="focus:shadow-outline rounded-lg focus:outline-none md:hidden" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
            <path x-show="!open" fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <nav :class="{ 'block': open, 'hidden': !open }" class="flex-grow px-4 pb-4 md:block md:overflow-y-auto md:pb-0">
        <x-admin-nav-link :href="route('admin.berita.index')" :active="request()->routeIs('admin.berita*')">
          {{ __('Berita') }}
        </x-admin-nav-link>
        <x-admin-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
          {{ __('Menus') }}
        </x-admin-nav-link>
        <x-admin-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
          {{ __('Tables') }}
        </x-admin-nav-link>
        <x-admin-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
          {{ __('Reservations') }}
        </x-admin-nav-link>
        <div class="relative" x-data="{ open: false }" @click.away="open = false">
          <button
            class="focus:shadow-outline mt-2 flex w-full flex-row items-center rounded-lg bg-transparent px-4 py-2 text-left text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:block"
            @click="open = !open">
            <span>{{ Auth::user()->name }} </span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
              class="ml-1 mt-1 inline h-4 w-4 transform transition-transform duration-200 md:-mt-1">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute right-0 mt-2 w-full origin-top-right rounded-md shadow-lg">
            <div class="rounded-md bg-white px-2 py-2 shadow dark:bg-gray-700">
              <x-dropdown-link :href="route('profile.edit')"
                class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0">
                {{ __('Profile') }}
              </x-dropdown-link>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                                      this.closest('form').submit();"
                  class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <main class="m-2 p-8 w-full">
      @yield('content')
    </main>
  </div>
</body>
@yield('script')
</html>
