@push('title')
Lupa Password
@endpush
<x-guest-layout>
    <x-auth.layout title="Lupa Password">
        @if (Route::has('register'))
        @slot('footer_left', ['text'=> 'Buat akun baru','link'=> 'register'])
        @endif
        @slot('footer_right', ['text'=> 'Sudah daftar? Masuk','link'=> 'login'])

        <div class="mb-3 font-semibold text-left text-gray-500">
            <small>
                Lupa kata sandi Anda? Tidak masalah. Biarkan kami mengetahui alamat email Anda dan kami akan
                mengirimkan email kepada Anda tautan pengaturan ulang kata sandi yang memungkinkan Anda membuat
                password yang
                baru.  
            </small>
        </div>
        @if (session('status'))
        <div class="flex flex-row items-center p-2 mb-3 bg-green-200 border-b-2 border-green-300 rounded-lg alert">
            <div class="flex items-center justify-center flex-shrink-0 w-5 h-5 bg-green-100 border-2 border-green-500 rounded-full alert-icon">
                <span class="text-green-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-3 h-3">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="ml-2 alert-content">
                <div class="text-sm font-semibold text-green-800 alert-title">
                    Success
                </div>
                <div class="text-xs text-green-600 alert-description">
                    {{ session('status') }}
                </div>
            </div>
        </div>
        @endif

        <x-input.validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="relative w-full mb-3">
                <x-input.default-with-label input-id="email" input-label="email" name="email" value="{{ old('email') ?  old('email') : '' }}" placeholder="Masukan email" type="email" required autofocus class="px-2 py-2" />
            </div>

            <x-auth.submit-button>
                Kirim Email Reset Link
            </x-auth.submit-button>
        </form>
    </x-auth.layout>
</x-guest-layout>
