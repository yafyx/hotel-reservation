<!-- Booking modal -->
<div id="defaultModal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full">
    <div class="relative px-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                    Reservasi
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div x-data="app()" x-cloak>
                <div class="max-w-3xl mx-auto">

                    <div x-show.transition="step === 'complete'">
                        <div class="p-6">
                            <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Booking kamar berhasil!
                            </h2>

                            <div class="text-gray-600 mb-8">
                                Terimakasih telah memilih hotel kami. <br> Jangan lupa untuk menyerahkan bukti
                                reservasi
                                dengan mendownload di bawah ini.
                            </div>

                            <button @click="step = 1"
                                class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Kembali
                            </button>
                        </div>
                    </div>

                    <div x-show.transition="step != 'complete'">
                        <div class="border-b-2 p-4">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="flex-1">
                                    <ol class="items-center hidden sm:flex">
                                        <li class="relative mb-6 sm:mb-0 w-full">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                        aria-selected="true">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div x-show="step === 1" x-if="step === 1"
                                                    class="hidden sm:flex w-full bg-blue-600 h-0.5 dark:bg-gray-700">
                                                </div>
                                                <div x-show="step !== 1"
                                                    class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                                </div>
                                            </div>

                                            <div class="mt-3 sm:pr-8">
                                                <h3 x-show="step === 1" x-if="step === 1"
                                                    class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Data diri</h3>
                                                <h3 x-show="step !== 1"
                                                    class="text-lg font-semibold text-gray-400 dark:text-white">
                                                    Data diri</h3>
                                            </div>
                                        </li>
                                        <li class="relative mb-6 sm:mb-0 w-full">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                        aria-selected="true">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div x-show="step === 2" x-if="step === 2"
                                                    class="hidden sm:flex w-full bg-blue-600 h-0.5 dark:bg-gray-700">
                                                </div>
                                                <div x-show="step !== 2"
                                                    class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                                </div>
                                            </div>
                                            <div class="mt-3 sm:pr-8">
                                                <h3 x-show="step === 2" x-if="step === 2"
                                                    class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Memilih kamar</h3>
                                                <h3 x-show="step !== 2"
                                                    class="text-lg font-semibold text-gray-400 dark:text-white">
                                                    Memilih kamar</h3>
                                            </div>
                                        </li>
                                        <li class="relative mb-6 sm:mb-0 w-full">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                        aria-selected="true">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div x-show="step === 3" x-if="step === 3"
                                                    class="hidden sm:flex w-full bg-blue-600 h-0.5 dark:bg-gray-700">
                                                </div>
                                                <div x-show="step !== 3"
                                                    class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                                </div>
                                            </div>
                                            <div class="mt-3 sm:pr-8">
                                                <h3 x-show="step === 3" x-if="step === 3"
                                                    class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Tentukan tanggal</h3>
                                                <h3 x-show="step !== 3"
                                                    class="text-lg font-semibold text-gray-400 dark:text-white">
                                                    Tentukan tanggal</h3>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>


                        <div x-show.transition.in="step === 1">
                            <div class="p-4">
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="email" name="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label for="floating_email"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                        Pemesan</label>
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="email" name="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label for="floating_email"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                        tamu</label>
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="email" name="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label for="floating_email"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone"
                                        id="floating_phone"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label for="floating_phone"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                                        Telepon</label>
                                </div>
                            </div>
                        </div>
                        <div x-show.transition.in="step === 2">
                            <div class="p-4">
                                <div class="grid xl:grid-cols-3 xl:gap-6">
                                    <div class="relative z-0 mb-6 w-full group">
                                        <label for="jumlah"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jumlah
                                            kamar</label>
                                        <input type="number" id="jml_kamar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="relative z-0 mb-6 w-full group">
                                        <label for="countries"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipe
                                            kamar</label>
                                        <select id="countries"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option>Standar</option>
                                            <option>Executive</option>
                                            <option>King Suites</option>
                                        </select>
                                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Hanya bisa
                                            memesan tipe kamar yang sama saat melakukan pemesanan lebih dari 1 kamar
                                            dalam 1 kali pemesanan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show.transition.in="step === 3">
                            <div class="p-4">
                                <div date-rangepicker class="flex items-center">
                                    <div class="relative">
                                        <div
                                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        </div>
                                        <input name="start" type="date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                            placeholder="Select date start">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
                                        <div
                                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        </div>
                                        <input name="end" type="date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                            placeholder="Select date end">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="p-6 flex rounded-b" x-show="step != 'complete'">
                    <div class="w-1/2">
                        <button x-show="step > 1" @click="step--"
                            class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Sebelumnya</button>
                    </div>

                    <div class="w-1/2 text-right">
                        <button x-show="step < 3" @click="step++"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Selanjutnya</button>

                        <button @click="step = 'complete'" x-show="step === 3"
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Konfirmasi
                            Booking</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        function app() {
            return {
                step: 1,
            }
        }
    </script>
@endpush
