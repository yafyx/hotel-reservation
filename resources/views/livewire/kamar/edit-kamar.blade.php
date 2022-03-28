<div class="p-6">
    <div class="py-2">
        @if ($kamarId)
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipe
                    kamar</label>
                <input type="text" wire:model="tipeKamar" value="{{ $tipeKamar }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                    Deskripsi kamar
                </label>
                <textarea name="deskripsi_kamar" rows="4" wire:model="deskripsiKamar"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </textarea>
            </div>
            <div class="mb-6">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                    Fasilitas
                </label>

                <fieldset>
                    @foreach ($fasilitas as $item)
                        <div class="flex items-center mb-4">
                            <input type="checkbox" value="{{ $item->nama_fasilitas }}" wire:model="selectedFasilitas"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ $item->nama_fasilitas }}</label>
                        </div>
                    @endforeach
                    @error('selectedFasilitas')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                </div>
            @enderror
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Sudah terpilih:
                <span class="font-semibold text-black">
                    {{ $fasilitasKamar }}
                </span>
            </p>
            </fieldset>
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
            Harga kamar
        </label>
        <div class="flex">
            <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                Rp.
            </span>
            <input id="hargaKamar" type="text" autocomplete="off" wire:model="harga"
                class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload
            gambar</label>
        <input wire:model="images" multiple
            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="user_avatar_help" id="user_avatar" type="file">
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
            File yang diupload harus berupa gambar dengan format .jpg, .jpeg, .png, .gif, atau .svg.
        </div>

        @if (is_array($images) || is_object($images))
            @if ($images)
                <div class="row">
                    @foreach ($images as $images)
                        <div class="col-3 card me-1 mb-1">
                            <img src="{{ $images->temporaryUrl() }}">
                        </div>
                    @endforeach
                </div>
            @endif
        @endif
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
            Jumlah Kamar
        </label>
        <input type="number" wire:model="jumlahKamar" value="{{ $jumlahKamar }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required>
    </div>
    @endif
    <div class="space-x-2 flex justify-end mt-4">
        <button
            class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800"
            wire:click.self="cancel">
            Batal
        </button>
        <button type="button" wire:click="update({{ $kamarId }})"
            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Simpan
        </button>
    </div>
</div>
<script>
    var hargaKamar = document.getElementById('hargaKamar');
    hargaKamar.addEventListener('keyup', function(e) {
        var value = e.target.value;
        value = value.replace(/\D/g, '');
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        e.target.value = value;
    });
</script>
