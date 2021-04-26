<a {{ $attributes->merge(['class' => 'mx-0.5 px-2 py-1 bg-'.$color.'-600 text-white hover:bg-'.$color.'-500 active:bg-'.$color.'-500 text-xs font-bold uppercase  rounded outline-none focus:outline-none cursor-pointer']) }}>
    {{ $text ?? $slot }}
</a>
