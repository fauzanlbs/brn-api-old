<div {{ $attributes->merge(['class' => 'px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6']) }}>
    <dt class="text-sm font-medium text-gray-500 cursor-default">
        {{ $title ?? ''}}
    </dt>
    <dd class="mt-1 text-sm font-medium text-gray-900 capitalize sm:mt-0 sm:col-span-2">
        {{ $content ?? $slot   }}
    </dd>
</div>
