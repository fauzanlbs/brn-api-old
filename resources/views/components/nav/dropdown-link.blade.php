<li class="items-center my-0.5">
    <a class="rounded-md {{  request()->routeIs($route) || request()->is($group ?? null)? 'text-blue-600 bg-blue-100' : 'text-gray-700 hover:bg-gray-100 focus:bg-blue-100 focus:text-blue-600' }} pl-2 text-xs uppercase py-1 font-semibold block focus:outline-none" href="{{ route($route) }}">
        <div class="flex items-center ">
            <x-tabler-square-rotated class="w-32 text-xs opacity-75" style="width: 10px" />
            <span class="ml-1.5">
                {{$name ?? ''}}
            </span>
        </div>
    </a>
</li>
