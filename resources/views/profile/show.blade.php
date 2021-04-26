@push('breadcrumbs')
    @include('layouts.breadcrumbs', ['breadcrumbs' => [
    [
    'url' => route('profile.show'),
    'text' => 'profile',
    ]
    ]])
@endpush

<x-app-layout>
    <x-slot name="header">
        Profil
    </x-slot>

    @livewire('profile.update-profile-information-form')

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        @livewire('profile.update-password-form')
    @endif

    @livewire('profile.logout-other-browser-sessions-form')

    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        @livewire('profile.delete-user-form')
    @endif
</x-app-layout>

@push('breadcrumbs')
    @php
    $x = [
        [
            'url' => route('profile.show'),
            'text' => 'profile',
        ],
    ];
    @endphp
    @include('layouts.breadcrumbs', ['breadcrumbs' => $x])
@endpush
