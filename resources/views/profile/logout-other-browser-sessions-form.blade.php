<div class="xl:w-4/5">
    <x-input.section title="Kelola Sesi" description="Jika perlu, Anda dapat keluar dari semua sesi browser Anda yang lain di semua perangkat Anda. Jika Anda merasa akun Anda telah dibobol, Anda juga harus memperbarui kata sandi Anda">

        <div class="col-span-6">
            @if (count($this->sessions) > 0)
            <div class="grid grid-cols-6">
                <!-- Other Browser Sessions -->
                @foreach ($this->sessions as $session)
                <div class="flex items-center col-span-6 mb-3 sm:col-span-3 md:col-span-6 lg:col-span-2">
                    <div>
                        @if ($session->agent->isDesktop())
                        <svg fill=" none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                            <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-gray-500">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <rect x="7" y="4" width="10" height="16" rx="1"></rect>
                            <path d="M11 5h2M12 17v.01"></path>
                        </svg>
                        @endif
                    </div>

                    <div class="ml-3">
                        <div class="text-sm text-gray-600">
                            {{ $session->agent->platform() }} - {{ $session->agent->browser() }}
                        </div>

                        <div>
                            <div class="text-xs text-gray-500">
                                {{ $session->ip_address }},

                                @if ($session->is_current_device)
                                <span class="font-semibold text-green-500">{{ __('This device') }}</span>
                                @else
                                {{ __('Last active') }} {{ $session->last_active }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <div class="flex items-center mt-3">
                <x-button.primary wire:click="confirmLogout" wire:loading.attr="disabled">
                    {{ __('Keluar dari sesi browser lain') }}
                </x-button.primary>

                <x-jet-action-message class="ml-3" on="loggedOut">
                    {{ __('Selesai.') }}
                </x-jet-action-message>
            </div>
    </x-input.section>
</div>


<!-- Logout Other Devices Confirmation Modal -->
<x-jet-dialog-modal wire:model="confirmingLogout">
    <x-slot name="title">
        {{ __('Keluar dari sesi browser lain') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Silakan masukkan kata sandi Anda untuk mengonfirmasi bahwa Anda ingin keluar dari sesi browser lain di semua perangkat Anda..') }}
        <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
            <x-input.default type="password" class="block w-3/4 mt-1 text-sm" placeholder="{{ __('Password') }}" x-ref="password" wire:model.defer="password" wire:keydown.enter="logoutOtherBrowserSessions" />
            <x-input.error for="password" class="mt-1" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-button.outline-secondary wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
            {{ __('lupakan') }}
        </x-button.outline-secondary>

        <x-button.primary class="ml-2" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled">
            {{ __('Konfirmasi') }}
        </x-button.primary>
    </x-slot>
</x-jet-dialog-modal>
</div>
