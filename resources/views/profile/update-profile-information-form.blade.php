<div class="xl:w-4/5">
    <form wire:submit.prevent="updateProfileInformation">
        <x-input.section title="Informasi Profile">

            <!-- Profile Photo -->
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <x-input.section-item for="photo" title="Foto Profil" description="
                Untuk gambar optimal gunakan ukuran minimum 600 x 600 px" class="mt-7">

                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                            photoName = $refs.photo.files[0].name;
                            const reader = new FileReader();
                            reader.onload = (e) => {
                                photoPreview = e.target.result;
                            };
                            reader.readAsDataURL($refs.photo.files[0]);
                    " />

                    <!-- Current Profile Photo -->
                    <div class="mt-1 bg-gray-200 border-gray-300 rounded h-28 w-28" x-show="!photoPreview" style="display: none">
                        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" data-src-original="{{ $this->user->profile_photo_url }}" loading="lazy" onclick="showImage(event)" class="object-cover w-full h-full tracking-tight text-gray-400 truncate rounded">
                    </div>


                    <!-- New Profile Photo Preview -->
                    <div class="mt-1" x-show="photoPreview">
                        <span class="block bg-gray-200 border border-gray-300 rounded w-28 h-28" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-button.outline-secondary type="button" class="mt-2 mr-1.5" x-on:click.prevent="$refs.photo.click()">
                        <div class="h-4 w-4 mx-0.5">
                            {{ svg('heroicon-o-upload') }}
                        </div>
                    </x-button.outline-secondary>

                    @if ($this->user->profile_photo_path)
                    <x-button.outline-secondary type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        <div class="w-4 h-4">
                            {{ svg('heroicon-o-trash') }}
                        </div>
                    </x-button.outline-secondary>
                    @endif

                    <x-input.error for="photo" class="mt-2" />
                </div>

            </x-input.section-item>
            @endif

            {{-- input name --}}
            <x-input.section-item for="name" title="Nama Lengkap" class="mt-7">
                <x-input.default wire:model.defer="state.name" type="text" id="name" placeholder="Masukan nama lengkap" autocomplete="name" class="mt-0.5 text-sm" />
                <x-input.error for="name" class="mt-1" />
            </x-input.section-item>

            {{-- input email --}}
            <x-input.section-item for="email" title="E-mail" description="Contoh alamat email example@gmail.com" class="mt-7">
                <x-input.default wire:model.defer="state.email" type="text" id="email" placeholder="Masukan alamat email" autocomplete="email" class="mt-0.5 text-sm" />
                <x-input.error for="email" class="mt-1" />
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
