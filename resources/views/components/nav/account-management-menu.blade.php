<x-dropdown.dropdown>
    <x-slot name="trigger">
        <div class="w-12 h-12 bg-gray-300 rounded-full">
            <img class="object-cover w-full h-full mr-1 tracking-tight text-gray-400 truncate rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ auth()->user()->name }}" />
        </div>
    </x-slot>
    <x-slot name="content">
        <div class="block w-40 px-4 pt-2 text-xs text-gray-400">
            {{ __('Kelola Akun') }}
        </div>
        <x-dropdown.link href=" {{ route('profile.show') }}">
            Profile
        </x-dropdown.link>
        <hr class="w-full my-1">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown.link href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                {{ __('Logout') }}
            </x-dropdown.link>
        </form>
    </x-slot>
</x-dropdown.dropdown>
