<div x-data="{ open: false }" class="relative inline-block text-left" @click.away="open=false">
    <div @click="open = ! open" class="cursor-pointer">
        <button :class="{ 'text-blue-600 bg-blue-200': open }"
            class="text-gray-500 bg-gray-200 mx-0.5 px-2 py-1  rounded shadow focus:outline-none">
            <div x-show="open" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100">
                <x-heroicon-o-x class="inline w-4 h-4" />
            </div>
            <div x-show="!open" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100" style="display:none">
                <x-heroicon-o-menu-alt-3 class="inline w-4 h-4" />
            </div>
        </button>
    </div>
    <div t-cabc x-show="open" style="display:none" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform scale-x-0" x-transition:enter-end="origin-top transform scale-x-1"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-x-1"
        x-transition:leave-end="origin-top transform opacity-0 scale-x-0" @click="open = false"
        class="absolute top-0 z-50 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg right-10 dark:bg-gray-800 ring-1 ring-black ring-opacity-5">
        <div class="py-1 " role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            {{ $link ?? $slot }}
        </div>
    </div>
</div>
