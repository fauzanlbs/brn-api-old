<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-t from-red-500 to-red-600 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:from-red-400 hover:to-red-500 active:from-red-600 active:to-red-700 focus:outline-none focus:from-red-600 focus:to-red-700 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
