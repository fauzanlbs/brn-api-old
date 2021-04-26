<div {{ $attributes->merge(['class' => 'text-center mt-6']) }}>
    <button @click="toggleLoading()" class="bg-blue-600 text-white active:bg-blue-500 text-sm font-bold uppercase px-6 py-2.5 rounded shadow hover:shadow-lg outline-none focus:outline-none w-full" type="submit" style="transition: all 0.15s ease 0s;">
        <span class="my-0.5">
            {{ $slot }}
        </span>
    </button>
</div>
