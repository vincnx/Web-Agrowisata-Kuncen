@props(['title', 'src', 'desc'])
<div
  {{ $attributes->merge(['class' => 'bg-white border border-gray-200 p-4 rounded-lg shadow shadow-xl dark:bg-gray-800 dark:border-gray-700 lg:col-span-3']) }}>
  {{-- image --}}
  <img class="aspect-square w-full rounded-lg object-cover" src="{{ $src }}" alt="" />
  
  {{-- description --}}
  <div class="text-center">
    <a href="#">
      <h5 class="text-green-page my-5 text-xl font-semibold dark:text-white">{{ $title }}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $desc }}</p>
  </div>
</div>
