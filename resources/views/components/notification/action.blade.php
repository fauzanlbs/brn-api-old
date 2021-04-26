<div {{ $attributes }} class="p-2 text-xl text-gray-600 ">
    <span class="notification-animate-ping absolute flex h-3 w-3 ml-2 {{ $slot == '0' ? 'hidden' : ''  }} ">
        <span class="absolute inline-flex w-3 h-3 bg-red-600 rounded-full opacity-75 animate-ping"></span>
        <span class="relative inline-flex w-3 h-3 bg-red-600 rounded-full"></span>
    </span>
    <x-heroicon-s-bell class="w-6 md:text-white" />
</div>
