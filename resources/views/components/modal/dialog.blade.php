<div wire:ignore x-data="{
    open: false,
    title: null,
    description: null,
}" x-init="
    $watch('open', value => {
        const body = document.body;
        if(!open) {
            body.classList.remove('h-screen');
            return body.classList.remove('overflow-hidden');
        } else {
            body.classList.add('h-screen');
            return body.classList.add('overflow-hidden');
        }
    });" @open-modal-dialog.window="if ($event.detail.id == '{{ $id }}') open = true"
    x-on:close-modal-dialog.window="open = false">

    <div x-cloak x-ref="modal" x-show="open" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none"
        class="fixed inset-0 z-20 flex items-baseline justify-center w-screen h-screen pt-8 transition-all transform"
        role="dialog" aria-modal="true">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl sm:w-full sm:max-w-2xl ">
            <div class="px-6 py-4">
                <div class="flex justify-between">
                    <div class="text-lg">
                        {{ $title }}
                    </div>
                    <button x-on:click="open = false"
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
                <div class="mt-1 text-gray-700">
                    {{ $description ?? $slot }}
                </div>
                {{ $content ?? '' }}
            </div>

            @if (isset($onConfirm))
                <div class="px-6 py-2 text-right bg-gray-100">
                    <x-button.outline-secondary wire:loading.attr="disabled" @click="open = false"
                        wire:loading.class="opacity-50 cursor-not-allowed" class="mr-2 mb-0.5">
                        {{ $cancelText ?? 'Lupakan' }}
                    </x-button.outline-secondary>

                    <div class="inline">
                        <x-button.custom color="{{ isset($danger) ? 'red' : 'blue' }}" wire:loading.attr="disabled"
                            type="button" wire:click="{{ $onConfirm }}">
                            <span wire:loading.class="hidden" wire:target="{{ $onConfirm }}">
                                {{ $onConfirmText ?? 'Lanjutkan' }}
                            </span>
                            <div wire:loading wire:target="{{ $onConfirm }}">
                                <x-loading.line-scale style="width:80.3px" />
                            </div>
                        </x-button.custom>
                    </div>

                </div>
            @endif
        </div>
    </div>
    <div x-show="open" class="fixed inset-0 z-10 transition-all transform" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
</div>
