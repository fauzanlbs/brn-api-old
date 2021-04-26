<label class="inline-flex items-center mt-2 ml-2 cursor-pointer">
    <input wire:model="{{ $model }}" type="radio" class="w-5 h-5 text-blue-600 form-checkbox" name="{{ $model}}" value="{{ $value }}">
    <span class="ml-2 text-sm text-gray-700">
        {{ $text }}
    </span>
</label>
