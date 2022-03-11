<div class="p-6">
    <div class="py-2">
        @if ($reservasiId)
            <ol class="relative border-l border-gray-200 dark:border-gray-700">
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400">{{ $reservasiTgl }}</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Booking</h3>
                    <p class="mb-2 text-sm font-normal text-gray-500 dark:text-gray-400">
                        <span class="font-semibold">
                            {{ $reservasi->GetTamu->nama_pemesan }}
                        </span>
                        melakukan booking kamar untuk
                        <span class="font-semibold">
                            {{ $reservasiNama }}.
                        </span>
                        <br>
                        <span class="flex flex-col">
                            <p class="text-sm text-gray-500">
                                Rincian booking:
                            </p>
                            <p class="text-sm text-gray-500">
                                {{ $reservasi->jumlah_kamar }} kamar {{ $reservasiTipeKamar }}
                            </p>
                        </span>
                    </p>
                </li>
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time
                        class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $reservasiCheckin }}</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Check-in</h3>
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        {{ $reservasiNama }} telah melakukan checkin kamar.
                    </p>
                </li>
                <li class="ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time
                        class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $reservasiCheckout }}</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Check-out</h3>
                    @if ($reservasi->status == '0')
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                            {{ $reservasiNama }} telah melakukan checkout kamar
                            {{ \Carbon\Carbon::parse($reservasi->tgl_checkout)->diffForHumans() }}.
                        </p>
                    @elseif ($reservasi->status == '1')
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                            {{ \Carbon\Carbon::parse($reservasi->tgl_checkout)->diffForHumans() }}
                        </p>
                    @endif
                </li>
            </ol>
        @endif
        <div class="space-x-2 flex justify-end mt-4">
            <button
                class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800"
                wire:click.self="cancel">
                Tutup
            </button>
        </div>

    </div>
</div>
