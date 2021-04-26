<div class="relative flex flex-col w-full min-w-0 break-words bg-white rounded shadow-lg">
    <div class="px-4 pt-2 pb-3 mb-0 border-0 rounded-t">
        <div class="flex flex-wrap px-2 space-y-2">
            {{ $header }}
        </div>
    </div>
    <div class="block w-full overflow-x-auto">
        <table class="items-center w-full divide-y divide-gray-200">
            <thead>
                {{ $thead }}
            </thead>
            <tbody class="divide-y divide-gray-200 whitespace-nowrap "
                wire:loading.class="opacity-50 cursor-not-allowed animate-pulse">
                {{ $tbody }}
            </tbody>
        </table>
    </div>
</div>
