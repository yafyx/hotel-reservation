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
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                        <span class="ml-2 flex items-end text-xl font-bold">Hotel Algor.</span>
                    </a>
                </div>

                <!-- Flyout menus -->
                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                    <div class="h-full flex space-x-8">
                        <div class="flex">
                            <div class="relative flex">
                                <a type="button" href="{{ route('rooms.index') }}"
                                    class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                    aria-expanded="false">Kamar</a>
                            </div>
                        </div>
                        <a href="{{ route('facilities.index') }}"
                            class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Fasilitas</a>
                    </div>
                </div>

                <div class="ml-auto flex items-center">
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        <a href="{{ route('login') }}"
                            class="text-sm font-medium text-gray-700 hover:text-gray-800">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
