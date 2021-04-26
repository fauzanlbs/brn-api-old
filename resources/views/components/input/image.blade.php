<div x-data="{photoName: null, photoPreview: null, isUploading: false, progress: 100}" x-on:reset-preview-image.window="
    photoPreview = 'https://ui-avatars.com/api/?name=p&color=7F9CF5&background=EBF4FF';
    $refs.photo.value = '';
    $wire.set('{{$model}}', '')
    " x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" class="col-span-6 sm:col-span-4">
    <input type="file" accept=".png,.jpg,.jpeg" class="hidden" wire:model="{{ $model }}" x-ref="photo" x-on:change="
            photoName = $refs.photo.files[0].name;
            const reader = new FileReader();
            reader.onload = (e) => {
                photoPreview = e.target.result;
            };
            reader.readAsDataURL($refs.photo.files[0]);
    " />

    <div class="mt-1 bg-gray-200 border-gray-300 rounded h-28 w-28" x-show="!photoPreview" style="display: none">
        <img src="{{ htmlspecialchars_decode($image) }}" data-src-original="{{ htmlspecialchars_decode($image) }}" onclick="showImage(event)" class="object-cover w-full h-full tracking-tight text-gray-400 truncate rounded">
    </div>

    <div class="mt-1" x-show="photoPreview">
        <span class="block bg-gray-200 border border-gray-300 rounded w-28 h-28" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
        </span>
    </div>

    <div x-show="!isUploading || progress == 100 || photoPreview == null">
        <x-button.outline-secondary type="button" class="mt-2 mr-1.5" x-on:click.prevent="$refs.photo.click()">
            <div class="h-4 w-4 mx-0.5">
                {{ svg('heroicon-o-upload') }}
            </div>
        </x-button.outline-secondary>

        @if (isset($withDelete))
        @if ($model)
        <x-button.outline-secondary type="button" class="mt-2" wire:click="deleteProfilePhoto">
            <div class="w-4 h-4">
                {{ svg('heroicon-o-trash') }}
            </div>
        </x-button.outline-secondary>
        @endif
        @endif
    </div>

    <div x-show="isUploading && progress != 100 && photoPreview != null" style="display: none">
        <x-button.outline-secondary type="button" class="mt-2" disable style="
            padding-top: 6px;
            padding-bottom: 6px;
        ">
            <span class="my-0.5" x-text="(progress == 100 ?  '0%' : progress+'%')"></span>
        </x-button.outline-secondary>
    </div>

    <x-input.error for="{{$model}}" class="mt-2" />
</div>
