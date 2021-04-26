<div {{ $attributes->merge(['class' => 'capitalize  font-bold inline-flex text-xs leading-5 px-2 rounded-full text-center']) }}>
    {{ $slot ?? 'text' }}
</div>
