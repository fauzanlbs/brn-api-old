<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-t from-green-500 to-green-500 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:from-green-400 hover:to-green-500 active:from-green-600 active:to-green-700 focus:outline-none focus:from-green-600 focus:to-green-700 focus:shadow-outline-green disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
