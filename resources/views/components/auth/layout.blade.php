<div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white border-0 rounded-lg shadow-lg" style="opacity: 0.90">
    <div class="px-6 py-6 mb-0 rounded-t">
        <div class="mb-3 text-center">
            <h6 class="text-sm font-bold text-gray-600">
                {{ $title }}
            </h6>
        </div>
        @if ($social ?? '')
        <x-auth.social-login />
        @endif
        <hr class="mt-6 border-gray-300 border-b-1">
    </div>
    <div class="flex-auto px-4 py-10 pt-0 lg:px-10">
        {{ $slot }}
    </div>
</div>
<div class="relative flex flex-wrap mt-6 mb-20 font-bold">
    @if ($footer_left ?? '')
    <div class="w-1/2 text-left">
        <a href="{{ route($footer_left['link']) }}" class="text-gray-500 hover:text-gray-400">
            <small>{{ $footer_left['text'] }}</small>
        </a>
    </div>
    @endif
    @if ($footer_right ?? '')
    <div class="w-1/2  {{ isset($footer_left) ? 'text-right' : 'text-left' }} ">
        <a href="{{ route($footer_right['link']) }}" class="text-gray-500 hover:text-gray-400">
            <small>{{ $footer_right['text'] }}</small>
        </a>
    </div>
    @endif
</div>
