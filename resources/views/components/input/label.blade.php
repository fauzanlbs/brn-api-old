@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-semibold text-gray-700 capitalize mb-1']) }}>
    {{ $value ?? $slot }}
</label>
