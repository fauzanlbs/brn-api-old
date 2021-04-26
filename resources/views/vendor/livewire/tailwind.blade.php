<div class="mt-5">
    @if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 ">
            <span>
                @if ($paginator->onFirstPage())
                <div class="items-center justify-center hidden w-10 h-10 p-2 mr-1 text-gray-400 bg-white rounded-md shadow-md cursor-pointer md:flex lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
                <div class="flex items-center justify-center h-10 p-2 mr-1 text-gray-400 bg-white rounded-md shadow-md cursor-pointer w-30 md:hidden lg:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    <span class="mr-2">Sebelumnya</span>
                </div>
                @else
                <button wire:click="previousPage" class="items-center justify-center hidden w-10 h-10 p-2 mr-1 text-gray-600 bg-white rounded-md shadow-md md:flex lg:hidden focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button wire:click="previousPage" class="flex items-center justify-center h-10 p-2 mr-1 text-gray-600 bg-white rounded-md shadow-md w-30 md:hidden lg:flex focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    <span class="mr-2">Sebelumnya</span>
                </button>
                @endif
            </span>

            <div class="flex h-10 font-medium bg-white rounded-full shadow-md">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)

                @if (is_string($element))
                <div class="items-center justify-center hidden w-6 leading-5 transition duration-150 ease-in rounded-full cursor-pointer md:flex ">
                    ...</div>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <div class="items-center justify-center hidden w-10 leading-5 text-white transition duration-150 ease-in rounded-full cursor-pointer md:flex bg-gradient-to-t from-blue-500 to-blue-600">
                    <span wire:loading.class='hidden'>{{$page}}</span>
                    <div wire:loading class='la-ball-clip-rotate-pulse la-sm'>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                @else
                <button wire:click="gotoPage({{$page}})" class="items-center justify-center hidden w-10 leading-5 text-gray-600 transition duration-150 ease-in bg-white rounded-full cursor-pointer md:flex focus:outline-none">{{ $page }}</button>
                @endif
                @endforeach
                @endif
                @endforeach
            </div>


            <span>
                @if ($paginator->hasMorePages())
                <button wire:click="nextPage" class="flex items-center justify-center h-10 p-2 ml-1 text-gray-600 bg-white rounded-md shadow-md cursor-pointer w-30 md:hidden lg:flex focus:outline-none">
                    <span class="ml-2">Selanjutnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
                <button wire:click="nextPage" class="items-center justify-center hidden w-10 h-10 p-2 ml-1 text-gray-600 bg-white rounded-md shadow-md cursor-pointer md:flex lg:hidden focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
                @else
                <div class="flex items-center justify-center h-10 p-2 ml-1 text-gray-400 bg-white rounded-md shadow-md cursor-pointer w-30 md:hidden lg:flex">
                    <span class="ml-2">Selanjutnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div class="items-center justify-center hidden w-10 h-10 p-2 ml-1 text-gray-400 bg-white rounded-md shadow-md cursor-pointer md:flex lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-5 feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>

                @endif
            </span>
        </div>
    </nav>
    @endif
</div>
