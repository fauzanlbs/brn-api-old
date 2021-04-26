@push('title')
Register
@endpush
<x-guest-layout>
    <x-auth.layout title="Daftar dengan kredensial">
        @slot('footer_left', ['text'=> 'Lupa Password','link'=> 'password.request'])
        @slot('footer_right', ['text'=> 'Sudah daftar? Masuk','link'=> 'login'])

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="name" input-label="Nama Lengkap" name="name" value="{{ old('name') ?  old('name') : '' }}" placeholder="Masukan nama lengkap" type="text" required autofocus class="px-2 py-2" />
                <x-input.error for="name" class="mt-1" />
            </div>
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="email" input-label="Email" name="email" value="{{ old('email') ?  old('email') : '' }}" placeholder="Masukan email" type="email" required autofocus class="px-2 py-2" />
                <x-input.error for="email" class="mt-1" />
            </div>
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="password" input-label="Password" name="password" value="{{ old('password') ?  old('password') : '' }}" placeholder="Masukan password" type="password" required class="px-2 py-2" />
                <x-input.error for="password" class="mt-1" />
            </div>
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="password_confirmation" input-label="Ulangi password" name="password_confirmation" value="{{ old('password_confirmation') ?  old('password_confirmation') : '' }}" placeholder="Ulangi password" type="password" required class="px-2 py-2" />
                <x-input.error for="password_confirmation" class="mt-1" />
            </div>

            <x-auth.terms />
            <x-input.error for="terms" class="mt-1" />

            <x-auth.submit-button>Daftar</x-auth.submit-button>
        </form>
    </x-auth.layout>
</x-guest-layout>
