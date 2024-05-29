@props(['src', 'judul', 'isi', 'waktu_upload', 'slug'])

<div
  {{ $attributes->merge(['class' => 'flex flex-col max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 xl:max-w-full']) }}>
  {{-- image --}}
  <div class="rounded-lg bg-cover bg-center" style="background-image: url('{{ $src }}')">
    <img class="invisible aspect-square rounded-lg" src="{{ $src }}" alt="" />
  </div>
  {{-- title & description --}}
  <div class="p-5">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $judul }}</h5>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $isi }}</p>
  </div>
  {{-- button & time --}}
  <div class="flex grow items-end justify-between p-5">
    <a href="{{ route('berita_post', $slug) }}"
      class="bg-green-page inline-flex items-center rounded-lg px-3 py-2 text-center text-sm font-medium leading-none text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:focus:ring-blue-800 min-[580px]:py-3">
      Read more
      <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M1 5h12m0 0L9 1m4 4L9 9" />
      </svg>
    </a>
    <p class="ms-5 text-end text-sm leading-none">{{ $waktu_upload }}</p>
  </div>
</div>
