@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-blue-300
    focus:ring placeholder-gray-400 focus:ring-blue-200 focus:ring-opacity-50 rounded shadow-sm block w-full']) !!}> </textarea>
