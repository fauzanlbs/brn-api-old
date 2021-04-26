<div class="flex items-center">
    <div {{ $attributes->merge(['class' => 'w-3 h-3 mr-2 rounded-full']) }}></div>
    {!! $text ?? $slot !!}
</div>
