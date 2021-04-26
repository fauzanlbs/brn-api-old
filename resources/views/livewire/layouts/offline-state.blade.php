<div data-turbolinks-permanent id="app_offline_state">
    <div wire:offline>
        <div class="fixed inset-x-0 top-0 z-50 flex justify-center px-4 pt-6 sm:px-0 items-top">
            <div class="absolute z-50 flex p-2">
                <div class="inline-flex items-center p-2 text-sm leading-none text-red-500 bg-white rounded-full shadow">
                    <div class="inline-flex items-center justify-center text-red-500 bg-red-200 rounded-full text-">
                        <div class="h-5 w-5 m-1.5">
                            {{ svg('heroicon-o-exclamation') }}
                        </div>
                    </div>
                    <span class="inline-flex px-2">Tidak ada koneksi internet.</span>
                </div>
            </div>
        </div>
        <div class="fixed inset-0 z-40 bg-gray-500 opacity-50 " id="modal-create-data-backdrop"></div>
    </div>
</div>
