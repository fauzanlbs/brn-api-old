<div class="relative mb-0.5" x-data="{ open: {{ $open }}, active: {{ $open }} }">
    <li :class="active ? 'text-blue-600 bg-blue-100' : 'text-gray-700 hover:bg-gray-100'" class="flex items-center rounded cursor-pointer" @click="open = !open">
        <div class="absolute right-2 mt-0.5">
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1" style="margin-top: 0.5;">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                </path>
            </svg>
        </div>
        <button class="block py-3 pl-2 text-xs font-bold uppercase focus:outline-none">
            <div class="flex items-center ">
                <div class="w-5 ml-1 text-xs opacity-75">
                    {{ svg($icon) }}
                </div>
                <span class="ml-2">{{ $text }}</span>
            </div>
        </button>
    </li>
    <div t-cabc="{{ $open == 'true' ? 'false' : 'true' }}" x-show="open" class="ml-4" style="display: none">
        {{ $slot }}
    </div>
</div>
