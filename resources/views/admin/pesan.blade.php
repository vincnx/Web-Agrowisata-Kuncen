@extends('layouts.admin-dashboard')

@section('content')
<div class="flex flex-col mx-auto max-w-7xl h-full sm:px-6 lg:px-8">
  {{-- table --}}
  <div class="col-span-6 h-fit">
    <div class="overflow-x-auto rounded-lg shadow-md">
      <table class="w-full text-left text-sm text-gray-500 rtl:text-right">
        <thead class="bg-main-page text-dark-blue-page text-xs uppercase">
          <tr>
            <th scope="col" class="px-6 py-3">
              Subjek
            </th>
            <th scope="col" class="px-6 py-3 text-center">
              Pesan
            </th>
            <th scope="col" class="px-6 py-3">
              Oleh
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($messages as $message)
            <tr
              class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
              {{-- subjek --}}
              <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                {{ $message->subjek }}
              </td>
              {{-- isi --}}
              <td class="px-6 py-4 text-center">
                {{ Str::limit(strip_tags($message->pesan), 20, '...') }}
              </td>
              {{-- data diri --}}
              <td class="px-6 py-4">
                <p>{{ Str::words(strip_tags($message->nama), 3, '...') }}</p>
                <p>{{ $message->email }}</p>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  {{-- whitespace --}}
  <div class="flex-grow mb-5"></div>

  {{-- paginate links --}}
  {{ $messages->links() }}
</div>

@endsection
