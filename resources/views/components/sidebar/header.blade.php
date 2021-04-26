<div class="flex flex-wrap px-6 pt-2 border-b-2 border-gray-200">
    <div class="w-6/12">
        <p class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left text-gray-700 uppercase whitespace-no-wrap" route="dashboard" name="ArStaterV2">
            {{ $title }}
        </p>
    </div>
    <div class="flex justify-end w-6/12">
        <button wire:loading.attr='disabled' type="button" @click="open = false, option = false" {{ $onClose ?? '' }} class="px-3 py-1 text-xl leading-none text-gray-500 bg-transparent rounded outline-none opacity-50 cursor-pointer hover:text-gray-700 focus:outline-none">
            <div class="h-5 w-5 m-1.5">
                {{ svg('heroicon-o-x') }}
            </div>
        </button>
    </div>
</div>
