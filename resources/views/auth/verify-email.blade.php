@push('title')
Verfikasi Email
@endpush
<x-guest-layout>
    <x-auth.layout title="Verfikasi Email">

        <div class="mb-3 font-semibold text-left text-gray-500">
            <small>
                Terima kasih telah mendaftar! Sebelum memulai, dapatkah Anda memverifikasi alamat email Anda dengan
                mengklik link yang baru saja kami kirimkan kepada Anda? Jika Anda tidak menerima email tersebut,
                kami akan dengan senang hati mengirimkan email lainnya kepada Anda.
            </small>
        </div>
        @if (session('status') == 'verification-link-sent')
        <div class="flex flex-row items-center p-2 mb-3 bg-green-200 border-b-2 border-green-300 rounded-lg alert">
            <div class="flex items-center justify-center flex-shrink-0 w-5 h-5 bg-green-100 border-2 border-green-500 rounded-full alert-icon">
                <span class="text-green-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-3 h-3">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="ml-2 alert-content">
                <div class="text-xs text-green-600 alert-description">
                    Tautan verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.
                </div>
            </div>
        </div>
        @endif

        <x-input.validation-errors class="mb-4" />

        <form method="POST" action="{{ route('verification.send') }}" class="w-full mr-2">
            @csrf
            <x-auth.submit-button class="-mt-0.5">
                Kirim Ulang
            </x-auth.submit-button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-auth.logout-button>Keluar</x-auth.logout-button>
        </form>
    </x-auth.layout>
</x-guest-layout>
