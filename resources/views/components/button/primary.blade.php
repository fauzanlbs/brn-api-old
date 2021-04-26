<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-t from-blue-500 to-blue-600 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:from-blue-400 hover:to-blue-500 active:from-blue-600 active:to-blue-700 focus:outline-none focus:from-blue-600 focus:to-blue-700 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
