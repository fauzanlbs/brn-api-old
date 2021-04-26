<td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
        <div class="flex-shrink-0 w-10 h-10 cursor-pointer">
            <img class="w-10 h-10 rounded-full" src="{{ htmlspecialchars_decode($small ?? $image) }}"
                data-src-original="{{ htmlspecialchars_decode($image) }}" onclick="showImage(event)">
        </div>
        <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
                {{ $textOne ?? $slot }}
                @if (isset($deleted))
                    <div x-data="{showTooltip:false}" @click.away="showTooltip = false"
                        class="relative inline-block cursor-pointer select-none">
                        <div @click="showTooltip = !showTooltip">
                            <div class="w-4 text-xs text-red-500 opacity-75 ">
                                {{ svg('heroicon-o-information-circle') }}
                            </div>
                        </div>
                        <div x-show.transition="showTooltip" @click="showTooltip = false"
                            class="absolute left-0 z-40 block p-1 text-xs font-bold text-center text-red-500 bg-white rounded shadow top-1">
                            Pengguna ini telah dihapus
                        </div>
                    </div>
                @endif
            </div>
            <div class="text-xs text-gray-500">
                {{ $textTwo ?? '' }}
            </div>
        </div>
    </div>
</td>
