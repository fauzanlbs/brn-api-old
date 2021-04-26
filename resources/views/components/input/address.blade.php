<div>
    <div class="flex items-center mt-8">
        <x-divider />
        <label class="block w-full ml-3 mr-1 text-sm font-semibold text-gray-500 capitalize">
            Alamat Perusahan
        </label>
        <x-divider />
    </div>

    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-6">
            <x-input.default-with-label wire:model.defer='nama_jalan' input-id="nama_jalan" input-label="Nama jalan" name="nama_jalan" placeholder="....." type="text" class="px-2 py-2 {{ $errors->has('nama_jalan') ? 'border-red-500' : '' }}" label-text="text-sm" />
        </div>
        <div class="col-span-3">
            <x-input.default-with-label wire:model.defer='no_jalan' input-id="no_jalan" input-label="Nomor rumah/kantor" name="no_jalan" placeholder="....." type="text" class="px-2 py-2 {{ $errors->has('no_jalan') ? 'border-red-500' : '' }}" label-text="text-sm" />
        </div>
        <div class="col-span-3">
            <x-input.default-with-label wire:model.defer='kota' input-id="kota" input-label="Kota" name="kota" placeholder="....." type="text" class="px-2 py-2 {{ $errors->has('kota') ? 'border-red-500' : '' }}" label-text="text-sm" />
        </div>
        <div class="col-span-3 sm:col-span-2">
            <x-input.default-with-label wire:model.defer='provinsi' input-id="provinsi" input-label="Provinsi" name="provinsi" placeholder="....." type="text" class="px-2 py-2 {{ $errors->has('provinsi') ? 'border-red-500' : '' }}" label-text="text-sm" />
        </div>
        <div class="col-span-3 sm:col-span-2">
            <x-input.default-with-label wire:model.defer='negara' input-id="negara" input-label="Negara" name="negara" placeholder="....." type="text" class="px-2 py-2 {{ $errors->has('negara') ? 'border-red-500' : '' }}" label-text="text-sm" />
        </div>
        <div class="col-span-3 sm:col-span-2">
            <x-input.default-with-label wire:model.defer='kode_pos' input-id="kode_pos" input-label="Kode Pos" name="kode_pos" placeholder="....." type="text" class="px-2 py-2 {{ $errors->has('kode_pos') ? 'border-red-500' : '' }}" label-text="text-sm" />
        </div>
    </div>

</div>
