<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                @if (auth()->user()->isAdmin == 0)
                    <a href="{{ route('rsp.reservasi') }}"
                        class="flex flex-col items-center bg-gray-100 border shadow-md hover:bg-gray-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="/docs/images/blog/image-4.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data
                                reservasi
                                hotel</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lihat dan edit data reservasi
                                hotel.
                            </p>
                        </div>
                    </a>
                @else
                    <div class="flex flex-row">
                        <a href="{{ route('admin.fasilitas') }}"
                            class="flex flex-col items-center w-full bg-gray-100 border shadow-md hover:bg-gray-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Fasilitas Hotel</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lihat dan edit data
                                    fasilitas hotel.
                                </p>
                            </div>
                        </a>
                        <a href="{{ route('admin.kamar.fasilitas') }}"
                            class="flex flex-col items-center w-full bg-gray-100 border shadow-md hover:bg-gray-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Fasilitas Kamar</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lihat dan edit data
                                    fasilitas kamar.
                                </p>
                            </div>
                        </a>
                        <a href="{{ route('admin.kamar.tipe') }}"
                            class="flex flex-col items-center w-full bg-gray-100 border shadow-md hover:bg-gray-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Tipe Kamar</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lihat dan edit data
                                    tipe kamar.
                                </p>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
