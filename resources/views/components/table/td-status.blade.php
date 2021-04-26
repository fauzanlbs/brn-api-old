<td {{ $attributes->merge(['class' => 'px-6 py-4 text-sm text-gray-500 whitespace-nowrap']) }}>
    <div class="flex items-center">
        <div class="w-3 h-3 rounded-full bg-{{ $color }}-500 mr-2"></div>
        {!! $text ?? $slot !!}
    </div>
</td>
