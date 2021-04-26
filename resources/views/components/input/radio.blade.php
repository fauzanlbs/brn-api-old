<div class="flex items-center">
    <input id="{{$for}}" {!! $attributes->merge(['class' => 'focus:ring-blue-500 h-5 w-5 text-blue-600
    border-gray-300']) !!}>
    <label for="{{$for}}" class="block ml-3 text-sm font-medium text-gray-700">
        {!! $label !!}
    </label>
</div>
