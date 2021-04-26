@push('title')
Email Berhasil Diverfikasi
@endpush
<x-guest-layout>
    <x-auth.layout title="Email Berhasil Diverfikasi">

        <div class="mb-3 font-semibold text-left text-gray-500">
            <small>
                Hi {{ ucfirst($name) }}, Email Anda berhasil di verfikasi. Sekarang Anda bisa mulai menggunakan aplikasi
                {{ config('app.name') }} Terima kasih telah mendaftar di aplikasi
                {{ config('app.name') }}
            </small>
        </div>
        <x-input.validation-errors class="mb-4" />
        <div x-data="{timeout: null, coutdown: 5}" x-init="
        
        setInterval(() => { 
            coutdown -= 1;
        }, 1000);
        clearTimeout(timeout);  timeout = setTimeout(() => { 
            console.log('asd');
            $refs.home.click();
        }, 4000);

        ">
            <a href="{{ route('dashboard') }}" x-ref="home">
                <x-button.primary class="mt-4">
                    Kembali ke beranda
                </x-button.primary>
            </a>
            <span class="ml-3 text-sm font-bold text-gray-400">Redirect in <span x-text="coutdown"></span></span>
        </div>
    </x-auth.layout>
</x-guest-layout>
