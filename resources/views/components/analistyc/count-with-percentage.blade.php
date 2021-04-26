<div {{ $attributes->merge(['class' => 'w-full lg:w-6/12 xl:w-4/12 px-4']) }}>
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
        <div class="flex-auto p-4">
            <div class="flex flex-wrap">
                <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                    <div class="flex">
                        <div class="flex-no-warp">
                            <h5 class="text-xs font-bold text-gray-500 uppercase">
                                {{ $title }}
                                @if (isset($percentageStatus))
                                    <div wire:loading.remove class="inline">
                                        <svg fill="currentColor" viewBox="0 0 20 20"
                                            class="{{ $percentageStatus == 'plus' ? 'transform rotate-180 text-green-500' : 'transform rotate-0 text-red-500' }} inline w-3.5 h-3.5 -mt-1 "
                                            style="margin-top: 0.5;">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </div>
                                @endif
                            </h5>
                        </div>
                        <div wire:loading>
                            <x-loading.line-scale class="ml-2 mt-0.5 -mb-0.5" style="color: #d2d6dc;" />
                        </div>
                    </div>
                    <span class="text-2xl font-semibold text-gray-800">
                        {{ number_format($value, 0, ',', '.') }}
                    </span>
                </div>
                <div class="relative flex-initial w-auto pl-4">
                    <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-{{ $color }}-500">
                        {{ svg($icon) }}
                    </div>
                </div>
            </div>
            @if (isset($percentageValue) && isset($percentageStatus))
                <p class="mt-2 text-sm text-gray-500">
                    <span class="text-{{ $percentageStatus == 'plus' ? 'green' : 'red' }}-500 mr-2">
                        {{ $percentageValue ? $percentageValue : '-' }} %
                    </span>
                    <span class="whitespace-no-wrap">
                        {{ $percentageValueText ?? 'Sejak 30 Hari Terakhir' }}
                    </span>
                </p>
            @else
                @if (!isset($description))
                    <div style="height: 28.31px"></div>
                @endif
            @endif
            @if (isset($description))
                <p class="mt-2 text-sm text-gray-500">
                    <span class="whitespace-no-wrap">
                        {{ $description }}
                    </span>
                </p>
            @endif
        </div>
    </div>
</div>
