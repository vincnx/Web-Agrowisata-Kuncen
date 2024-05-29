<nav x-data="{ open: false }"
  class="sticky top-0 z-10 border-gray-100 bg-white py-2 shadow-xl dark:border-gray-700 dark:bg-gray-800 md:px-0">
  <!-- Primary Navigation Menu -->
  <div class="mx-auto flex justify-between px-10 sm:container">
    <div class="flex">
      <!-- Logo -->
      <a href="{{ route('beranda') }}" class="flex items-center">
        <img src="{{ URL::to('/img/RemoveBGLogo.png') }}" alt="" class="max-w-16 xs:max-w-20">
        <p class="hidden leading-none xs:block">AGROWISATA<br><span class="font-bold">KUNCEN POLOBOGO</span><br><span
            class="text-xs font-light italic leading-6">Come Here to Believe it</span></p>
      </a>

      <!-- Navigation Links -->
      <div class="hidden space-x-2 md:-my-px md:flex lg:ms-10 lg:space-x-4">
        <x-nav-link :href="route('beranda')" :active="request()->routeIs('beranda*')">
          {{ __('Beranda') }}
        </x-nav-link>
        <x-nav-link :href="route('tentang')" :active="request()->routeIs('tentang*')">
          {{ __('Tentang') }}
        </x-nav-link>
        <x-nav-link :href="route('berita_posts')" :active="request()->routeIs('berita*')">
          {{ __('Berita') }}
        </x-nav-link>
        <x-nav-link :href="route('fasilitas')" :active="request()->routeIs('fasilitas*')">
          {{ __('Fasilitas') }}
        </x-nav-link>
        @if (Auth::user() && Auth::user()->is_admin)
          <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin*')">
            {{ __('dashboard') }}
          </x-nav-link>
        @endif
      </div>
    </div>

    <!-- Settings Dropdown -->
    <div class="ms-auto hidden md:ms-6 md:flex md:items-center">
      @if (Auth::user())
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button
              class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none dark:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-300">
              <div>{{ Auth::user()->name }}</div>

              <div class="ms-1">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
              {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                          this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      @else
        <a href="{{ route('login') }}"
          class="rounded-md px-3 py-2 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
          Masuk
        </a>
        @if (Route::has('register'))
          <a href="{{ route('register') }}"
            class="bg-green-page rounded-full px-5 py-2 text-sm text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Daftar
          </a>
        @endif
      @endif
    </div>

    <!-- Hamburger -->
    <div class="-me-2 flex items-center md:hidden">
      <button
        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-900 dark:hover:text-gray-400 dark:focus:bg-gray-900 dark:focus:text-gray-400"
        @click="open = ! open">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
    <div class="space-y-1 pb-3 pt-2">
      <x-responsive-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
        {{ __('Beranda') }}
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('tentang')" :active="request()->routeIs('tentang')">
        {{ __('Tentang') }}
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('berita_posts')" :active="request()->routeIs('berita')">
        {{ __('Berita') }}
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('fasilitas')" :active="request()->routeIs('fasilitas')">
        {{ __('Fasilitas') }}
      </x-responsive-nav-link>
      @if (Auth::user() && Auth::user()->is_admin)
        <x-responsive-nav-link :href="route('admin.index')" :active="request()->routeIs('admin*')">
          {{ __('Dashboard') }}
        </x-responsive-nav-link>
      @endif
    </div>

    <!-- Responsive Settings Options -->
    @if (Auth::user())
      <div class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600">
        <div class="px-4">
          <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
          <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
        </div>
        <div class="mt-3 space-y-1">
          <x-responsive-nav-link :href="route('profile.edit')">
            {{ __('Profile') }}
          </x-responsive-nav-link>
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
              onclick="event.preventDefault();
                                        this.closest('form').submit();">
              {{ __('Log Out') }}
            </x-responsive-nav-link>
          </form>
        </div>
      </div>
    @else
      <div class="border-t border-gray-200 pb-1 pt-2 dark:border-gray-600">
        <div class="px-3">
          <a href="{{ route('login') }}"
            class="block rounded-md py-2 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Masuk
          </a>
          <a href="{{ route('login') }}"
            class="block rounded-md py-2 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Daftar
          </a>
        </div>
      </div>
    @endif
  </div>
</nav>
