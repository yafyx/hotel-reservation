@extends('home.layouts.app')
@section('title', 'Kamar')
@section('content')
    <div class="bg-gray-100">
        <div class="mx-auto container p-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mb-4 ml-4">Our Rooms</h2>
            <div class="flex flex-wrap items-center sm:gap-6 justify-center py-4">
                @foreach ($kamar as $rooms)
                    <div
                        class="w-96 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 ">
                        <div id="indicators-carousel" class="relative shadow-2xl" data-carousel="static">
                            <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                                @foreach (json_decode($rooms->gambar) as $gambar)
                                    <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                                        data-carousel-item="active">
                                        <img src="{{ asset('storage/' . $gambar) }}"
                                            class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2"
                                            alt="{{ asset('storage/' . $gambar) }}">
                                    </div>
                                @endforeach
                            </div>

                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                @foreach (json_decode($rooms->gambar) as $gambar)
                                    <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800"
                                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                @endforeach
                            </div>

                            <button type="button"
                                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev="">
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7">
                                        </path>
                                    </svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-next="">
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7">
                                        </path>
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>

                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $rooms->tipe_kamar }}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $rooms->deskripsi_kamar }}
                            </p>
                            @foreach (json_decode($rooms->fasilitas) as $item)
                                <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">
                                    {{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
