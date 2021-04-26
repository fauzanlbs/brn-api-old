@foreach ($breadcrumbs as $key => $b)
    <svg class="flex-shrink-0 w-4 h-4 mx-1 text-white" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
    </svg>
    <a href="{{ $b['url'] }}"
        class="text-xs font-bold text-white transition duration-150 ease-in-out focus:outline-none hover:text-blue-100">
        {{ $b['text'] }}
    </a>
@endforeach
