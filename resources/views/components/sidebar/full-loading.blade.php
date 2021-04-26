<div x-data="{open: @entangle('showLoading')}">
    <div x-show="open" class="absolute inset-0 z-40 transition-all transform" x-on:click="show = false" x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display:none;">
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
</div>
