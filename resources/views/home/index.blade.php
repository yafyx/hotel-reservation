@extends('home.layouts.app')
@section('title', 'Home')
@section('content')
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
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto"
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

    <!-- Fasilitas -->
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
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="32"
                                height="32" viewBox="0 0 32 32" fill="none">
                                <path
                                    d="M16 29.3333C23.3638 29.3333 29.3333 23.3638 29.3333 16C29.3333 8.63619 23.3638 2.66666 16 2.66666C8.63619 2.66666 2.66666 8.63619 2.66666 16C2.66666 23.3638 8.63619 29.3333 16 29.3333Z"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16 8V16L21.3333 18.6667" stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span class="font-medium text-gray-500">24 hours Room Service</span>
                        </li>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="32"
                                height="34" viewBox="0 0 32 34" fill="none">
                                <path
                                    d="M16 11.3333C22.6274 11.3333 28 9.43055 28 7.08334C28 4.73613 22.6274 2.83334 16 2.83334C9.37258 2.83334 4 4.73613 4 7.08334C4 9.43055 9.37258 11.3333 16 11.3333Z"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M28 17C28 19.3517 22.6667 21.25 16 21.25C9.33333 21.25 4 19.3517 4 17"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M4 7.08334V26.9167C4 29.2683 9.33333 31.1667 16 31.1667C22.6667 31.1667 28 29.2683 28 26.9167V7.08334"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="font-medium text-gray-500">Fitness and Spa</span>
                        </li>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="34"
                                height="34" viewBox="0 0 34 34" fill="none">
                                <path
                                    d="M25.5 11.3333H26.9167C28.4196 11.3333 29.8609 11.9304 30.9236 12.9931C31.9863 14.0558 32.5833 15.4971 32.5833 17C32.5833 18.5029 31.9863 19.9442 30.9236 21.0069C29.8609 22.0697 28.4196 22.6667 26.9167 22.6667H25.5"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M2.83333 11.3333H25.5V24.0833C25.5 25.5862 24.903 27.0276 23.8403 28.0903C22.7776 29.153 21.3362 29.75 19.8333 29.75H8.49999C6.9971 29.75 5.55576 29.153 4.49306 28.0903C3.43035 27.0276 2.83333 25.5862 2.83333 24.0833V11.3333Z"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M8.5 1.41666V5.66666" stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M14.1667 1.41666V5.66666" stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M19.8333 1.41666V5.66666" stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span class="font-medium text-gray-500">Restaurant and Bars</span>
                        </li>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="29"
                                height="29" viewBox="0 0 29 29" fill="none">
                                <path
                                    d="M6.04167 15.1646C8.43002 13.1753 11.44 12.0859 14.5483 12.0859C17.6566 12.0859 20.6667 13.1753 23.055 15.1646"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M1.71584 10.875C5.2471 7.76228 9.79269 6.04486 14.5 6.04486C19.2073 6.04486 23.7529 7.76228 27.2842 10.875"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M10.3071 19.4663C11.5338 18.5947 13.0013 18.1265 14.506 18.1265C16.0108 18.1265 17.4783 18.5947 18.705 19.4663"
                                    stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14.5 24.1667H14.5121" stroke="#6366F1" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span class="font-medium text-gray-500">Free Wi-Fi Access
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                <div class="w-full h-full bg-red-200">
                    <img src="https://i.ibb.co/cbyDY74/pexels-max-vakhtbovych-6782351-1-1.png" alt="apartment design"
                        class="w-full sm:block hidden" />
                    <img src="https://i.ibb.co/ZVPGjGJ/pexels-max-vakhtbovych-6782351-1.png" alt="apartment design"
                        class="sm:hidden block w-full" />
                </div>
                <div
                    class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 lg:gap-8 gap-6 lg:mt-8 md:mt-6 mt-4">
                    <img src="https://i.ibb.co/4Jrp5TB/pexels-max-vakhtbovych-6782370-1.png" class="w-full"
                        alt="kitchen" />
                    <img src="https://i.ibb.co/0Jv3FSy/pexels-max-vakhtbovych-6436799-1-1.png" class="w-full"
                        alt="sitting room" />
                </div>
            </div>
        </div>
    </div>

    <!-- Review -->
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
                    <blockquote class="flex items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow">
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
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 rounded-md focus:ring-blue-300 dark:focus:ring-blue-800">Pesan
                    Sekarang!</a>
            </div>
        </div>
    </section>

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
                {{-- <div class="p-6 space-y-6">
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
                            <div class="hidden p-4" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
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
                            <div class="hidden p-4 " id="settings" role="tabpanel" aria-labelledby="settings-tab">

                                <div date-rangepicker class="flex items-center">
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        </div>
                                        <input name="start" type="date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                            placeholder="Select date start">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
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
                </div> --}}
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

    <script>
        function app() {
            return {
                step: 1,
            }
        }
    </script>
@endsection
