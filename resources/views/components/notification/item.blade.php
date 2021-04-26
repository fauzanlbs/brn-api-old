<div class="ar-notification-item">
    <a href="{{$link}}">
        <div class="flex items-center px-2 py-1 mx-2 hover:bg-gray-100">
            <div class="text-center bg-opacity-25 rounded-full bg-gradient-to-tr from-blue-500 to-blue-500">
                <div class="w-12 h-12">
                    {{ $icon }}
                </div>
            </div>
            <div class="mx-3">
                <h2 class="text-sm text-gray-800 leading-tights" style="
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;  
                    overflow: hidden;">
                    {{ $slot }}
                </h2>
                <div class="text-xs font-semibold text-gray-400">
                    @if ($readAt == null)
                    <span class="inline-flex rounded-full h-2 w-2 bg-blue-500 mr-0.5"></span>
                    @endif
                    {{ $date }}
                </div>
            </div>
        </div>
    </a>
</div>
