<div {{ $attributes->merge(['class' => 'text-center mt-2.5']) }}>
    <button class="bg-white border border-gray-300 text-gray-400 text-sm font-bold uppercase px-6 py-2.5 rounded  hover:shadow-md outline-none focus:outline-none  w-full" type="submit" style="transition: all 0.15s ease 0s;">
        {{ $slot }}
    </button>
</div>
