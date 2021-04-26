@if ($errors->any())
<div class="flex flex-row items-center p-2 mb-3 bg-red-200 border-b-2 border-red-300 rounded-lg alert">
    <div class="p-1.5 alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-5 w-5 flex-shrink-0 rounded-full">
        <span class="text-xs font-extrabold text-red-500">
            X
        </span>
    </div>
    <div class="ml-2 alert-content">
        <div class="text-sm font-semibold text-red-800 alert-title">
            Error
        </div>
        <div class="text-xs text-red-600 alert-description">
            @foreach ($errors->all() as $error)
            # {{ $error }}<br>
            @endforeach
        </div>
    </div>
</div>
@endif
