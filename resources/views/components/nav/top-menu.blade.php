<nav
    class="absolute top-0 left-0 z-10 flex items-center w-full p-4 bg-transparent md:flex-row md:flex-no-wrap md:justify-start">
    <div class="flex flex-wrap items-center justify-end w-full px-4 mx-autp md:flex-no-wrap md:px-10">
        <div class="hidden text-sm font-semibold text-white uppercase lg:inline-block">

            <div class="mx-auto max-w-8xl">
                <div class="pb-2">
                    <nav class="flex items-center text-sm font-medium">
                        <a href="{{ route('dashboard') }}"
                            class="text-white transition duration-150 ease-in-out hover:text-blue-100 focus:outline-none focus:underline">
                            {{ svg('heroicon-s-home', 'w-4') }}
                        </a>
                        @stack('breadcrumbs')
                    </nav>
                </div>
            </div>
        </div>

        <div class="flex-row flex-wrap items-center hidden mr-3 md:flex lg:ml-auto">
            <div class="relative">
                {{-- <livewire:notification.show> --}}
            </div>
        </div>
        <div class="hidden md:flex md:-mr-3">
            <x-nav.account-management-menu />
        </div>
    </div>
</nav>
