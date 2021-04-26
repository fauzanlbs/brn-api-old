<div {{ $attributes->merge(['class' => 'col-span-6']) }}>
    <div class="grid grid-cols-6">
        <label for="{{ $for ?? '' }}" class="col-span-6 xl:col-span-2 ">
            <div class="text-sm leading-normal {{isset($description) ? '' : 'my-0.5'}} text-gray-700 font-semibold capitalize">
                {{ $title }}
            </div>
            @if (isset($description))
            <p class="mr-8 text-sm text-gray-600">
                {{ $description }}
            </p>
            @endif
        </label>
        <div class="col-span-6 xl:col-span-4 xl:mt-0">
            {{ $slot }}
        </div>
    </div>
</div>
