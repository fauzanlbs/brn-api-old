<div>
    <label for="{{$inputId}}" class="block mb-1 text-sm font-semibold text-gray-700 capitalize ">
        {{ $inputLabel }}
    </label>
    <x-input.text-area rows="{{ $rows }}" {{ $attributes }} />
</div>
