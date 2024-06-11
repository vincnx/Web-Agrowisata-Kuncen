@props(['src', 'judul', 'isi', 'waktu_upload', 'slug'])

<div
  {{ $attributes->merge(['class' => 'flex flex-col bg-white rounded-md w-full xl:max-w-full shadow-lg']) }}>
  {{-- image --}}
  <img class="aspect-square w-full object-cover rounded-t-md" src="{{ $src }}" alt="" />
  {{-- title & description --}}
  <div class="p-5">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-dark-blue-page dark:text-white">{{ $judul }}</h5>
    <p class="mb-3 font-normal text-dark-blue-page leading-5 text-justify">{{ $isi }}</p>
  </div>
  {{-- button & time --}}
  <div class="flex grow items-end justify-between p-5">
    <a href="{{ route('berita_post', $slug) }}">
      <x-primary-button>Lanjut Baca</x-primary-button>
    </a>
    <p class="ms-5 text-end text-gray-600 text-sm leading-none">{{ $waktu_upload }}</p>
  </div>
</div>
