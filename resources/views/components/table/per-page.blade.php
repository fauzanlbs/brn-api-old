<ul class="flex flex-wrap items-center mr-2 list-none lg:ml-auto">
    <div @click.away="open = false" x-data="{ open: false }">
        <li class="relative inline-block ">
            <x-dropdown.dropdown width="w-8">
                <x-slot name="trigger">
                    <button class="inline-flex items-center p-2 text-sm text-gray-600 bg-gray-200 rounded shadow focus:outline-none">
                        {{ $title }}
                    </button>
                </x-slot>
                <x-slot name="content">
                    <div class="flex flex-col">
                        @foreach ($perPageList as $p)
                        <label for="perpage{{$p}}" class="cursor-pointer py-1 inline-flex items-center justify-center {{$itemPerPage == $p ? 'text-gray-100 bg-gradient-to-t from-blue-400 to-blue-500':'text-gray-700 hover:bg-gray-100'}}">
                            <input wire:model="item_per_page" id="perpage{{$p}}" type="radio" name="page_show" value="{{$p}}" class="hidden">
                            <span class="text-sm font-semibold">{{$p}}</span>
                        </label>
                        @endforeach
                    </div>
                </x-slot>
            </x-dropdown.dropdown>
        </li>
    </div>
</ul>
