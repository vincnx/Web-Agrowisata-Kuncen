@extends('layouts.admin-dashboard')

@section('content')
  <div class="mx-auto flex h-full max-w-7xl flex-col sm:px-6 lg:px-8">

    {{-- button --}}
    <a href="{{ route('admin.paket-camping.create') }}">
      <x-primary-button class="mb-5 justify-end">
        {{ __('Tambah Paket') }}
      </x-primary-button>
    </a>

    {{-- table --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Nama Paket
            </th>
            <th scope="col" class="px-6 py-3 text-center">
              Harga
            </th>
            <th scope="col" class="px-6 py-3">
              Fasilitas
            </th>
            <th scope="col" class="px-6 py-3">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($packages as $package)
            <tr
              class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
              {{-- nama --}}
              <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                {{ $package->nama }}
              </td>
              {{-- harga --}}
              <td class="px-6 py-4 text-center">
                {{ $package->harga }}
              </td>
              {{-- fasilitas --}}
              <td class="px-6 py-4">
                <p>
                  @php
                    $facilities = [];
                    if ($package->tenda) {
                        $facilities[] = 'Tenda';
                    }
                    if ($package->matras) {
                        $facilities[] = 'Matras';
                    }
                    if ($package->sleeping_bag) {
                        $facilities[] = 'Sleeping Bag';
                    }
                    if ($package->kayu_bakar) {
                        $facilities[] = 'Kayu Bakar';
                    }
                    if ($package->alat_masak) {
                        $facilities[] = 'Alat Masak';
                    }
                    echo implode(', ', $facilities);
                  @endphp
                </p>
              </td>
              {{-- aksi --}}
              <td class="px-6 py-4">
                <a href="{{ route('admin.paket-camping.edit', $package->id) }}"
                  class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                <form action="{{ route('admin.paket-camping.destroy', $package->id) }}" method="POST"
                  onsubmit="return confirm('Are you sure?')">
                  @csrf
                  @method('delete')
                  <button type="submit"
                    class="font-medium text-red-600 hover:underline dark:text-blue-500">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach

        </tbody>
        <td>

        </td>
      </table>
    </div>

    {{-- whitespace --}}
    <div class="mb-5 flex-grow"></div>

    {{-- paginate links --}}
    {{-- {{ $posts->links() }} --}}
  </div>
@endsection
