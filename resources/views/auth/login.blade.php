@push('title')
    Login
@endpush

<x-guest-layout>
    <x-auth.layout title="Masuk dengan Kredensial">
        @slot('footer_left', ['text' => 'Lupa Password', 'link' => 'password.request'])
            @if (Route::has('register'))
                @slot('footer_right', ['text' => 'Buat akun baru', 'link' => 'register'])
                @endif

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="relative w-full mb-3">
                        <x-input.default-with-label input-id="email" input-label="Email" name="email"
                            value="{{ old('email') ? old('email') : '' }}" placeholder="Masukan alamat email" type="text"
                            required autofocus class="px-2 py-2" />
                    </div>
                    <div class="relative w-full mb-3">
                        <x-input.default-with-label input-id="password" input-label="Password" name="password"
                            placeholder="Masukan password" type="password" required class="px-2 py-2" />
                    </div>

                    <x-auth.remember-me />

                    <x-auth.submit-button>Masuk</x-auth.submit-button>
                </form>
            </x-auth.layout>
        </x-guest-layout>
