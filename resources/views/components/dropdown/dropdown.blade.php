@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open" class="cursor-pointer">
        {{ $trigger }}
    </div>

    <div t-cabc x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform scale-y-0" x-transition:enter-end="origin-top transform scale-y-1"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-y-1"
        x-transition:leave-end="origin-top transform opacity-0 scale-y-0"
        class="absolute z-50 mt-1  {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
        style="display: none;" @click="open = false">
        <div class="rounded ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
