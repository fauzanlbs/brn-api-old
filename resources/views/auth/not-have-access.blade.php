@push('title')
Unauthorised
@endpush
<x-guest-layout>
    <x-auth.layout title="Unauthorised">

        <div class="mb-3 font-semibold text-left text-gray-500">
            <small>
                Maaf {{ auth()->user()->name }} akun anda tidak memiliki akses ke halaman admin.
            </small>
        </div>
        <x-input.validation-errors class="mb-4" />
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-auth.submit-button>Keluar</x-auth.submit-button>
        </form>
    </x-auth.layout>
</x-guest-layout>
