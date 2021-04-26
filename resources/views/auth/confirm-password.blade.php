@push('title')
Konfirmasi Password
@endpush
<x-guest-layout>
    <x-auth.layout title="Konfirmasi Password">
        @slot('footer_left', ['text'=> 'Lupa Password','link'=> 'password.request'])
        @slot('footer_right', ['text'=> 'Sudah daftar? Masuk','link'=> 'login'])

        <x-input.validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="password" input-label="Password" name="password" value="{{ old('password') ?  old('password') : '' }}" placeholder="Masukan password" type="password" required class="px-2 py-2" />
            </div>

            <x-auth.submit-button>Konfirmasi Password</x-auth.submit-button>
        </form>
    </x-auth.layout>
</x-guest-layout>
