@extends('home.layouts.app')
@section('title', 'Detail Booking')
@section('content')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center bg-no-repeat bg-cover"
        style="background-image: url('https://source.unsplash.com/random/?hotel')">
        <div class="relative py-3 mx-auto">
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-60 border border-gray-200"
                style="backdrop-filter: blur(20px);">
                <div class="mx-auto max-w-4xl">
                    <h1 class="font-bold text-5xl">Algor.</h1>
                    <p class="text-md mt-2 font-light">Jl. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque.
                    </p>
                    <div class="flex justify-end">
                        <a href="{{ route('booking.unduhPDF', ['booking_id' => $reservasi->booking_id]) }}"
                            target="_blank"
                            class="inline-flex items-center text-sm font-medium text-blue-500 hover:opacity-75 ">Unduh PDF
                            <svg class="ml-0.5 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                </path>
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-3">
                        <div class="py-8 leading-6 space-y-4">
                            <p class="text-md">Booking ID</p>
                            <p class="text-3xl font-bold">
                                {{ $reservasi->booking_id }}
                            </p>
                        </div>
                        <div class="py-8 leading-6 space-y-4 text-right">
                            <p class="text-md font-light">Check-in</p>
                            <p class="text-2xl">
                                {{ \Carbon\Carbon::parse($reservasi->tgl_checkin)->format('d M Y') }}
                            </p>
                        </div>
                        <div class="py-8 leading-6 space-y-4 text-right">
                            <p class="text-md font-light">Check-out</p>
                            <p class="text-2xl">
                                {{ \Carbon\Carbon::parse($reservasi->tgl_checkout)->format('d M Y') }}
                            </p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                                height="150" viewBox="-55.5 0 367 367" version="1.1" preserveAspectRatio="xMidYMid">
                                <g>
                                    <path
                                        d="M70.5853976,271.865254 C81.1995596,285.391378 90.8598594,299.639537 99.4963338,314.50654 C106.870174,328.489419 109.94381,337.97007 115.333495,354.817346 C118.638014,364.124835 121.625069,366.902652 128.046515,366.902652 C135.045169,366.902652 138.219816,362.176756 140.672953,354.867852 C145.766819,338.95854 149.763988,326.815514 156.069992,315.343493 C168.443902,293.193112 183.819296,273.510299 198.927732,254.592287 C203.018698,249.238677 229.462067,218.047767 241.366994,193.437035 C241.366994,193.437035 255.999233,166.402027 255.999233,128.645368 C255.999233,93.3274168 241.569017,68.8321265 241.569017,68.8321265 L200.024428,79.9578224 L174.793197,146.408963 L168.552129,155.57215 L167.303915,157.231625 L165.64444,159.309576 L162.729537,162.628525 L158.56642,166.791642 L136.098575,185.09637 L79.928962,217.528279 L70.5853976,271.865254 Z"
                                        fill="#34A853"></path>
                                    <path
                                        d="M12.6120081,188.891517 C26.3207125,220.205084 52.7568668,247.730719 70.6431185,271.8869 L165.64444,159.352866 C165.64444,159.352866 152.260416,176.856717 127.981579,176.856717 C100.939355,176.856717 79.0920095,155.2619 79.0920095,128.032084 C79.0920095,109.359386 90.325932,96.5309245 90.325932,96.5309245 L25.8373003,113.811107 L12.6120081,188.891517 Z"
                                        fill="#FBBC04"></path>
                                    <path
                                        d="M166.705061,5.78651629 C198.256727,15.959818 225.262874,37.3165365 241.597878,68.8104812 L165.673301,159.28793 C165.673301,159.28793 176.907223,146.228586 176.907223,127.671329 C176.907223,99.8065834 153.443693,78.990998 128.09702,78.990998 C104.128433,78.990998 90.3620076,96.4659886 90.3620076,96.4659886 L90.3620076,39.4666386 L166.705061,5.78651629 Z"
                                        fill="#4285F4"></path>
                                    <path
                                        d="M30.0148476,45.7654275 C48.8607087,23.2182162 82.0213432,0 127.736265,0 C149.915506,0 166.625695,5.82259183 166.625695,5.82259183 L90.2898565,96.5164943 L36.2054099,96.5164943 L30.0148476,45.7654275 Z"
                                        fill="#1A73E8"></path>
                                    <path
                                        d="M12.6120081,188.891517 C12.6120081,188.891517 0,164.194204 0,128.414485 C0,94.5972757 13.145926,65.0369799 30.0148476,45.7654275 L90.3331471,96.5237094 L12.6120081,188.891517 Z"
                                        fill="#EA4335"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xl">Detail pemesanan</p>
                            </p>
                            <div class="flex justify-between border-b py-4">
                                <p>
                                    Tamu
                                </p>
                                <p>
                                    {{ $reservasi->nama_tamu }}
                                </p>
                            </div>
                            <div class="flex justify-between pt-4">
                                <p>
                                    Tipe kamar
                                </p>
                                <p>
                                    {{ $reservasi->GetKamar->tipe_kamar }}
                                </p>
                            </div>
                            <div class="flex justify-between my-2">
                                <p>
                                    Jumlah kamar
                                </p>
                                <p>
                                    {{ $reservasi->jumlah_kamar }}
                                </p>
                            </div>
                            <div class="flex justify-between space-x-10">
                                <p>
                                    Tambahan
                                </p>
                                <p class="break-all text-right">
                                    {{ implode(', ', json_decode($reservasi->permintaan_khusus)) }}
                                </p>
                            </div>
                        </div>
                        <div class="col-span-3 mt-20 space-y-4">
                            <div>
                                <p class="text-xl font-bold">Kebijakan Pembatalan Hotel
                                </p>
                                <ul class="list-disc">
                                    <li>Tanggal inap dan tipe kamar tidak dapat diubah</li>
                                </ul>
                            </div>

                            <div>
                                <p class="text-xl font-bold">
                                    Catatan Penting
                                </p>
                                <ul class="list-disc">
                                    <li>
                                        Jangan lupa untuk menyerahkan bukti pembayaran kepada kami sebelum check-in
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
