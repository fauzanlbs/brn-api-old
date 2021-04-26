<div class="xl:w-4/5">
    <form wire:submit.prevent="updatePassword">
        <x-input.section title="Ubah Kata Sandi" description="
        Pastikan akun Anda menggunakan kata sandi yang panjang dan acak untuk tetap aman">

            {{-- input current password --}}
            <x-input.section-item for="current_password" title="Kata sandi saat ini" class="mt-7">
                <x-input.default wire:model.defer="state.current_password" type="password" id="current_password" placeholder="Masukan kata sandi saat ini" autocomplete="current_password" class="mt-0.5 text-sm" />
                <x-input.error for="current_password" class="mt-1" />
            </x-input.section-item>

            {{-- input new password --}}
            <x-input.section-item for="password" title="Kata sandi baru" description="Minimal panjang kata sandi 8 huruf" class="mt-7">
                <x-input.default wire:model.defer="state.password" type="password" id="password" placeholder="Masukan password" autocomplete="password" class="mt-0.5 text-sm" />
                <x-input.error for="password" class="mt-1" />
            </x-input.section-item>

            {{-- input password confirmation --}}
            <x-input.section-item for="password_confirmation" title="ulangi kata sandi" class="mt-7">
                <x-input.default wire:model.defer="state.password_confirmation" type="password" id="password_confirmation" placeholder="Ulangi password" autocomplete="password_confirmation" class="mt-0.5 text-sm" />
                <x-input.error for="password_confirmation" class="mt-1" />
            </x-input.section-item>

            <x-slot name="action">
                <x-jet-action-message class="mr-3" on="saved">
                    {{ __('Disimpan.') }}
                </x-jet-action-message>

                <x-button.primary wire:loading.attr="disabled" wire:target="photo" class="mr-4">
                    {{ __('Simpan') }}
                </x-button.primary>
            </x-slot>
        </x-input.section>
    </form>
</div>
