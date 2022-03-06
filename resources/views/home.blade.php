<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Algor</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
    <div class="bg-white">
        <header class="relative bg-white">
            <nav aria-label="Top" class="mx-auto px-4 sm:px-6 lg:px-16">
                <div class="border-b border-gray-200">
                    <div class="h-16 flex items-center">
                        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                        <button type="button" class="bg-white p-2 rounded-md text-gray-400 lg:hidden">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <!-- Logo -->
                        <div class="ml-4 flex lg:ml-0">
                            <a href="/" class="flex flex-row">
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                                    alt="">
                                <span class="ml-2 flex items-end text-xl font-bold">Hotel Algor.</span>
                            </a>
                        </div>

                        <!-- Flyout menus -->
                        <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                            <div class="h-full flex space-x-8">
                                <div class="flex">
                                    <div class="relative flex">
                                        <button type="button"
                                            class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                            aria-expanded="false">Kamar</button>
                                    </div>
                                </div>
                                <a href="#"
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


        <!-- Section 1 -->
        <section class="px-2 py-32 bg-white md:px-0">
            <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap items-center sm:-mx-3">
                    <div class="w-full md:w-1/2 md:px-3">
                        <div
                            class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                            <h1
                                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                                <span
                                    class="block bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 xl:inline">Discover
                                    The
                                    Perfect Balance
                                </span>
                                <span class="block  xl:inline">Of Hospitality, Luxury And
                                    Comfort.</span>
                            </h1>
                            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Kami fokus
                                untuk menyediakan klien dengan tingkat kenyamanan tertinggi dan harga terjangkau yang
                                sangat baik
                            </p>
                            <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                                <button
                                    class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto"
                                    type="button" data-modal-toggle="defaultModal">
                                    Pesan Kamar sekarang!
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                            <img
                                src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 1 -->
        <div class="container items-center max-w-6xl px-10 py-16 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading">
                            Enjoy your stay
                            at our hotel
                        </h2>
                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Kami lebih dari sekedar hotel
                            karena kami mampu menggabungkan standar kualitas sebuah hotel dengan keunggulan sebuah
                            apartemen.</p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path
                                        d="M16 29.3333C23.3638 29.3333 29.3333 23.3638 29.3333 16C29.3333 8.63619 23.3638 2.66666 16 2.66666C8.63619 2.66666 2.66666 8.63619 2.66666 16C2.66666 23.3638 8.63619 29.3333 16 29.3333Z"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M16 8V16L21.3333 18.6667" stroke="#6366F1" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span class="font-medium text-gray-500">24 hours Room Service</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    width="32" height="34" viewBox="0 0 32 34" fill="none">
                                    <path
                                        d="M16 11.3333C22.6274 11.3333 28 9.43055 28 7.08334C28 4.73613 22.6274 2.83334 16 2.83334C9.37258 2.83334 4 4.73613 4 7.08334C4 9.43055 9.37258 11.3333 16 11.3333Z"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M28 17C28 19.3517 22.6667 21.25 16 21.25C9.33333 21.25 4 19.3517 4 17"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M4 7.08334V26.9167C4 29.2683 9.33333 31.1667 16 31.1667C22.6667 31.1667 28 29.2683 28 26.9167V7.08334"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <span class="font-medium text-gray-500">Fitness and Spa</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <path
                                        d="M25.5 11.3333H26.9167C28.4196 11.3333 29.8609 11.9304 30.9236 12.9931C31.9863 14.0558 32.5833 15.4971 32.5833 17C32.5833 18.5029 31.9863 19.9442 30.9236 21.0069C29.8609 22.0697 28.4196 22.6667 26.9167 22.6667H25.5"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M2.83333 11.3333H25.5V24.0833C25.5 25.5862 24.903 27.0276 23.8403 28.0903C22.7776 29.153 21.3362 29.75 19.8333 29.75H8.49999C6.9971 29.75 5.55576 29.153 4.49306 28.0903C3.43035 27.0276 2.83333 25.5862 2.83333 24.0833V11.3333Z"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M8.5 1.41666V5.66666" stroke="#6366F1" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.1667 1.41666V5.66666" stroke="#6366F1" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M19.8333 1.41666V5.66666" stroke="#6366F1" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span class="font-medium text-gray-500">Restaurant and Bars</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    width="29" height="29" viewBox="0 0 29 29" fill="none">
                                    <path
                                        d="M6.04167 15.1646C8.43002 13.1753 11.44 12.0859 14.5483 12.0859C17.6566 12.0859 20.6667 13.1753 23.055 15.1646"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M1.71584 10.875C5.2471 7.76228 9.79269 6.04486 14.5 6.04486C19.2073 6.04486 23.7529 7.76228 27.2842 10.875"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M10.3071 19.4663C11.5338 18.5947 13.0013 18.1265 14.506 18.1265C16.0108 18.1265 17.4783 18.5947 18.705 19.4663"
                                        stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M14.5 24.1667H14.5121" stroke="#6366F1" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span class="font-medium text-gray-500">Free Wi-Fi Access
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                    <div class="w-full h-full bg-red-200">
                        <img src="https://i.ibb.co/cbyDY74/pexels-max-vakhtbovych-6782351-1-1.png"
                            alt="apartment design" class="w-full sm:block hidden" />
                        <img src="https://i.ibb.co/ZVPGjGJ/pexels-max-vakhtbovych-6782351-1.png" alt="apartment design"
                            class="sm:hidden block w-full" />
                    </div>
                    <div
                        class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 lg:gap-8 gap-6 lg:mt-8 md:mt-6 mt-4">
                        <img src="https://i.ibb.co/4Jrp5TB/pexels-max-vakhtbovych-6782370-1.png" class="w-full"
                            alt="kitchen" />
                        <img src="https://i.ibb.co/0Jv3FSy/pexels-max-vakhtbovych-6436799-1-1.png"
                            class="w-full" alt="sitting room" />
                    </div>
                </div>
            </div>
        </div>


        <!-- Section 1 -->
        <section class="flex items-center justify-center py-16 bg-gray-100 min-w-screen">
            <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10">
                <div class="flex flex-col items-center lg:flex-row">
                    <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
                        <h2
                            class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                            Apa kata mereka?</h2>
                        <p class="my-6 text-lg text-gray-600">Kami sangat bangga dengan layanan yang kami tawarkan
                            kepada pelanggan kami. Baca setiap kata dari pelanggan kami yang senang.</p>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <blockquote
                            class="flex items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z">
                                        </path>
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">Kata-kata
                                        tidak dapat menjelaskan jenis perawatan yang saya terima dari manajemen hotel
                                        berbintang. Mereka adalah yang terbaik di negara ini.</p>
                                </div>

                                <h3
                                    class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                                    Jane Doe
                                    <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- Depok</span>
                                </h3>
                            </div>
                        </blockquote>
                        <blockquote
                            class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z">
                                        </path>
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">Hotel
                                        berbintang membuat Anda merasakan kualitas kamar terbaik yang membuat Anda
                                        merasakan kenyamanan rumah sendiri.</p>
                                </div>
                                <h3
                                    class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                                    John Doe
                                    <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO Bukit Algoritma
                                        4.0</span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                        </blockquote>
                        <blockquote
                            class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z">
                                        </path>
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">My Family
                                        and I are very happy when we lodge into star hotels. They are by far the best in
                                        the universe.</p>
                                </div>

                                <h3
                                    class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                                    Anon
                                    <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- Memer</span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section 1 -->
        <section class="py-20 bg-white">
            <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl xl:text-6xl">
                    Pesan lebih Awal, Hemat lebih Banyak
                </h2>
                <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Pesan sekarang dan hemat lebih banyak. Tunggu apa lagi, pesan awal kamar Anda segera untuk dapatkan
                    diskon khusus hingga 20%! S&K Berlaku.
                </p>
                <div class="flex justify-center mt-8 space-x-3">
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-700">Pesan
                        Sekarang!</a>
                </div>
            </div>
        </section>

        <!-- Section 1 -->
        <section class="text-gray-700 bg-white body-font">
            <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
                <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">Algor<span
                        class="text-indigo-600">.</span></a>
                <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">© 2022
                    Algoritma Hotel. All rights reserved.</p>
                </p>
                <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                </span>
            </div>
        </section>

        <!-- Main modal -->
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
                    <div class="p-6 space-y-6">
                        <ol class="items-center hidden sm:flex">
                            <li class="relative mb-6 sm:mb-0 w-full">
                                <div class="flex items-center">
                                    <div
                                        class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg" aria-selected="true">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                    </div>
                                </div>
                                <div class="mt-3 sm:pr-8">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Data diri</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0 w-full">
                                <div class="flex items-center">
                                    <div
                                        class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>
                                <div class="mt-3 sm:pr-8">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Memilih kamar</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0 w-full">
                                <div class="flex items-center">
                                    <div
                                        class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>
                                <div class="mt-3 sm:pr-8">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Atur jadwal</h3>
                                </div>
                            </li>
                        </ol>
                        <hr>
                        <div id="myTabContent">
                            <form>
                                <div class="p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                    <div class="grid xl:grid-cols-2 xl:gap-6">
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
                                <div class="hidden p-4" id="dashboard" role="tabpanel"
                                    aria-labelledby="dashboard-tab">
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
                                <div class="hidden p-4 " id="settings" role="tabpanel"
                                    aria-labelledby="settings-tab">

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
                                    <div class="flex justify-end content-end mt-2">
                                        <button type="button"
                                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Konfirmasi
                                            pesanan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b" id="myTab" data-tabs-toggle="#myTabContent"
                        role="tablist">
                        <button
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white active"
                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="true">
                            Data diri
                        </button>
                        <button
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">
                            Memilih kamar
                        </button>
                        <button
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">
                            Atur jadwal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        \
    </script>
</body>

</html>
