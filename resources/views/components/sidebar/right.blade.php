<div x-data="{ open: false, option: false }" x-init="
        $watch('open', value => {
            const body = document.body;
            if(!open) {
                body.classList.remove('h-screen');
                return body.classList.remove('overflow-hidden');
            } else {
                body.classList.add('h-screen');
                return body.classList.add('overflow-hidden');
            }
        });" x-on:close-sidebar.window="if ($event.detail == '{{$id}}') open = false, option = false" x-on:open-right-sidebar.window="if ($event.detail.id == '{{$id}}') open = true">
    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200 " x-transition:enter-start="-mr-2 transform scale-x-0" x-transition:enter-end="origin-top-right transform scale-x-1" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="transform scale-x-1" x-transition:leave-end="origin-bottom-right transform scale-x-0" class="fixed inset-0 overflow-hidden" style="z-index: 1000;display:none;">
        <div class="absolute inset-0 overflow-hidden">
            <section class="absolute inset-y-0 right-0 flex max-w-full pl-10" aria-labelledby="slide-over-heading">
                <div class="relative w-screen max-w-md">
                    <div class="flex flex-col h-full overflow-y-scroll bg-white shadow-xl">
                        <div class="relative flex-1 pb-20">
                            <x-sidebar.header :id="$id" :title="$title" :on-close="$onClose ?? ''" />
                            <div class="p-6">
                                {{$slot}}

                                @if (isset($showHideOption))
                                <div class="mt-4 mr-auto text-left">
                                    <button x-on:click="option = !option" type="button" class="block py-2 pr-4 text-xs font-bold text-blue-500 cursor-pointer hover:text-blue-400 focus:outline-none" x-text="(option == false ? 'Opsi lanjutan' : 'Sembunyikan opsi lanjutan')"></button>
                                </div>
                                <div x-show="option" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="relative flex-wrap items-stretch w-full transition-all transform">
                                    {{ $showHideOption }}
                                </div>
                                @endif
                            </div>
                            @if (isset($action))
                            <x-sidebar.action :id="$id" :content="$action" />
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div x-show="open" class="fixed inset-0 z-40 transition-all transform" x-on:click="show = false" x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display:none;">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
</div>
