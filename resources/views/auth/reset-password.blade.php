@push('title')
Reset Password
@endpush
<x-guest-layout>
    <x-auth.layout title="Reset Password">
        @slot('footer_left', ['text'=> 'Lupa Password','link'=> 'password.request'])
        @slot('footer_right', ['text'=> 'Sudah daftar? Masuk','link'=> 'login'])

        <x-input.validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="email" input-label="Email" name="email" :value="old('email', $request->email)" placeholder="Masukan email" type="email" required class="px-2 py-2 opacity-50 cursor-not-allowed" readonly />
            </div>
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="password" input-label="Password" name="password" value="{{ old('password') ?  old('password') : '' }}" placeholder="Masukan password" type="password" required class="px-2 py-2" autofocus />
            </div>
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="password_confirmation" input-label="Ulangi password" name="password_confirmation" value="{{ old('password_confirmation') ?  old('password_confirmation') : '' }}" placeholder="Ulangi password" type="password" required class="px-2 py-2" />
            </div>

            <x-auth.submit-button>Reset Password</x-auth.submit-button>
        </form>
    </x-auth.layout>
</x-guest-layout>
