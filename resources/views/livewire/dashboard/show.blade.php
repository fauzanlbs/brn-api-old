@push('breadcrumbs')
    @include('layouts.breadcrumbs', ['breadcrumbs' => [
    [
    'url' => route('dashboard'),
    'text' => 'dashboard',
    ]
    ]])
@endpush

<div>
    <x-slot name="header">
        Dasboard
    </x-slot>
</div>
