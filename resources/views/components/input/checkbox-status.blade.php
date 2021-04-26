@props(['title' => true])
<div class="mb-3">
    <style>
        .toggle-checkbox:checked {
            @apply: right-0 border-blue-500;
            right: 0;
            border-color: #2563eb;
        }

        .toggle-checkbox:checked+.toggle-label {
            @apply: bg-blue-500;
            background-color: #2563eb;
        }

    </style>
    <div x-data="{status: {{$slot}},}">
        @if ($title == 'true')
        <x-input.label for="{{ $model .$id }}">
            <span class="capitalize">{{ $model }}</span>
        </x-input.label>
        @endif
        <div class="relative inline-block w-10 mt-1 mr-2 align-middle transition duration-200 ease-in select-none">
            <input @click="status = !status" wire:model.defer="{{$model}}" name="{{ $model }}" type="checkbox" id="{{$model . $id}}" class="absolute block w-6 h-6 transition duration-500 ease-in-out bg-white border-4 border-gray-300 rounded-full appearance-none cursor-pointer toggle-checkbox focus:ring-blue-300 focus:outline-none" />
            <label for="{{$model . $id}}" class="block h-6 overflow-hidden transition duration-500 ease-in-out bg-gray-300 rounded-full cursor-pointer ar-slider toggle-label"></label>
        </div>
        <label for="{{$model . $id}}" class="text-xs text-gray-700 cursor-pointer hover:text-gray-800" x-text="(status ? 'Aktif' : 'Tidak Aktif')"></label>
    </div>
</div>
