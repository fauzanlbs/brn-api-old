<div class="w-full px-4 lg:w-6/12 xl:w-4/12" title="Total Pengguna" color="blue" icon="heroicon-o-users" value="70"
    percentage-value="100" percentage-status="plus">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
        <div class="flex-auto p-4" style="
        height: 108px;">
            <div class="flex flex-wrap ">
                <div class="relative flex-1 flex-grow w-full max-w-full pr-4 ">
                    <div class="flex ">
                        <div class="flex-no-warp">
                            <h5 class="text-xs font-bold text-gray-500 uppercase">
                                Motivasi harian
                            </h5>
                        </div>
                    </div>
                    <span class="text-lg font-semibold text-gray-800" style="
                    overflow: hidden;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 2;
                ">
                        {{ explode('. -', \Illuminate\Foundation\Inspiring::quote())[0] }}
                        {{-- <span class="opacity-75">Selamat datang kembali</span> {{ auth()->user()->name }}, semoga harimu men --}}
                    </span>
                </div>
                <div class="relative flex-initial w-auto pl-4">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 text-center text-yellow-400 rounded-full shadow-lg">
                        {{ svg('heroicon-o-emoji-happy') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
