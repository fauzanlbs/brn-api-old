<td {{ $attributes->merge(['class' => 'px-6 py-4 text-sm text-gray-500 whitespace-nowrap']) }}>
    {!! $text ?? $slot !!}
</td>
