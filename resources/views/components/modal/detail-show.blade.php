<div x-data="{open:false}" x-init="$watch('open', value => {
    const body = document.body;
    if (value) {
        document.body.classList.add('overflow-y-hidden');
    } else {
        let t = document.getElementById('modal-description-list-data');
        t.scrollTop =0;
        document.body.classList.remove('overflow-y-hidden');
    }
})" x-on:open-modal-description-list.window="open = true" x-on:close-modal-description-list.window="open = false">
    <div id="modal-description-list-data" t-cabc x-cloak x-ref="modal" x-show="open"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none"
        class="fixed inset-0 z-20 flex items-baseline justify-center w-screen h-screen pt-8 transition-all transform"
        role="dialog" aria-modal="true">

        <div class="relative w-full bg-white rounded-lg shadow-xl relativeoverflow-hidden sm:max-w-2xl">
            <div class="px-6 py-5 sm:px-6">
                <div class="flex flex-wrap ">
                    <div class="w-6/12">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            {{ $title ?? '' }}
                        </h3>
                    </div>
                    <div class="flex justify-end w-6/12">
                        <button wire:loading.remove type="button" @click="open = false"
                            class="text-xl leading-none text-gray-500 bg-transparent rounded outline-none opacity-50 cursor-pointer hover:text-gray-700 focus:outline-none">
                            <div class="w-5 h-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="overflow-y-auto border-t border-gray-200 " style="height: calc(100vh - 235px)">
                <dl>
                    {{ $slot }}
                </dl>
            </div>

            <div wire:loading class="absolute inset-0 z-40 transition-all transform" x-on:click="show = false"
                x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display:none;">
                <div class="absolute inset-0 flex items-center justify-center bg-gray-100 opacity-75">
                    <div class="grid text-blue-600 justify-items-stretch animate-pulse">
                        <div class="w-20 text-xs opacity-75 justify-self-center">
                            {{ svg('heroicon-o-clipboard-list') }}
                        </div>
                        <p class="font-bold">
                            Memuat Data
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex justify-between px-6 py-2 text-right bg-gray-100 rounded-lg">
                <x-button.outline-secondary @click="open = false" class="mr-2 mb-0.5">
                    Tutup
                </x-button.outline-secondary>
                <div @click="open = false">
                    {{ $button ?? '' }}
                </div>
            </div>
        </div>

    </div>
    <div x-show="open" class="fixed inset-0 z-10 transition-all transform" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
</div>
