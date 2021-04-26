<nav x-data="{ open: false}" x-on:close-m-nav.window="open = false"
    class="relative z-10 flex flex-wrap items-center justify-between px-3 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden md:w-64">
    <div
        class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap">
        <button
            class="px-3 py-1 text-xl leading-none text-gray-600 bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer md:hidden focus:outline-none"
            type="button" @click="open = true">
            <x-heroicon-s-menu class="w-6" />
        </button>

        <x-nav.app-name route="dashboard" name="{{ config('app.name') }}" class="ml-3" />

        <div class="flex flex-wrap items-center list-none md:hidden">
            <div x-data="{ open: false }" @click.away="open = false" @close.stop="open = false"
                class="relative inline-block">
                <div class="flex flex-wrap list-none">
                    <div class="flex items-center mr-1" @click="open = false">
                        {{-- <livewire:notification.show> --}}
                    </div>
                    <x-nav.account-management-menu />
                </div>
            </div>
        </div>
        <div :class="open ?'bg-white m-2 py-3 px-6': 'hidden'"
            class="absolute top-0 left-0 right-0 z-40 items-center flex-1 h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none ">
            <div class="block pb-4 mb-4 border-b border-gray-300 border-solid md:min-w-full md:hidden">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <x-nav.app-name route="dashboard" name="{{ config('app.name') }}" />
                    </div>
                    <div class="flex justify-end w-6/12">
                        <button type="button"
                            class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer md:hidden focus:outline-none"
                            @click="open = false">
                            <x-heroicon-s-x class="w-5 text-gray-600" />
                        </button>
                    </div>
                </div>
            </div>
            <ul class="flex flex-col list-none md:flex-col md:min-w-full">
                <x-nav.link route="dashboard" name="Dashboard" icon="heroicon-o-home" />

                <x-nav.divider name="Kelola Akun" />

                <x-nav.link route="profile.show" name="Profile" icon="heroicon-o-user" />

                <x-nav.divider name="Server" />

                <x-nav.link route="monitoring.dashboard" name="Pemantauan Kinerja"
                    icon="heroicon-o-presentation-chart-line" />

            </ul>
        </div>
    </div>
</nav>
