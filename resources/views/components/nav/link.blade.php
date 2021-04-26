<li class="items-center mb-0.5">
    <a class="rounded-lg {{ request()->routeIs($route) || request()->is($group ?? null) ? 'text-blue-600 bg-blue-100' : 'text-gray-700 hover:bg-gray-100  focus:bg-blue-100 focus:text-blue-600' }} pl-3 text-xs uppercase py-3 font-bold block rounded focus:outline-none" href="{{ route($route) }}">
        <div class="flex items-center ">
            <div class="w-5 text-xs opacity-75">
                {{ svg($icon) }}
            </div>
            <span class="ml-2">{{ $name }}</span>
        </div>
    </a>
</li>
