<div {{ $attributes->merge(['class' => 'mb-5 px-4']) }}>
    <div class="flex-auto bg-white rounded shadow">
        <div class="py-4 sm:px-4 ">
            <div class="mx-4 sm:my-3">
                <div class="grid grid-cols-6">
                    @if (isset($title))
                    <div class="col-span-6 mb-3">
                        <div class="mt-0 mb-2 text-sm font-bold leading-normal text-gray-800 uppercase">
                            {{ $title }}
                        </div>
                        @if (isset($description))
                        <p class="mb-3 -mt-1 text-sm text-gray-600">
                            {{ $description }}
                        </p>
                        @endif
                    </div>
                    @endif
                    {{ $slot }}
                </div>
            </div>
        </div>
        @if (isset($action))
        <div class="flex items-center justify-end py-3 text-right rounded-b bg-gray-50 sm:px-4">
            {{ $action }}
        </div>
        @endif
    </div>
</div>
