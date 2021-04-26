@props(['for'])

@error($for)
<span {{ $attributes->merge(['class' => 'error text-sm text-red-600']) }}>{{ $message }}</span>
@enderror