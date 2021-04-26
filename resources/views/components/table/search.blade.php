<form class="flex-row flex-wrap items-center mr-2 sm:flex">
    <div class="relative flex flex-wrap items-stretch w-full">
        <div class="absolute items-center justify-center text-base leading-snug text-center text-gray-400 bg-transparent rounded " style="z-index: 1">
            <div class="w-5 h-5 my-2 ml-2">
                {{ svg('heroicon-o-search') }}
            </div>
        </div>
        <input wire:model="search" type="text" placeholder="Cari disini..." name="search" autocomplete="off" class="relative w-full py-2 pl-8 pr-2 text-sm text-gray-600 placeholder-gray-500 bg-gray-200 border-none rounded shadow outline-none focus:outline-none focus:shadow-outline" />
    </div>
</form>
