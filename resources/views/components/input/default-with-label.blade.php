@props(['disabled' => false])

<div>
    <label for="{{$inputId}}" class="block font-semibold text-gray-700 capitalize mb-1 {{ $labelText ?? 'text-sm' }}">
        {{ $inputLabel }}
        @if (isset($isOptional))
        <span class="text-xs text-gray-500">(tidak wajib)</span>
        @endif
    </label>
    <input id="{{$inputId}}" {{ $disabled ?? 'disabled' }} {!! $attributes->merge(['class' => 'border-gray-300
    focus:border-blue-300 focus:ring placeholder-gray-400 focus:ring-blue-200 focus:ring-opacity-50 rounded shadow-sm
    block w-full text-sm']) !!}>
</div>
