<ul class="flex flex-wrap items-center list-none ">
    <div @click.away="open = false" x-data="{ open: false }">
        <li class="relative inline-block">
            <div class="p-2 mt-1" wire:loading>
                <x-loading.line-scale style=" color: #4299e1;height: 1.05rem" />
            </div>
            <button @click="open = !open" wire:loading.remove
                class="block p-2 text-gray-500 bg-gray-200 rounded shadow focus:outline-none">
                <svg :class="{'rotate-180': open, 'rotate-0': !open}"
                    class="w-5 text-gray-600 transition-transform duration-200 transform" style="height: 1.3rem"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <div x-show="open" @click="open = false" wire:loading.class="hidden"
                x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform scale-y-0"
                x-transition:enter-end="origin-top transform scale-y-1"
                class="absolute right-0 z-50 float-left py-2 mt-1 text-base text-left list-none bg-white rounded shadow"
                style="min-width: 12rem;display:none">
                <div class="block px-2 py-2 pt-2 text-xs text-gray-400">
                    Filter
                </div>
                {{ $slot }}
            </div>
        </li>
    </div>
</ul>
