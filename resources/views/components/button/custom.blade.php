<button {{ $attributes->merge(['type' => 'submit']) }} class='inline-flex items-center px-4 py-2 bg-gradient-to-t from-{{ $color }}-500
    to-{{ $color }}-600 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest
    hover:from-{{ $color }}-400 hover:to-{{ $color }}-500 active:from-{{ $color }}-600 active:to-{{ $color }}-700
    focus:outline-none focus:from-{{ $color }}-600 focus:to-{{ $color }}-700 focus:shadow-outline-{{ $color }}
    disabled:opacity-25 transition ease-in-out duration-150'>
    {{ $slot }}
</button>
