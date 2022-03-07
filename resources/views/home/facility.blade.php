@extends('home.layouts.app')
@section('title', 'Kamar')
@section('content')
    <div
        class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
        <div>
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Fasilitas
            </h2>
            <p class="mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dicta animi
                distinctio itaque pariatur earum repellendus dignissimos soluta dolorem nemo, obcaecati facere. Distinctio,
                consectetur?</p>

            <div class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">

                @foreach ($fasilitas as $facilities)
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">{{ $facilities->nama_fasilitas }}</dt>
                        <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                            quasi sint a molestias consequuntur beatae placeat?</dd>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="grid sm:grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
            <img src="{{ $fasilitas->gambar }}"
                alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                class="bg-gray-100 rounded-lg">
            <img src="{{ $fasilitas->gambar }}"
                alt="Top down view of walnut card tray with embedded magnets and card groove."
                class="bg-gray-100 rounded-lg">
            <img src="{{ $fasilitas->gambar }}" alt="Side of walnut card tray with card groove and recessed card area."
                class="bg-gray-100 rounded-lg">
            <img src="{{ $fasilitas->gambar }}"
                alt="Walnut card tray filled with cards and card angled in dedicated groove."
                class="bg-gray-100 rounded-lg">
        </div>
    </div>

    <div class="p-8">
        @foreach ($fasilitas as $facilities)
            <div class="container mx-auto py-9 md:py-12 lg:py-24">
                <div class="flex flex-col lg:flex-row justify-center items-strech mx-4">
                    <div class="lg:w-4/12 flex justify-center items-center">
                        <div>
                            <h1 class="dark:text-white text-4xl md:text-5xl xl:text-6xl font-semibold text-gray-900 w-7/12">
                                {{ $facilities->nama_fasilitas }}
                            </h1>
                        </div>
                    </div>
                    <div class="lg:w-8/12 mt-6 md:mt-8 lg:mt-0">
                        <div class="relative w-full h-full">
                            <img src="{{ $facilities->gambar }}" alt="A lounge sofa" role="img"
                                class="w-full h-full relative hidden lg:block" />
                            <img src="{{ $facilities->gambar }}" alt="A lounge sofa" role="img"
                                class="w-full h-full lg:hidden" />
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
