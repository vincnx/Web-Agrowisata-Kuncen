<x-auth-layout>
  <div
    class="flex min-h-screen bg-black/25 bg-[url('/public/img/rumah-kayu-segitiga.jpeg')] bg-cover bg-center bg-blend-multiply">
    {{-- card --}}
    <div class="container m-auto flex w-full px-16">
      <div class="grid w-full grid-cols-12 rounded-lg bg-white shadow-2xl">
        {{-- gambar --}}
        <div
          class="col-span-6 hidden content-end rounded-l-lg rounded-br-[150px] bg-[url('/public/img/rumah-kayu-segitiga.jpeg')] bg-cover bg-center p-6 pe-10 shadow-xl md:block lg:rounded-br-[200px] xl:aspect-square xl:pe-14">
          <h1 class="text-base font-semibold text-white lg:text-lg">BERWISATA DI AGROWISATA KUNCEN<br>RASAKAN
            KESENANGANNYA DAN
            EKSPLOR SEKARANG</h1>
          <p class="text-xs font-light text-white">Menyelami Keindahan Alam di Agrowisata Kuncen: Sebuah Petualangan
            yang Menginspirasi</p>
        </div>

        {{-- user input --}}
        <div class="col-span-12 content-center p-6 md:col-span-6 lg:py-20">
          {{-- logo --}}
          <a href="{{ route('beranda') }}" class="flex items-center">
            <img src="{{ URL::to('/img/RemoveBGLogo.png') }}" alt="" class="max-w-20">
            <p class="leading-none">AGROWISATA<br><span class="font-bold">KUNCEN POLOBOGO</span></p>
          </a>
          {{-- greeting --}}
          <div class="my-3">
            <h2 class="text-lg font-semibold">Selamat Datang</h2>
            <p class="text-sm">Silahkan masukkan data anda</p>
          </div>
          {{-- form --}}
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" class="mt-1 block w-full p-1 ps-2" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-3">
              <x-input-label for="password" :value="__('Password')" />
              <x-text-input id="password" class="mt-1 block w-full p-1 ps-2" type="password" name="password" required
                autocomplete="current-password" />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-3 flex items-center justify-end">
              <x-primary-button class="ms-4">
                {{ __('Masuk') }}
              </x-primary-button>
            </div>
          </form>

        </div>

      </div>
    </div>
  </div>
</x-auth-layout>

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
