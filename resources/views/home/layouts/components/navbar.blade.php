<header class="relative bg-white">
    <nav aria-label="Top" class="mx-auto px-4 sm:px-6 lg:px-16">
        <div class="border-b border-gray-200">
            <div class="h-16 flex items-center">
                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                <button type="button" class="bg-white p-2 rounded-md text-gray-400 lg:hidden">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Logo -->
                <div class="ml-4 flex lg:ml-0">
                    <a href="/" class="flex flex-row">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="32"
                            height="32" viewBox="0 0 32 32">
                            <path
                                d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm7.07-24l-4.574 4.523a3.556 3.556 0 01-4.996 0L8.93 8H6.035l6.02 5.957a5.621 5.621 0 007.89 0L25.961 8h-2.89zM8.895 24.563L13.504 20a3.556 3.556 0 014.996 0l4.605 4.563H26l-6.055-5.993a5.621 5.621 0 00-7.89 0L6 24.562h2.895z">
                            </path>
                        </svg>
                        <span class="ml-2 flex items-end text-xl font-bold">Hotel Algor.</span>
                    </a>
                </div>

                <!-- Flyout menus -->
                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                    <div class="h-full flex space-x-8">
                        <div class="flex">
                            <div class="relative flex">
                                <a type="button" href="{{ route('rooms') }}"
                                    class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                    aria-expanded="false">Kamar</a>
                            </div>
                        </div>
                        <a href="{{ route('facilities') }}"
                            class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Fasilitas</a>
                    </div>
                </div>

                <div class="ml-auto flex items-center">
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        <button
                            class="flex items-center w-full text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                            type="button" data-modal-toggle="defaultModal">
                            Pesan kamar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
