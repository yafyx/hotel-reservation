@extends('home.layouts.app')
@section('title', 'Kamar')
@section('content')
    <div class="bg-gray-100">
        <div class="mx-auto container p-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mb-4 ml-4">Our Rooms</h2>
            <div class="flex flex-wrap items-center sm:gap-6 justify-center py-4">
                <!-- Card-->
                @foreach ($kamar as $rooms)
                    <div class="mx-2 w-96 mb-8 hover:shadow-2xl transition-all">
                        <div>
                            <img alt="person capturing an image"
                                src="https://images.unsplash.com/flagged/photo-1556438758-8d49568ce18e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8aG90ZWwlMjByb29tfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                tabindex="0" class="focus:outline-none w-full h-44" />
                        </div>
                        <div class="bg-white">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">
                                        {{ $rooms->tipe_kamar }}</h2>
                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">
                                    {{ $rooms->fasilitas }}</p>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Free Wifi</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            King Bed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Ends -->
                @endforeach
            </div>
        </div>
    </div>


@endsection
