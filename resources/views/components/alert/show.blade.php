<div t-cabc x-data="ArAlert()" x-on:show-alert.window="showAlert($event.detail)" x-show="shown" x-transition:enter="transition ease-out duration-300 " x-transition:enter-start="transform opacity-0 scale-y-0" x-transition:enter-end="origin-top-right transform opacity-100 scale-y-1" x-transition:leave="ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-x-0 top-0 z-40 flex justify-center sm:px-0 items-top" style="display: none;">

    <div class="absolute flex p-3 mx-4 mt-4 bg-white rounded shadow ">
        <div class="flex flex-row items-center">
            <div x-ref="icon" :class="'bg-'+color+'-200 text-'+color+'-500'" class="inline-flex items-center justify-center mx-1 rounded-full ">
                <div x-show="icon == 'error'" class="h-5 w-5 m-1.5">
                    {{ svg('heroicon-o-x') }}
                </div>
                <div x-show="icon == 'success'" class="h-5 w-5 m-1.5">
                    {{ svg('heroicon-o-check') }}
                </div>
                <div x-show="icon == 'info' || icon == 'warning'" class="h-5 w-5 m-1.5">
                    {{ svg('heroicon-o-speakerphone') }}
                </div>
            </div>
            <div class="max-w-xs ml-2 text-left">
                <div class="flex justify-between text-sm text-gray-800 font-semibold -mt-0.5">
                    <p x-text="title"></p>
                    <div @click="shown = false">
                        <button type="button" class="text-gray-500 outline-none cursor-pointer hover:text-gray-600 focus:outline-none">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
                                <path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <span x-text="description" class="block text-sm text-gray-600  tracking-tight lg:truncate  pr-0.5 -mt-2.5"></span>
            </div>
        </div>
    </div>

    <script>
        function ArAlert() {
            return {
                shown: false
                , timeout: null
                , icon: null
                , title: null
                , color: null
                , description: null
                , showAlert(detail) {
                    this.setIcon(detail.type);
                    this.title = detail.title;
                    this.description = detail.description;
                    this.shown = true;
                    clearTimeout(this.timeout);
                    this.timeout = setTimeout(() => {
                        this.shown = false
                    }, 2500);
                }
                , setIcon(type) {
                    switch (type) {
                        case 'success':
                            this.color = 'green'
                            this.icon = 'success'
                            break;
                        case 'info':
                            this.color = 'blue'
                            this.icon = 'info'
                            break;
                        case 'warning':
                            this.color = 'yellow'
                            this.icon = 'warning'
                            break;
                        case 'error':
                            this.color = 'red'
                            this.icon = 'error'
                            break;
                        default:
                            this.color = 'blue'
                            this.icon = 'info'
                            break;
                    }
                }
            , }
        }

    </script>
</div>
