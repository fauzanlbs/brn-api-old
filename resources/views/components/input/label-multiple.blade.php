@props(['value'])

<div class="flex items-center mt-8">
    <x-divider />
    <label {{ $attributes->merge(['class' => 'block text-sm font-semibold text-gray-700 capitalize mb-1']) }}>
        {{ $value ?? $slot }}
    </label>
    <x-divider />
</div>
