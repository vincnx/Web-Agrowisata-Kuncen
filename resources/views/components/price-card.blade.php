@props(['data'])

<div {{ $attributes->merge(['class' => 'rounded-lg shadow-xl min-w-fit dark:bg-gray-800']) }}>
  <div class="bg-main-page rounded-t-lg py-4 shadow-lg">
    <h3 class="text-xl font-semibold text-white">{{ $data->nama }}</h3>
  </div>
  <div class="flex align-top px-7 py-5 justify-center">
    <h3 class="text-dark-blue-page font-semibold">Rp</h3>
    <h3 class="text-dark-blue-page font-bold text-5xl">{{ $data->harga/1000 }}K</h3>
  </div>
  <div class="h-[2px] bg-dark-blue-page w-full mb-5"></div>
  <div class="mx-auto w-fit p-10 pt-0 text-left">
    <ul>
      {{-- tenda --}}
      <li class="mb-5 flex basis-auto items-center">
        @if ($data->tenda)
          <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="29" height="29" rx="14.5" fill="#2E475D" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M6 14.5L8.125 12.3333L12.375 16.6667L20.875 8L23 10.1667L12.375 21L6 14.5Z" fill="white" />
          </svg>
        @else
          <svg width="29" height="29" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="32.0121" height="32" rx="16" fill="#9F9F9F" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M10.2928 10.3053C10.4803 10.1178 10.7346 10.0125 10.9998 10.0125C11.265 10.0125 11.5193 10.1178 11.7068 10.3053L15.9998 14.5983L20.2928 10.3053C20.385 10.2098 20.4954 10.1336 20.6174 10.0812C20.7394 10.0288 20.8706 10.0012 21.0034 10C21.1362 9.99888 21.2678 10.0242 21.3907 10.0745C21.5136 10.1247 21.6253 10.199 21.7192 10.2929C21.8131 10.3868 21.8873 10.4984 21.9376 10.6213C21.9879 10.7442 22.0132 10.8759 22.012 11.0087C22.0109 11.1415 21.9833 11.2727 21.9309 11.3947C21.8785 11.5167 21.8023 11.627 21.7068 11.7193L17.4138 16.0123L21.7068 20.3053C21.8889 20.4939 21.9897 20.7465 21.9875 21.0087C21.9852 21.2709 21.88 21.5217 21.6946 21.7071C21.5092 21.8925 21.2584 21.9977 20.9962 22C20.734 22.0022 20.4814 21.9014 20.2928 21.7193L15.9998 17.4263L11.7068 21.7193C11.5182 21.9014 11.2656 22.0022 11.0034 22C10.7412 21.9977 10.4904 21.8925 10.305 21.7071C10.1196 21.5217 10.0144 21.2709 10.0121 21.0087C10.0098 20.7465 10.1106 20.4939 10.2928 20.3053L14.5858 16.0123L10.2928 11.7193C10.1053 11.5318 10 11.2775 10 11.0123C10 10.7471 10.1053 10.4928 10.2928 10.3053Z"
              fill="white" />
          </svg>
        @endif
        <div class="ms-3 w-fit">
          <p class="font-semibold leading-none">Tenda Kapasitas 4-6 Orang</p>
          <p class="text-sm leading-none text-gray-500">Notes : Pasang & bongkar</p>
        </div>
      </li>

      {{-- matras --}}
      <li class="mb-5 flex items-center">
        @if ($data->matras)
          <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="29" height="29" rx="14.5" fill="#2E475D" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M6 14.5L8.125 12.3333L12.375 16.6667L20.875 8L23 10.1667L12.375 21L6 14.5Z" fill="white" />
          </svg>
        @else
          <svg width="29" height="29" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="32.0121" height="32" rx="16" fill="#9F9F9F" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M10.2928 10.3053C10.4803 10.1178 10.7346 10.0125 10.9998 10.0125C11.265 10.0125 11.5193 10.1178 11.7068 10.3053L15.9998 14.5983L20.2928 10.3053C20.385 10.2098 20.4954 10.1336 20.6174 10.0812C20.7394 10.0288 20.8706 10.0012 21.0034 10C21.1362 9.99888 21.2678 10.0242 21.3907 10.0745C21.5136 10.1247 21.6253 10.199 21.7192 10.2929C21.8131 10.3868 21.8873 10.4984 21.9376 10.6213C21.9879 10.7442 22.0132 10.8759 22.012 11.0087C22.0109 11.1415 21.9833 11.2727 21.9309 11.3947C21.8785 11.5167 21.8023 11.627 21.7068 11.7193L17.4138 16.0123L21.7068 20.3053C21.8889 20.4939 21.9897 20.7465 21.9875 21.0087C21.9852 21.2709 21.88 21.5217 21.6946 21.7071C21.5092 21.8925 21.2584 21.9977 20.9962 22C20.734 22.0022 20.4814 21.9014 20.2928 21.7193L15.9998 17.4263L11.7068 21.7193C11.5182 21.9014 11.2656 22.0022 11.0034 22C10.7412 21.9977 10.4904 21.8925 10.305 21.7071C10.1196 21.5217 10.0144 21.2709 10.0121 21.0087C10.0098 20.7465 10.1106 20.4939 10.2928 20.3053L14.5858 16.0123L10.2928 11.7193C10.1053 11.5318 10 11.2775 10 11.0123C10 10.7471 10.1053 10.4928 10.2928 10.3053Z"
              fill="white" />
          </svg>
        @endif
        <p class="ms-3 font-semibold leading-none">Matras</p>
      </li>

      {{-- sleeping bag --}}
      <li class="mb-5 flex items-center">
        @if ($data->sleeping_bag)
          <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="29" height="29" rx="14.5" fill="#2E475D" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M6 14.5L8.125 12.3333L12.375 16.6667L20.875 8L23 10.1667L12.375 21L6 14.5Z" fill="white" />
          </svg>
        @else
          <svg width="29" height="29" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="32.0121" height="32" rx="16" fill="#9F9F9F" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M10.2928 10.3053C10.4803 10.1178 10.7346 10.0125 10.9998 10.0125C11.265 10.0125 11.5193 10.1178 11.7068 10.3053L15.9998 14.5983L20.2928 10.3053C20.385 10.2098 20.4954 10.1336 20.6174 10.0812C20.7394 10.0288 20.8706 10.0012 21.0034 10C21.1362 9.99888 21.2678 10.0242 21.3907 10.0745C21.5136 10.1247 21.6253 10.199 21.7192 10.2929C21.8131 10.3868 21.8873 10.4984 21.9376 10.6213C21.9879 10.7442 22.0132 10.8759 22.012 11.0087C22.0109 11.1415 21.9833 11.2727 21.9309 11.3947C21.8785 11.5167 21.8023 11.627 21.7068 11.7193L17.4138 16.0123L21.7068 20.3053C21.8889 20.4939 21.9897 20.7465 21.9875 21.0087C21.9852 21.2709 21.88 21.5217 21.6946 21.7071C21.5092 21.8925 21.2584 21.9977 20.9962 22C20.734 22.0022 20.4814 21.9014 20.2928 21.7193L15.9998 17.4263L11.7068 21.7193C11.5182 21.9014 11.2656 22.0022 11.0034 22C10.7412 21.9977 10.4904 21.8925 10.305 21.7071C10.1196 21.5217 10.0144 21.2709 10.0121 21.0087C10.0098 20.7465 10.1106 20.4939 10.2928 20.3053L14.5858 16.0123L10.2928 11.7193C10.1053 11.5318 10 11.2775 10 11.0123C10 10.7471 10.1053 10.4928 10.2928 10.3053Z"
              fill="white" />
          </svg>
        @endif
        <p class="ms-3 font-semibold leading-none">Sleeping Bag</p>
      </li>

      {{-- kayu bakar --}}
      <li class="mb-5 flex items-center">
        @if ($data->kayu_bakar)
          <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="29" height="29" rx="14.5" fill="#2E475D" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M6 14.5L8.125 12.3333L12.375 16.6667L20.875 8L23 10.1667L12.375 21L6 14.5Z" fill="white" />
          </svg>
        @else
          <svg width="29" height="29" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="32.0121" height="32" rx="16" fill="#9F9F9F" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M10.2928 10.3053C10.4803 10.1178 10.7346 10.0125 10.9998 10.0125C11.265 10.0125 11.5193 10.1178 11.7068 10.3053L15.9998 14.5983L20.2928 10.3053C20.385 10.2098 20.4954 10.1336 20.6174 10.0812C20.7394 10.0288 20.8706 10.0012 21.0034 10C21.1362 9.99888 21.2678 10.0242 21.3907 10.0745C21.5136 10.1247 21.6253 10.199 21.7192 10.2929C21.8131 10.3868 21.8873 10.4984 21.9376 10.6213C21.9879 10.7442 22.0132 10.8759 22.012 11.0087C22.0109 11.1415 21.9833 11.2727 21.9309 11.3947C21.8785 11.5167 21.8023 11.627 21.7068 11.7193L17.4138 16.0123L21.7068 20.3053C21.8889 20.4939 21.9897 20.7465 21.9875 21.0087C21.9852 21.2709 21.88 21.5217 21.6946 21.7071C21.5092 21.8925 21.2584 21.9977 20.9962 22C20.734 22.0022 20.4814 21.9014 20.2928 21.7193L15.9998 17.4263L11.7068 21.7193C11.5182 21.9014 11.2656 22.0022 11.0034 22C10.7412 21.9977 10.4904 21.8925 10.305 21.7071C10.1196 21.5217 10.0144 21.2709 10.0121 21.0087C10.0098 20.7465 10.1106 20.4939 10.2928 20.3053L14.5858 16.0123L10.2928 11.7193C10.1053 11.5318 10 11.2775 10 11.0123C10 10.7471 10.1053 10.4928 10.2928 10.3053Z"
              fill="white" />
          </svg>
        @endif
        <p class="ms-3 font-semibold leading-none">Kayu Bakar</p>
      </li>

      {{-- alat masak --}}
      <li class="mb-5 flex items-center">
        @if ($data->alat_masak)
          <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="29" height="29" rx="14.5" fill="#2E475D" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M6 14.5L8.125 12.3333L12.375 16.6667L20.875 8L23 10.1667L12.375 21L6 14.5Z" fill="white" />
          </svg>
        @else
          <svg width="29" height="29" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="32.0121" height="32" rx="16" fill="#9F9F9F" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M10.2928 10.3053C10.4803 10.1178 10.7346 10.0125 10.9998 10.0125C11.265 10.0125 11.5193 10.1178 11.7068 10.3053L15.9998 14.5983L20.2928 10.3053C20.385 10.2098 20.4954 10.1336 20.6174 10.0812C20.7394 10.0288 20.8706 10.0012 21.0034 10C21.1362 9.99888 21.2678 10.0242 21.3907 10.0745C21.5136 10.1247 21.6253 10.199 21.7192 10.2929C21.8131 10.3868 21.8873 10.4984 21.9376 10.6213C21.9879 10.7442 22.0132 10.8759 22.012 11.0087C22.0109 11.1415 21.9833 11.2727 21.9309 11.3947C21.8785 11.5167 21.8023 11.627 21.7068 11.7193L17.4138 16.0123L21.7068 20.3053C21.8889 20.4939 21.9897 20.7465 21.9875 21.0087C21.9852 21.2709 21.88 21.5217 21.6946 21.7071C21.5092 21.8925 21.2584 21.9977 20.9962 22C20.734 22.0022 20.4814 21.9014 20.2928 21.7193L15.9998 17.4263L11.7068 21.7193C11.5182 21.9014 11.2656 22.0022 11.0034 22C10.7412 21.9977 10.4904 21.8925 10.305 21.7071C10.1196 21.5217 10.0144 21.2709 10.0121 21.0087C10.0098 20.7465 10.1106 20.4939 10.2928 20.3053L14.5858 16.0123L10.2928 11.7193C10.1053 11.5318 10 11.2775 10 11.0123C10 10.7471 10.1053 10.4928 10.2928 10.3053Z"
              fill="white" />
          </svg>
        @endif
        <p class="ms-3 font-semibold leading-none">Alat Masak</p>
      </li>
    </ul>
  </div>
</div>
