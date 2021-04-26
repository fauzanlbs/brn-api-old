<div class="xl:w-4/5">
    <x-input.section title="Hapus Akun" description="Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus akun Anda, harap unduh data atau informasi apa pun yang ingin Anda simpan">

        <div class="col-span-6 -mt-2">
            <x-button.red wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Hapus Akun') }}
            </x-button.red>
        </div>
    </x-input.section>

    <!-- Delete User Confirmation Modal -->
    <x-jet-dialog-modal wire:model="confirmingUserDeletion">
        <x-slot name="title">
            {{ __('Hapus Akun') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Anda yakin ingin menghapus akun Anda? Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Silakan masukkan kata sandi Anda untuk mengonfirmasi bahwa Anda ingin menghapus akun Anda secara permanen.') }}

            <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                <x-input.default type="password" class="block w-3/4 mt-1 text-sm" placeholder="{{ __('Kata Sandi') }}" x-ref="password" wire:model.defer="password" wire:keydown.enter="deleteUser" />

                <x-input.error for="password" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-button.outline-secondary wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                {{ __('Lupakan') }}
            </x-button.outline-secondary>

            <x-button.red class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                {{ __('Hapus Akun') }}
            </x-button.red>
        </x-slot>
    </x-jet-dialog-modal>
</div>
