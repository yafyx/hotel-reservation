<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
    <!-- Modal header -->
    <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
            Booking
        </h3>
        <button type="button" wire:click="cancel"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="defaultModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                    @if ($errors->any())
                        <svg class="animated w-72 h-72 mx-auto" id="freepik_stories-no-data"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 500 500" version="1.1" xmlns:svgjs="http://svgjs.com/svgjs">
                            <style>
                                svg#freepik_stories-no-data:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-no-data.animated #freepik--background-simple--inject-32 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-no-data.animated #freepik--Device--inject-32 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-no-data.animated #freepik--Clock--inject-32 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-no-data.animated #freepik--file-cabinet--inject-32 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-no-data.animated #freepik--Character--inject-32 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                                    animation-delay: 0s;
                                }

                                @keyframes zoomIn {
                                    0% {
                                        opacity: 0;
                                        transform: scale(0.5);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: scale(1);
                                    }
                                }

                                @keyframes slideRight {
                                    0% {
                                        opacity: 0;
                                        transform: translateX(30px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateX(0);
                                    }
                                }

                                @keyframes lightSpeedLeft {
                                    from {
                                        transform: translate3d(-50%, 0, 0) skewX(20deg);
                                        opacity: 0;
                                    }

                                    60% {
                                        transform: skewX(-10deg);
                                        opacity: 1;
                                    }

                                    80% {
                                        transform: skewX(2deg);
                                    }

                                    to {
                                        opacity: 1;
                                        transform: translate3d(0, 0, 0);
                                    }
                                }

                                @keyframes zoomOut {
                                    0% {
                                        opacity: 0;
                                        transform: scale(1.5);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: scale(1);
                                    }
                                }

                            </style>
                            <g id="freepik--background-simple--inject-32" class="animable"
                                style="transform-origin: 248.164px 245.604px;">
                                <path
                                    d="M429.84,253.51c-3.39-27-11.87-53.07-22-71.76-24.47-44.91-92.64-74.95-144-67.18-43.81,6.62-64.86,46.59-104.36,60.46-36.34,12.76-69.06,22.61-86.19,56.28C37,302.43,125.71,380.18,201.74,374.12c24-1.92,45.44-11.15,70.07-6.82,50,8.79,66.6,18.24,110.76.66C426.08,350.63,435.77,300.74,429.84,253.51Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 248.164px 245.604px;"
                                    id="elrmm0z5dvai" class="animable"></path>
                                <g id="elzkbpxwx7qnr">
                                    <path
                                        d="M429.84,253.51c-3.39-27-11.87-53.07-22-71.76-24.47-44.91-92.64-74.95-144-67.18-43.81,6.62-64.86,46.59-104.36,60.46-36.34,12.76-69.06,22.61-86.19,56.28C37,302.43,125.71,380.18,201.74,374.12c24-1.92,45.44-11.15,70.07-6.82,50,8.79,66.6,18.24,110.76.66C426.08,350.63,435.77,300.74,429.84,253.51Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 248.164px 245.604px;"
                                        class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--Device--inject-32" class="animable"
                                style="transform-origin: 327.66px 296.46px;">
                                <polyline points="254.91 389.43 212.26 293.93 315.61 293.93 443.06 378"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 327.66px 341.68px;"
                                    id="elzl87k80pme" class="animable"></polyline>
                                <polygon points="244.33 385.67 212.26 300.3 212.26 293.93 257.63 393.88 244.33 385.67"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 234.945px 343.905px;"
                                    id="eli631e72kgo" class="animable"></polygon>
                                <polygon points="271.35 297.88 315.31 349.41 261.95 361.84 231.63 304.24 271.35 297.88"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 273.47px 329.86px;"
                                    id="elj2e2ba52xl" class="animable"></polygon>
                                <polygon points="261.95 361.84 261.95 363.36 314.4 352.75 315.31 349.41 261.95 361.84"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 288.63px 356.385px;"
                                    id="eltgxacnyt6ct" class="animable"></polygon>
                                <polygon points="269.69 316.42 271.94 319.74 277.66 318.19 275.28 314.95 269.69 316.42"
                                    style="fill: rgb(38, 50, 56); transform-origin: 273.675px 317.345px;"
                                    id="el3i55ncvzm0e" class="animable"></polygon>
                                <polygon points="291.34 336.73 288.62 333.05 282.12 334.8 284.66 338.56 291.34 336.73"
                                    style="fill: rgb(38, 50, 56); transform-origin: 286.73px 335.805px;"
                                    id="el80g90y2isi7" class="animable"></polygon>
                                <polygon points="265.02 309.5 266.69 311.98 272.07 310.61 270.38 308.31 265.02 309.5"
                                    style="fill: rgb(38, 50, 56); transform-origin: 268.545px 310.145px;"
                                    id="elck2y45znj2w" class="animable"></polygon>
                                <polygon points="275.38 324.83 278.46 329.39 284.75 327.8 281.35 323.19 275.38 324.83"
                                    style="fill: rgb(38, 50, 56); transform-origin: 280.065px 326.29px;"
                                    id="eln8f2yy8kea" class="animable"></polygon>
                                <polygon points="291.67 326.97 286.28 328.34 288.98 332 294.47 330.52 291.67 326.97"
                                    style="fill: rgb(38, 50, 56); transform-origin: 290.375px 329.485px;"
                                    id="elgvh7h5z1ddo" class="animable"></polygon>
                                <polygon points="279.01 330.19 281.58 334.01 288.04 332.26 285.33 328.58 279.01 330.19"
                                    style="fill: rgb(38, 50, 56); transform-origin: 283.525px 331.295px;"
                                    id="elxpn3nuofq6" class="animable"></polygon>
                                <polygon points="258.93 310.85 260.59 313.53 265.75 312.21 264.06 309.71 258.93 310.85"
                                    style="fill: rgb(38, 50, 56); transform-origin: 262.34px 311.62px;"
                                    id="ela7pxvckv9pb" class="animable"></polygon>
                                <polygon points="272.47 320.53 274.85 324.04 280.77 322.4 278.24 318.97 272.47 320.53"
                                    style="fill: rgb(38, 50, 56); transform-origin: 276.62px 321.505px;"
                                    id="el5ej08xnruat" class="animable"></polygon>
                                <polygon points="267.23 312.77 269.15 315.62 274.69 314.16 272.65 311.39 267.23 312.77"
                                    style="fill: rgb(38, 50, 56); transform-origin: 270.96px 313.505px;"
                                    id="el0ua9yax2vw8q" class="animable"></polygon>
                                <polygon points="255.59 319.2 253.91 316.17 247.78 317.73 249.49 320.81 255.59 319.2"
                                    style="fill: rgb(38, 50, 56); transform-origin: 251.685px 318.49px;"
                                    id="elakm319rbkoj" class="animable"></polygon>
                                <polygon points="246.78 326.53 250.99 325.4 249.04 321.88 244.9 322.97 246.78 326.53"
                                    style="fill: rgb(38, 50, 56); transform-origin: 247.945px 324.205px;"
                                    id="eltwpve2ngmg" class="animable"></polygon>
                                <polygon points="257.11 307.91 258.42 310.03 263.51 308.9 262.14 306.88 257.11 307.91"
                                    style="fill: rgb(38, 50, 56); transform-origin: 260.31px 308.455px;"
                                    id="elo9d89kmq4a" class="animable"></polygon>
                                <polygon points="253.45 315.34 251.83 312.42 245.6 313.79 247.32 316.9 253.45 315.34"
                                    style="fill: rgb(38, 50, 56); transform-origin: 249.525px 314.66px;"
                                    id="elm42j7u2uz4" class="animable"></polygon>
                                <polygon points="251.06 309.14 252.3 311.38 257.48 310.24 256.15 308.1 251.06 309.14"
                                    style="fill: rgb(38, 50, 56); transform-origin: 254.27px 309.74px;"
                                    id="elm81k6lmdp2" class="animable"></polygon>
                                <polygon points="242.35 318.17 246.41 317.13 244.67 314 240.62 314.89 242.35 318.17"
                                    style="fill: rgb(38, 50, 56); transform-origin: 243.515px 316.085px;"
                                    id="elv5nf4epyn8p" class="animable"></polygon>
                                <polygon points="243.84 310.62 245.14 312.96 251.37 311.59 250.12 309.33 243.84 310.62"
                                    style="fill: rgb(38, 50, 56); transform-origin: 247.605px 311.145px;"
                                    id="eldoqmvna84vj" class="animable"></polygon>
                                <polygon points="263.41 318.08 265.51 321.47 271.01 319.99 268.76 316.67 263.41 318.08"
                                    style="fill: rgb(38, 50, 56); transform-origin: 267.21px 319.07px;"
                                    id="el4420cdo2fi2" class="animable"></polygon>
                                <polygon points="277.53 329.63 274.46 325.09 268.73 326.67 271.51 331.16 277.53 329.63"
                                    style="fill: rgb(38, 50, 56); transform-origin: 273.13px 328.125px;"
                                    id="elcwht727tm2g" class="animable"></polygon>
                                <polygon points="252.76 312.21 254.36 315.11 259.66 313.76 257.99 311.06 252.76 312.21"
                                    style="fill: rgb(38, 50, 56); transform-origin: 256.21px 313.085px;"
                                    id="eldi6tph0h7y" class="animable"></polygon>
                                <polygon points="253.96 330.74 249.64 331.93 251.88 336.16 256.33 335.03 253.96 330.74"
                                    style="fill: rgb(38, 50, 56); transform-origin: 252.985px 333.45px;"
                                    id="elszldn57k7x" class="animable"></polygon>
                                <polygon points="266.01 322.28 268.23 325.86 273.92 324.3 271.55 320.78 266.01 322.28"
                                    style="fill: rgb(38, 50, 56); transform-origin: 269.965px 323.32px;"
                                    id="el07lrgb2fhnzb" class="animable"></polygon>
                                <polygon points="261.99 317.52 260.16 314.57 254.82 315.93 256.5 318.97 261.99 317.52"
                                    style="fill: rgb(38, 50, 56); transform-origin: 258.405px 316.77px;"
                                    id="elz8ymbh388h" class="animable"></polygon>
                                <polygon points="272.02 348.87 265.91 350.43 268.09 354.36 274.22 352.85 272.02 348.87"
                                    style="fill: rgb(38, 50, 56); transform-origin: 270.065px 351.615px;"
                                    id="elijnk0uoekrh" class="animable"></polygon>
                                <polygon points="262.56 305.87 267.79 304.8 264.98 300.98 259.83 301.83 262.56 305.87"
                                    style="fill: rgb(38, 50, 56); transform-origin: 263.81px 303.425px;"
                                    id="el6uzsw9my5hp" class="animable"></polygon>
                                <polygon points="249.66 308.5 247.13 303.93 240.72 304.99 243.38 309.79 249.66 308.5"
                                    style="fill: rgb(38, 50, 56); transform-origin: 245.19px 306.86px;"
                                    id="eliwhmxl84wa" class="animable"></polygon>
                                <polygon points="257.98 323.51 256.05 320.02 249.95 321.63 251.9 325.15 257.98 323.51"
                                    style="fill: rgb(38, 50, 56); transform-origin: 253.965px 322.585px;"
                                    id="elx76oi9srbdh" class="animable"></polygon>
                                <polygon points="273.55 336.18 271.09 332.21 264.73 333.83 267.01 337.95 273.55 336.18"
                                    style="fill: rgb(38, 50, 56); transform-origin: 269.14px 335.08px;"
                                    id="elx3eqm8sze1" class="animable"></polygon>
                                <polygon points="270.59 331.4 267.81 326.92 261.82 328.57 264.27 333 270.59 331.4"
                                    style="fill: rgb(38, 50, 56); transform-origin: 266.205px 329.96px;"
                                    id="elhydyxs07vdp" class="animable"></polygon>
                                <polygon points="280.65 334.26 278.07 330.43 272.01 331.97 274.47 335.93 280.65 334.26"
                                    style="fill: rgb(38, 50, 56); transform-origin: 276.33px 333.18px;" id="elk79i30hp6"
                                    class="animable"></polygon>
                                <polygon points="264.59 321.72 262.49 318.32 256.95 319.79 258.88 323.26 264.59 321.72"
                                    style="fill: rgb(38, 50, 56); transform-origin: 260.77px 320.79px;"
                                    id="elo7npstciat" class="animable"></polygon>
                                <polygon points="261.09 314.34 262.91 317.27 268.22 315.87 266.29 313.01 261.09 314.34"
                                    style="fill: rgb(38, 50, 56); transform-origin: 264.655px 315.14px;"
                                    id="elrsj12wtzu7" class="animable"></polygon>
                                <polygon points="267.31 326.12 265.09 322.53 259.33 324.08 261.37 327.76 267.31 326.12"
                                    style="fill: rgb(38, 50, 56); transform-origin: 263.32px 325.145px;"
                                    id="ell4visk4h2b" class="animable"></polygon>
                                <polygon points="283.74 338.82 281.19 335.06 274.97 336.74 277.34 340.57 283.74 338.82"
                                    style="fill: rgb(38, 50, 56); transform-origin: 279.355px 337.815px;"
                                    id="eljgakeq45qtg" class="animable"></polygon>
                                <polygon points="279.63 345.99 276.92 341.62 270.08 343.5 272.48 347.81 279.63 345.99"
                                    style="fill: rgb(38, 50, 56); transform-origin: 274.855px 344.715px;"
                                    id="elyn3upqdgbfs" class="animable"></polygon>
                                <polygon points="259.13 340.08 256.79 335.85 252.32 336.99 254.6 341.31 259.13 340.08"
                                    style="fill: rgb(38, 50, 56); transform-origin: 255.725px 338.58px;"
                                    id="elk12j755vnb" class="animable"></polygon>
                                <polygon points="251.45 326.22 247.22 327.36 249.21 331.11 253.5 329.93 251.45 326.22"
                                    style="fill: rgb(38, 50, 56); transform-origin: 250.36px 328.665px;"
                                    id="elqlicb2fu38" class="animable"></polygon>
                                <polygon points="271.56 348.05 269.18 343.74 263.12 345.4 265.45 349.6 271.56 348.05"
                                    style="fill: rgb(38, 50, 56); transform-origin: 267.34px 346.67px;"
                                    id="elfoxlw74eg7" class="animable"></polygon>
                                <polygon points="260.46 328 258.43 324.33 252.35 325.97 254.41 329.68 260.46 328"
                                    style="fill: rgb(38, 50, 56); transform-origin: 256.405px 327.005px;"
                                    id="el2hvcx42kkrh" class="animable"></polygon>
                                <polygon points="263.11 306.68 264.47 308.69 269.79 307.51 268.38 305.6 263.11 306.68"
                                    style="fill: rgb(38, 50, 56); transform-origin: 266.45px 307.145px;"
                                    id="elem1zrq6b1d" class="animable"></polygon>
                                <polygon points="240.18 314.06 244.21 313.17 242.91 310.81 238.89 311.63 240.18 314.06"
                                    style="fill: rgb(38, 50, 56); transform-origin: 241.55px 312.435px;"
                                    id="el5winpvp16ti" class="animable"></polygon>
                                <polygon points="256.59 307.08 261.59 306.06 258.84 301.99 253.94 302.8 256.59 307.08"
                                    style="fill: rgb(38, 50, 56); transform-origin: 257.765px 304.535px;"
                                    id="el3hk072a9d1y" class="animable"></polygon>
                                <polygon points="250.6 308.31 255.65 307.28 252.97 302.96 248.08 303.77 250.6 308.31"
                                    style="fill: rgb(38, 50, 56); transform-origin: 251.865px 305.635px;"
                                    id="elg4q3bbrtsx" class="animable"></polygon>
                                <polygon points="248.59 321.06 246.87 317.96 242.79 319 244.46 322.14 248.59 321.06"
                                    style="fill: rgb(38, 50, 56); transform-origin: 245.69px 320.05px;"
                                    id="eliak8mcdl2i" class="animable"></polygon>
                                <polygon points="268.77 304.6 273.29 303.67 270.45 300.08 265.98 300.81 268.77 304.6"
                                    style="fill: rgb(38, 50, 56); transform-origin: 269.635px 302.34px;"
                                    id="elcsci8hrba2e" class="animable"></polygon>
                                <polygon points="242.44 309.98 239.76 305.14 235.8 305.8 238.45 310.79 242.44 309.98"
                                    style="fill: rgb(38, 50, 56); transform-origin: 239.12px 307.965px;"
                                    id="elz8bcyjux37" class="animable"></polygon>
                                <polygon points="265 350.66 260.2 351.88 262.28 355.8 267.18 354.59 265 350.66"
                                    style="fill: rgb(38, 50, 56); transform-origin: 263.69px 353.23px;"
                                    id="el2xa91ecxke4" class="animable"></polygon>
                                <polygon points="287.81 344.84 281.05 346.56 283.52 350.55 290.5 348.82 287.81 344.84"
                                    style="fill: rgb(38, 50, 56); transform-origin: 285.775px 347.695px;"
                                    id="elnb77xx7n48l" class="animable"></polygon>
                                <polygon points="280.13 346.8 272.93 348.63 275.14 352.62 282.59 350.78 280.13 346.8"
                                    style="fill: rgb(38, 50, 56); transform-origin: 277.76px 349.71px;"
                                    id="elsygow9ljxkr" class="animable"></polygon>
                                <polygon points="295.81 342.8 288.75 344.6 291.44 348.59 298.75 346.78 295.81 342.8"
                                    style="fill: rgb(38, 50, 56); transform-origin: 293.75px 345.695px;"
                                    id="elprdwym242wi" class="animable"></polygon>
                                <polygon points="302.76 341.03 296.76 342.56 299.71 346.55 305.91 345.01 302.76 341.03"
                                    style="fill: rgb(38, 50, 56); transform-origin: 301.335px 343.79px;"
                                    id="eliomrejtl6w" class="animable"></polygon>
                                <polygon points="262.22 345.65 257.57 346.92 259.76 351.06 264.54 349.84 262.22 345.65"
                                    style="fill: rgb(38, 50, 56); transform-origin: 261.055px 348.355px;"
                                    id="el5doepz83u54" class="animable"></polygon>
                                <polygon points="276.42 340.82 274.05 336.99 267.47 338.77 269.63 342.68 276.42 340.82"
                                    style="fill: rgb(38, 50, 56); transform-origin: 271.945px 339.835px;"
                                    id="elkckp2bvabuq" class="animable"></polygon>
                                <polygon points="287.27 344.04 284.27 339.61 277.84 341.37 280.55 345.75 287.27 344.04"
                                    style="fill: rgb(38, 50, 56); transform-origin: 282.555px 342.68px;"
                                    id="elt0x2hbu6szk" class="animable"></polygon>
                                <polygon points="268.73 342.92 266.56 339.01 260.49 340.66 262.67 344.58 268.73 342.92"
                                    style="fill: rgb(38, 50, 56); transform-origin: 264.61px 341.795px;"
                                    id="elq6keyeyb9qk" class="animable"></polygon>
                                <polygon points="257.14 346.1 261.77 344.83 259.59 340.9 255.04 342.13 257.14 346.1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 258.405px 343.5px;"
                                    id="ele6vf64p82rg" class="animable"></polygon>
                                <polygon points="263.36 333.24 260.92 328.82 254.86 330.49 257.24 334.79 263.36 333.24"
                                    style="fill: rgb(38, 50, 56); transform-origin: 259.11px 331.805px;"
                                    id="el280ex291951" class="animable"></polygon>
                                <polygon points="295.23 342.01 291.92 337.52 285.2 339.36 288.21 343.8 295.23 342.01"
                                    style="fill: rgb(38, 50, 56); transform-origin: 290.215px 340.66px;"
                                    id="el4tk9k4rpy7g" class="animable"></polygon>
                                <polygon points="266.11 338.19 263.82 334.06 257.7 335.62 260.04 339.84 266.11 338.19"
                                    style="fill: rgb(38, 50, 56); transform-origin: 261.905px 336.95px;"
                                    id="el0099m0yqc7c8" class="animable"></polygon>
                                <polygon points="282.29 322.93 285.7 327.55 291.05 326.19 287.37 321.53 282.29 322.93"
                                    style="fill: rgb(38, 50, 56); transform-origin: 286.67px 324.54px;"
                                    id="eldrct4mi2ij" class="animable"></polygon>
                                <polygon points="275.64 313.91 280.38 312.66 278.25 309.97 273.61 311.15 275.64 313.91"
                                    style="fill: rgb(38, 50, 56); transform-origin: 276.995px 311.94px;"
                                    id="elfyb4aodouw6" class="animable"></polygon>
                                <polygon points="271.36 308.1 273.02 310.36 277.64 309.19 275.97 307.08 271.36 308.1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 274.5px 308.72px;" id="elll012l47ge"
                                    class="animable"></polygon>
                                <polygon points="302.14 340.25 298.56 335.7 292.86 337.26 296.18 341.77 302.14 340.25"
                                    style="fill: rgb(38, 50, 56); transform-origin: 297.5px 338.735px;"
                                    id="elgg1zjobasun" class="animable"></polygon>
                                <polygon points="276.22 314.7 278.61 317.93 283.49 316.61 280.99 313.44 276.22 314.7"
                                    style="fill: rgb(38, 50, 56); transform-origin: 279.855px 315.685px;"
                                    id="eluygmh93le79" class="animable"></polygon>
                                <polygon points="289.56 332.79 292.28 336.48 297.95 334.93 295.08 331.3 289.56 332.79"
                                    style="fill: rgb(38, 50, 56); transform-origin: 293.755px 333.89px;"
                                    id="el6vv614k6llh" class="animable"></polygon>
                                <polygon points="270.76 307.3 275.35 306.29 273.92 304.47 269.37 305.4 270.76 307.3"
                                    style="fill: rgb(38, 50, 56); transform-origin: 272.36px 305.885px;"
                                    id="elalbs4lkz89b" class="animable"></polygon>
                                <polygon points="281.71 322.15 286.76 320.75 284.11 317.39 279.19 318.72 281.71 322.15"
                                    style="fill: rgb(38, 50, 56); transform-origin: 282.975px 319.77px;"
                                    id="els68qacu99pp" class="animable"></polygon>
                                <path
                                    d="M322.28,303.64v8.18a16,16,0,0,1-2.73,2.12c-1.51.91-13.94,3-13.94,3l15.76,17.29s14.45-1.58,18.5-2.73c4.24-1.22,3.33-16.68,3.33-16.68Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 324.446px 318.935px;"
                                    id="el8ikm2ptm1u" class="animable"></path>
                                <path
                                    d="M322.28,303.64v8.18s-.22.22-.58.54l18.43,19.06c3.94-1.77,3.07-16.57,3.07-16.57Z"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 332.491px 317.53px;"
                                    id="elyokqhb8xfq" class="animable"></path>
                                <polygon points="294.39 199.04 294.39 285.75 360.48 337.89 360.48 203.89 294.39 199.04"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 327.435px 268.465px;"
                                    id="elgroikcpcgl5" class="animable"></polygon>
                                <polygon points="298.94 203.59 298.94 276.65 354.42 310.91 354.42 208.44 298.94 203.59"
                                    style="fill: rgb(197, 63, 63); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 326.68px 257.25px;"
                                    id="elhq27gzqwvru" class="animable"></polygon>
                                <rect x="360.48" y="203.89" width="6.67" height="134.03"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 363.815px 270.905px;"
                                    id="el4xci9lqsk3b" class="animable"></rect>
                                <polygon
                                    points="302.58 208.14 302.88 273.32 349.26 299.69 349.26 218.98 317.43 214.16 315.31 209.65 302.58 208.14"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 325.92px 253.915px;"
                                    id="elswueqttklvd" class="animable"></polygon>
                                <polygon points="305.61 216.02 305.61 271.5 346.54 293.33 346.54 223.3 305.61 216.02"
                                    style="fill: rgb(197, 63, 63); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 326.075px 254.675px;"
                                    id="el9v6ipkbg2rr" class="animable"></polygon>
                                <g id="elwqo9s1utgep">
                                    <ellipse cx="324.72" cy="255.73" rx="11.03" ry="15.2"
                                        style="fill: rgb(38, 50, 56); transform-origin: 324.72px 255.73px; transform: rotate(-18.56deg);"
                                        class="animable"></ellipse>
                                </g>
                                <path
                                    d="M325.92,256.67l3.89-4.31a2.21,2.21,0,0,0-.07-2.59c-.58-.83-1.49-1-2-.41L324,253.51l-3.75-6c-.54-.87-1.45-1.14-2-.6a2.11,2.11,0,0,0-.08,2.55l3.89,6.25L318.1,260a2.2,2.2,0,0,0,.08,2.59,1.68,1.68,0,0,0,1,.73,1,1,0,0,0,1-.32l3.75-4.15,3.74,6a1.79,1.79,0,0,0,1.06.84,1,1,0,0,0,1-.24,2.12,2.12,0,0,0,.07-2.55Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 323.956px 256.184px;"
                                    id="elko52s1jpm2d" class="animable"></path>
                                <line x1="312.88" y1="234.82" x2="335.8" y2="241.55"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 324.34px 238.185px;"
                                    id="ell7gukg2pop" class="animable"></line>
                                <line x1="311.97" y1="228.45" x2="341.68" y2="236.74"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 326.825px 232.595px;"
                                    id="elkov3pg2agy" class="animable"></line>
                                <path
                                    d="M332.45,371.31s-14.49,1.34-19.85,5.63-1.34,6.44,3.75,7.78,27.9-.81,30.85-3.76S347.2,370.77,332.45,371.31Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 329.143px 378.204px;"
                                    id="elmg1lv1r5nhi" class="animable"></path>
                                <path
                                    d="M347.2,381a3.46,3.46,0,0,0,1-2.12c-6.49-.32-15,1.56-22.73,4a81.06,81.06,0,0,1-7.94,2.09C324.27,385.78,344.44,383.72,347.2,381Z"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 332.865px 381.996px;"
                                    id="elac8hk7xk52t" class="animable"></path>
                                <line x1="281.08" y1="212.16" x2="291.67" y2="217.67"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 286.375px 214.915px;"
                                    id="elnrlv5xpclqk" class="animable"></line>
                                <line x1="275" y1="209" x2="278.15" y2="210.64"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.575px 209.82px;"
                                    id="elf1r9m049uzu" class="animable"></line>
                                <line x1="283.41" y1="239.92" x2="287" y2="240.33"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 285.205px 240.125px;"
                                    id="elwajlcryv6n" class="animable"></line>
                                <line x1="269.67" y1="238.33" x2="279.35" y2="239.45"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 274.51px 238.89px;"
                                    id="elnijb1e2gdyh" class="animable"></line>
                                <line x1="285.67" y1="265.67" x2="273.67" y2="269"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 279.67px 267.335px;"
                                    id="elfiebnsrnivn" class="animable"></line>
                            </g>
                            <g id="freepik--Clock--inject-32" class="animable"
                                style="transform-origin: 270.18px 147.7px;">
                                <path
                                    d="M270.18,119a28.7,28.7,0,1,0,28.7,28.7A28.7,28.7,0,0,0,270.18,119Zm0,51.76a23.06,23.06,0,1,1,23.07-23.06A23.05,23.05,0,0,1,270.18,170.79Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 270.18px 147.7px;"
                                    id="ell5lmxet5okr" class="animable"></path>
                                <path d="M272.23,147.73a2.05,2.05,0,1,1-2.05-2A2.05,2.05,0,0,1,272.23,147.73Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 270.181px 147.78px;"
                                    id="elm8u635aja4r" class="animable"></path>
                                <polyline points="263.31 158.14 270.18 147.73 281.79 157.34"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 272.55px 152.935px;"
                                    id="elod1t4zktowm" class="animable"></polyline>
                            </g>
                            <g id="freepik--file-cabinet--inject-32" class="animable"
                                style="transform-origin: 135.715px 261.37px;">
                                <polyline
                                    points="117.88 169.73 114.43 160.3 116.27 162.37 116.27 159.15 120.18 165.13 116.73 143.74 121.33 155.47 121.79 145.12 122.48 148.57 123.4 136.84 125.01 154.78 127.31 148.57 126.85 156.62 133.06 138.22 130.07 161.22 134.44 158 131.91 162.14 135.13 159.84 131.46 170.42 118.11 170.65"
                                    style="fill: rgb(197, 63, 63); transform-origin: 124.78px 153.745px;"
                                    id="elkstwb8zcrk" class="animable"></polyline>
                                <polygon points="132.64 192.96 118.26 192.96 114.38 168.04 136.51 168.04 132.64 192.96"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 125.445px 180.5px;"
                                    id="elmhgzr5faqef" class="animable"></polygon>
                                <rect x="99.42" y="192.79" width="72.59" height="193.11"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 135.715px 289.345px;"
                                    id="el1yk04ujh9rg" class="animable"></rect>
                                <rect x="103.64" y="199.13" width="63.43" height="46.51"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 135.355px 222.385px;"
                                    id="elyfbe0veovgo" class="animable"></rect>
                                <rect x="122.67" y="218.16" width="25.37" height="8.46"
                                    style="fill: rgb(38, 50, 56); transform-origin: 135.355px 222.39px;"
                                    id="elv8vhhp7k08d" class="animable"></rect>
                                <rect x="103.64" y="253.4" width="63.43" height="46.51"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 135.355px 276.655px;"
                                    id="el6m19chxz6pv" class="animable"></rect>
                                <rect x="122.67" y="272.43" width="25.37" height="8.46"
                                    style="fill: rgb(38, 50, 56); transform-origin: 135.355px 276.66px;"
                                    id="el6iijkl71iny" class="animable"></rect>
                                <rect x="103.64" y="307.66" width="63.43" height="46.51"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 135.355px 330.915px;"
                                    id="elkdoj5nab9u" class="animable"></rect>
                                <rect x="122.67" y="326.69" width="25.37" height="8.46"
                                    style="fill: rgb(38, 50, 56); transform-origin: 135.355px 330.92px;"
                                    id="eli56n10b5hp" class="animable"></rect>
                            </g>
                            <g id="freepik--Character--inject-32" class="animable"
                                style="transform-origin: 170.512px 278.078px;">
                                <g style="clip-path: url(&quot;#freepik--clip-path--inject-32&quot;); transform-origin: 170.512px 278.078px;"
                                    id="elik93pytwa" class="animable">
                                    <path d="M179.79,374.88s36.38-16.07,55.94-17.28L250,389.13H142.22Z"
                                        style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 196.11px 373.365px;"
                                        id="elw7e7p161u7o" class="animable"></path>
                                    <path
                                        d="M224.07,184.9s25.61,30.42,31,36,5.59,9.63,3.85,12.13-14.82,7.13-28.3,15.79-51.8,31-52.18,31.78-4.05-27-4.05-27l64.12-26.38-.19-1.93-20.8-38.51Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 217.142px 232.758px;"
                                        id="elk2lo19bd1zf" class="animable"></path>
                                    <g style="clip-path: url(&quot;#freepik--clip-path-2--inject-32&quot;); transform-origin: 211.58px 225.46px;"
                                        id="elkmgrajleoga" class="animable">
                                        <path
                                            d="M248.72,229.8,219,186.4l-1.43.42,20.8,38.51.19,1.93-64.12,26.38s.07.48.17,1.29l4.18,9.59Z"
                                            style="fill: rgb(197, 63, 63); transform-origin: 211.58px 225.46px;"
                                            id="elucfvvbaxxs" class="animable"></path>
                                        <g id="elv07hb8p2d5">
                                            <path
                                                d="M248.72,229.8,219,186.4l-1.43.42,20.8,38.51.19,1.93-64.12,26.38s.07.48.17,1.29l4.18,9.59Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 211.58px 225.46px;"
                                                class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M224.07,184.9s25.61,30.42,31,36,5.59,9.63,3.85,12.13-14.82,7.13-28.3,15.79-51.8,31-52.18,31.78-4.05-27-4.05-27l64.12-26.38-.19-1.93-20.8-38.51Z"
                                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 217.142px 232.758px;"
                                        id="elq10fe9rjqsn" class="animable"></path>
                                    <path
                                        d="M203.66,171.61s-3.08-2.7-4.62,0-1.73,7.12-.77,7.51,4.81-.19,5.39-1.35S203.66,171.61,203.66,171.61Z"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 200.8px 174.825px;"
                                        id="el2u2fa72b6jv" class="animable"></path>
                                    <path
                                        d="M209.05,170.26s-3.27-3.46-5.39-2.12-1.54,8.67-.77,9.25,5.39-1,6-1.93S209.05,170.26,209.05,170.26Z"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 205.7px 172.673px;"
                                        id="el2pfsdksi959" class="animable"></path>
                                    <path
                                        d="M216.37,170.45s-2.89-4-5.58-4-4.63,9.63-3.66,10.4,7.31-.19,7.7-.77A52.44,52.44,0,0,0,216.37,170.45Z"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 211.623px 171.793px;"
                                        id="el7v70zqinojg" class="animable"></path>
                                    <path d="M222,177c0-1.15-.57-11.17-4-10.59s-7.12,8.67-6.93,10S222,177,222,177Z"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 216.531px 171.796px;"
                                        id="el1mpmuw3lzuo" class="animable"></path>
                                    <path d="M238.51,227.26s9.82,3.66,13.48,3.46"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 245.25px 228.994px;"
                                        id="elixt8rqdcyjo" class="animable"></path>
                                    <path
                                        d="M157.76,389.39c10.46-1.76,23.86-8.95,27.85-18-3-15.69-6.79-37.79-6.79-51.31,0-22.72,6-35.62,3.27-51s-8.47-25.41-14.63-29.46c0,0-9.43,2.5-19.06,11.55S130.3,275.78,127,290.61s-7.7,60.46-7.7,72.4-.86,26.76-.86,26.76c11.53,0,23.06,0,34.59,0A26.46,26.46,0,0,0,157.76,389.39Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 152.025px 314.696px;"
                                        id="elhwamdgegbvl" class="animable"></path>
                                    <g style="clip-path: url(&quot;#freepik--clip-path-3--inject-32&quot;); transform-origin: 152.025px 314.67px;"
                                        id="elckxfs8msqra" class="animable">
                                        <path
                                            d="M185.61,371.38c-5.86,5-32.25,14.71-36.1,15.57s-1.71-7.28,4.28-15.41-7.28,3-9.42,3.85.86-15.84.86-24,7.71-77.48,7.71-77.48l14.55-26.55,5-3a21.48,21.48,0,0,0-5-4.79s-9.43,2.5-19.06,11.55S130.3,275.78,127,290.61s-7.7,60.46-7.7,72.4-.86,26.76-.86,26.76c11.53,0,23.06,0,34.59,0a26.46,26.46,0,0,0,4.71-.42C168.22,387.63,181.62,380.44,185.61,371.38Z"
                                            style="fill: rgb(197, 63, 63); transform-origin: 152.025px 314.67px;"
                                            id="eli6s3n48j40l" class="animable"></path>
                                        <g id="eluql7xo7f1n8">
                                            <path
                                                d="M185.61,371.38c-5.86,5-32.25,14.71-36.1,15.57s-1.71-7.28,4.28-15.41-7.28,3-9.42,3.85.86-15.84.86-24,7.71-77.48,7.71-77.48l14.55-26.55,5-3a21.48,21.48,0,0,0-5-4.79s-9.43,2.5-19.06,11.55S130.3,275.78,127,290.61s-7.7,60.46-7.7,72.4-.86,26.76-.86,26.76c11.53,0,23.06,0,34.59,0a26.46,26.46,0,0,0,4.71-.42C168.22,387.63,181.62,380.44,185.61,371.38Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 152.025px 314.67px;"
                                                class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M157.76,389.39c10.46-1.76,23.86-8.95,27.85-18-3-15.69-6.79-37.79-6.79-51.31,0-22.72,6-35.62,3.27-51s-8.47-25.41-14.63-29.46c0,0-9.43,2.5-19.06,11.55S130.3,275.78,127,290.61s-7.7,60.46-7.7,72.4-.86,26.76-.86,26.76c11.53,0,23.06,0,34.59,0A26.46,26.46,0,0,0,157.76,389.39Z"
                                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 152.025px 314.696px;"
                                        id="elennuxuk9zqm" class="animable"></path>
                                    <path
                                        d="M166.9,243.16l16.54,30.12.89,16.52s4.61-11.78,2.56-19.47S166.9,243.16,166.9,243.16Z"
                                        style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 177.158px 266.48px;"
                                        id="elefdkcqbbtv" class="animable"></path>
                                    <polygon
                                        points="184.32 289.81 179.71 359.52 184.84 373.87 188.43 345.16 185.35 287.75 184.32 289.81"
                                        style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 184.07px 330.81px;"
                                        id="elvaj9une76dj" class="animable"></polygon>
                                    <path
                                        d="M179.78,214.93s.58,7.51,1.16,11.17S172.47,240,172.47,240l13.09,19.83,14.83-11.55s21-1.54,22.91-3.28,1.93-20.79,1.93-20.79l5-2.89s-4.62-20-5.77-24.46l-1.16-4.42s6.74-2.32,5.2-9-11.36-10-21.18-8.48-12.32,5.2-12.32,5.2-13.87-.19-21.76,6.36-3.08,16.94-.58,20.6A57.23,57.23,0,0,0,179.78,214.93Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 199.568px 217.213px;"
                                        id="elx5fgxoenc3k" class="animable"></path>
                                    <g style="clip-path: url(&quot;#freepik--clip-path-4--inject-32&quot;); transform-origin: 198.583px 217.168px;"
                                        id="elxwmjz73fz98" class="animable">
                                        <path
                                            d="M203,241.83c-3.85-4.71,0-22.69,3-31.68s-4.28-12.84-4.28-12.84l21.86-3.77-.3-1.13a9.74,9.74,0,0,0,3.83-2.71l1.18-6.95c-2-6.32-11.47-9.36-21-7.87-9.82,1.54-12.32,5.2-12.32,5.2s-13.87-.19-21.76,6.36-3.08,16.94-.58,20.6a57.23,57.23,0,0,0,7.12,7.89s.58,7.51,1.16,11.17S172.47,240,172.47,240l13.09,19.83,14.83-11.55s16-1.18,21.36-2.63l1.55-.65S206.87,246.54,203,241.83Z"
                                            style="fill: rgb(197, 63, 63); transform-origin: 198.583px 217.168px;"
                                            id="elb1umtdad0am" class="animable"></path>
                                        <g id="elphueg4atxo">
                                            <path
                                                d="M203,241.83c-3.85-4.71,0-22.69,3-31.68s-4.28-12.84-4.28-12.84l21.86-3.77-.3-1.13a9.74,9.74,0,0,0,3.83-2.71l1.18-6.95c-2-6.32-11.47-9.36-21-7.87-9.82,1.54-12.32,5.2-12.32,5.2s-13.87-.19-21.76,6.36-3.08,16.94-.58,20.6a57.23,57.23,0,0,0,7.12,7.89s.58,7.51,1.16,11.17S172.47,240,172.47,240l13.09,19.83,14.83-11.55s16-1.18,21.36-2.63l1.55-.65S206.87,246.54,203,241.83Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 198.583px 217.168px;"
                                                class="animable"></path>
                                        </g>
                                        <path
                                            d="M214.25,206.08s0-.3,0-.77c0-1.49.25-4.71,2.74-5.59,3.27-1.15,6,1.93,6,1.93l.19,3.08a4.25,4.25,0,0,0-4-1.54A9,9,0,0,0,214.25,206.08Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 218.715px 202.771px;"
                                            id="eldqawuvgbgrt" class="animable"></path>
                                        <path
                                            d="M219.84,212.24c0,1.59-.44,2.89-1,2.89s-1-1.3-1-2.89.43-2.89,1-2.89S219.84,210.64,219.84,212.24Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 218.84px 212.24px;"
                                            id="el3x38eabhnf3" class="animable"></path>
                                        <path
                                            d="M213.77,232.41c-1.07,1.11-2.5,1.47-3.19.81s-.38-2.11.69-3.22,2.49-1.47,3.18-.81S214.84,231.3,213.77,232.41Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 212.516px 231.205px;"
                                            id="elhlry7q7h0x" class="animable"></path>
                                    </g>
                                    <path
                                        d="M179.78,214.93s.58,7.51,1.16,11.17S172.47,240,172.47,240l13.09,19.83,14.83-11.55s21-1.54,22.91-3.28,1.93-20.79,1.93-20.79l5-2.89s-4.62-20-5.77-24.46l-1.16-4.42s6.74-2.32,5.2-9-11.36-10-21.18-8.48-12.32,5.2-12.32,5.2-13.87-.19-21.76,6.36-3.08,16.94-.58,20.6A57.23,57.23,0,0,0,179.78,214.93Z"
                                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 199.568px 217.213px;"
                                        id="elamu21aupu0m" class="animable"></path>
                                    <path
                                        d="M198.27,196.06c3.47-2.31,25-3.65,25-3.65s6.74-2.32,5.2-9-11.36-10-21.18-8.48-12.32,5.2-12.32,5.2-13.87-.19-21.76,6.36-3.08,16.94-.58,20.6a57.23,57.23,0,0,0,7.12,7.89s.32,4.12.72,7.75l6,1.69,6.55-3.47,6.55-1.54s-4.82-3.66-2.12-7.12,7.7-4.62,7.89-7.32S194.8,198.37,198.27,196.06Z"
                                        style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 198.787px 199.493px;"
                                        id="elk7i4r9krbrp" class="animable"></path>
                                    <path
                                        d="M219.29,184.87s-2.26-4.14,1.88-3.39,4.14,7.91.75,9.41-21.83-1.88-32,1.13-17.31,11.29-17.31,11.29"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 198.493px 192.35px;"
                                        id="elnxahnrgbz7" class="animable"></path>
                                    <path d="M178.26,209.71s7.91-6.77,14.3-7.9,9.79-1.13,2.64,3-2.26,3.38,2.26,1.88"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 188.73px 205.439px;"
                                        id="elpjfu30r5xc" class="animable"></path>
                                    <path d="M194.8,224.56s-1.15-12.13-7.12-12.51-5.78,8.28-4,14.25,6,7.89,9.43,4.81"
                                        style="fill: rgb(197, 63, 63); transform-origin: 188.694px 222.3px;"
                                        id="elad5wxjyn6jc" class="animable"></path>
                                    <g style="clip-path: url(&quot;#freepik--clip-path-5--inject-32&quot;); transform-origin: 188.694px 222.3px;"
                                        id="el8v81kj9emb6" class="animable">
                                        <g id="elfr13g6vi36q">
                                            <path
                                                d="M194.8,224.56s-1.15-12.13-7.12-12.51-5.78,8.28-4,14.25,6,7.89,9.43,4.81"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; opacity: 0.5; transform-origin: 188.694px 222.3px;"
                                                class="animable"></path>
                                        </g>
                                    </g>
                                    <path d="M194.8,224.56s-1.15-12.13-7.12-12.51-5.78,8.28-4,14.25,6,7.89,9.43,4.81"
                                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 188.694px 222.3px;"
                                        id="elr8csxazpyl" class="animable"></path>
                                    <path
                                        d="M173,232.65l19.26,29.27-8.86,11.36a223.78,223.78,0,0,0-13.28-22.34c-6.55-9.24-7.32-10.78-7.32-10.78Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 177.53px 252.965px;"
                                        id="elz2nppyf4rhn" class="animable"></path>
                                    <g style="clip-path: url(&quot;#freepik--clip-path-6--inject-32&quot;); transform-origin: 170.575px 239.985px;"
                                        id="elgtsirkfv1s7" class="animable">
                                        <path d="M173,232.65l-10.2,7.51s.57,1.13,4.77,7.16l10.78-6.54Z"
                                            style="fill: rgb(197, 63, 63); transform-origin: 170.575px 239.985px;"
                                            id="el0jjthk7m5ex" class="animable"></path>
                                        <g id="elyyuh024zqam">
                                            <path d="M173,232.65l-10.2,7.51s.57,1.13,4.77,7.16l10.78-6.54Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 170.575px 239.985px;"
                                                class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M173,232.65l19.26,29.27-8.86,11.36a223.78,223.78,0,0,0-13.28-22.34c-6.55-9.24-7.32-10.78-7.32-10.78Z"
                                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 177.53px 252.965px;"
                                        id="el5ano9htqtfu" class="animable"></path>
                                    <path
                                        d="M222.53,305.44s3.08-6.36,3.66-10.4.77-6.36,3.08-8.28,9.82-9.63,11-12.52,1.92-.19,2.5,2.12.38,4.43-1.54,5.78a21.23,21.23,0,0,0-3.66,3.46l1.73,1.35s24.07-9.05,26.58-10,4.81-.2,5,1.73-.57,2.12-1.73,2.7-13.86,5-15.6,5.77l-1.73.77,1.35,1.35s6.93-.19,10.4-.38,8.66-.77,9.43.38a2.4,2.4,0,0,1-.58,3.27,3.72,3.72,0,0,1-3.08,1c-1.73,0-16.56,1.15-16.56,1.15l.39,2.12s15.79,2.5,16.36,3.27.58,1.16,0,2.31-1,1.16-2.5,1.16-14-1.93-14-1.93,6.16,3.47,6.93,4.05,3.46,1,2.69,2.31-1.15,1.73-2.31,1.54-9.43-3.85-9.43-3.85-8.28,1.15-11,1.35a37.73,37.73,0,0,1-6-.2l-7.7,5Z"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 247.967px 292.403px;"
                                        id="elbxuy8urdsmt" class="animable"></path>
                                    <path
                                        d="M167.85,296.77s-5.59-23.3-7.9-28.5-15.4-10-21.76,1.35-.58,24.26,1.74,33.5,16.94,51,19.06,56.23,6,4,8.09,3.47,60.65-47.76,60.65-47.76l-4.62-10.39L177.67,328Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 181.514px 313.004px;"
                                        id="el59xs3rfxxk3" class="animable"></path>
                                    <g style="clip-path: url(&quot;#freepik--clip-path-7--inject-32&quot;); transform-origin: 176.192px 313.014px;"
                                        id="el0y6lnrro0sy" class="animable">
                                        <path
                                            d="M166.21,348a139.72,139.72,0,0,1,5.13-13.27c2.14-4.28-10.27,9.85-12.84,2.14s-18.83-46.23-15.84-59.07a24.35,24.35,0,0,1,9.78-14.74c-4.77-1.13-10.61.07-14.25,6.57-6.35,11.36-.58,24.26,1.74,33.5s16.94,51,19.06,56.23,6,4,8.09,3.47c1.54-.42,33-25.55,50-39.18Z"
                                            style="fill: rgb(197, 63, 63); transform-origin: 176.192px 313.014px;"
                                            id="ellv9w4jn8d4" class="animable"></path>
                                        <g id="elvhqj9n2dlyk">
                                            <path
                                                d="M166.21,348a139.72,139.72,0,0,1,5.13-13.27c2.14-4.28-10.27,9.85-12.84,2.14s-18.83-46.23-15.84-59.07a24.35,24.35,0,0,1,9.78-14.74c-4.77-1.13-10.61.07-14.25,6.57-6.35,11.36-.58,24.26,1.74,33.5s16.94,51,19.06,56.23,6,4,8.09,3.47c1.54-.42,33-25.55,50-39.18Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 176.192px 313.014px;"
                                                class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M167.85,296.77s-5.59-23.3-7.9-28.5-15.4-10-21.76,1.35-.58,24.26,1.74,33.5,16.94,51,19.06,56.23,6,4,8.09,3.47,60.65-47.76,60.65-47.76l-4.62-10.39L177.67,328Z"
                                        style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 181.514px 313.004px;"
                                        id="el2sb7hvbpyo7" class="animable"></path>
                                    <line x1="216.37" y1="308.52" x2="221.57" y2="319.11"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 218.97px 313.815px;"
                                        id="elra5pnrqimhm" class="animable"></line>
                                    <path
                                        d="M94.22,255.39l-26.6,18.45s13.11,13.86,11.76,50.22c-1,27.77,2.67,59.3,8,65.71h28.32s-9.79-54-9.09-84.94C107.16,281.32,100.1,265,94.22,255.39Z"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 91.66px 322.58px;"
                                        id="elhf8kl1t6p4" class="animable"></path>
                                    <path
                                        d="M97.42,255.39l-26.6,18.45s13.11,13.86,11.75,50.22c-1,27.77,2.67,59.3,8,65.71H118.9s-9.78-54-9.08-84.94C110.35,281.32,103.29,265,97.42,255.39Z"
                                        style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 94.86px 322.58px;"
                                        id="elkyhtauwink" class="animable"></path>
                                    <polygon points="94.22 255.39 97.42 255.39 70.82 273.84 67.63 273.84 94.22 255.39"
                                        style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 82.525px 264.615px;"
                                        id="elsz20hn9t1ss" class="animable"></polygon>
                                </g>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                    <feColorMatrix type="matrix"
                                        values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                    </feColorMatrix>
                                </filter>
                            </defs>
                            <defs>
                                <clipPath id="freepik--clip-path--inject-32">
                                    <rect x="55.67" y="159" width="230" height="228" style="fill:none"></rect>
                                </clipPath>
                                <clipPath id="freepik--clip-path-2--inject-32">
                                    <path
                                        d="M224.07,184.9s25.61,30.42,31,36,5.59,9.63,3.85,12.13-14.82,7.13-28.3,15.79-51.8,31-52.18,31.78-4.05-27-4.05-27l64.12-26.38-.19-1.93-20.8-38.51Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75px">
                                    </path>
                                </clipPath>
                                <clipPath id="freepik--clip-path-3--inject-32">
                                    <path
                                        d="M157.76,389.39c10.46-1.76,23.86-8.95,27.85-18-3-15.69-6.79-37.79-6.79-51.31,0-22.72,6-35.62,3.27-51s-8.47-25.41-14.63-29.46c0,0-9.43,2.5-19.06,11.55S130.3,275.78,127,290.61s-7.7,60.46-7.7,72.4-.86,26.76-.86,26.76c11.53,0,23.06,0,34.59,0A26.46,26.46,0,0,0,157.76,389.39Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75px">
                                    </path>
                                </clipPath>
                                <clipPath id="freepik--clip-path-4--inject-32">
                                    <path
                                        d="M179.78,214.93s.58,7.51,1.16,11.17S172.47,240,172.47,240l13.09,19.83,14.83-11.55s21-1.54,22.91-3.28,1.93-20.79,1.93-20.79l5-2.89s-4.62-20-5.77-24.46l-1.16-4.42s6.74-2.32,5.2-9-11.36-10-21.18-8.48-12.32,5.2-12.32,5.2-13.87-.19-21.76,6.36-3.08,16.94-.58,20.6A57.23,57.23,0,0,0,179.78,214.93Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75px">
                                    </path>
                                </clipPath>
                                <clipPath id="freepik--clip-path-5--inject-32">
                                    <path d="M194.8,224.56s-1.15-12.13-7.12-12.51-5.78,8.28-4,14.25,6,7.89,9.43,4.81"
                                        style="fill:#C53F3F;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75px">
                                    </path>
                                </clipPath>
                                <clipPath id="freepik--clip-path-6--inject-32">
                                    <path
                                        d="M173,232.65l19.26,29.27-8.86,11.36a223.78,223.78,0,0,0-13.28-22.34c-6.55-9.24-7.32-10.78-7.32-10.78Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75px">
                                    </path>
                                </clipPath>
                                <clipPath id="freepik--clip-path-7--inject-32">
                                    <path
                                        d="M167.85,296.77s-5.59-23.3-7.9-28.5-15.4-10-21.76,1.35-.58,24.26,1.74,33.5,16.94,51,19.06,56.23,6,4,8.09,3.47,60.65-47.76,60.65-47.76l-4.62-10.39L177.67,328Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75px">
                                    </path>
                                </clipPath>
                            </defs>
                        </svg>

                        <h2 class="text-2xl mb-4 text-red-600 text-center font-bold">Booking kamar gagal!
                        </h2>
                        <div class="mb-8 text-sm text-red-600 text-center">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @else
                        <svg class="animated w-72 h-72 mx-auto" id="freepik_stories-done"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                            <style>
                                svg#freepik_stories-done:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-done.animated #freepik--background-complete--inject-261 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-done.animated #freepik--Shadow--inject-261 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-done.animated #freepik--Sheet--inject-261 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-done.animated #freepik--Plant--inject-261 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-done.animated #freepik--speech-bubble--inject-261 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-done.animated #freepik--Character--inject-261 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-done.animated #freepik--Desk--inject-261 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                    animation-delay: 0s;
                                }

                                @keyframes slideLeft {
                                    0% {
                                        opacity: 0;
                                        transform: translateX(-30px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateX(0);
                                    }
                                }

                                @keyframes zoomOut {
                                    0% {
                                        opacity: 0;
                                        transform: scale(1.5);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: scale(1);
                                    }
                                }

                                @keyframes lightSpeedLeft {
                                    from {
                                        transform: translate3d(-50%, 0, 0) skewX(20deg);
                                        opacity: 0;
                                    }

                                    60% {
                                        transform: skewX(-10deg);
                                        opacity: 1;
                                    }

                                    80% {
                                        transform: skewX(2deg);
                                    }

                                    to {
                                        opacity: 1;
                                        transform: translate3d(0, 0, 0);
                                    }
                                }

                                @keyframes slideDown {
                                    0% {
                                        opacity: 0;
                                        transform: translateY(-30px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateY(0);
                                    }
                                }

                            </style>
                            <g id="freepik--background-complete--inject-261" class="animable"
                                style="transform-origin: 250px 228.23px;">
                                <rect y="382.4" width="500" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 250px 382.525px;"
                                    id="eldq95p4c8xt" class="animable"></rect>
                                <rect x="416.78" y="398.49" width="33.12" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 433.34px 398.615px;"
                                    id="el5d3rwrtzq7n" class="animable"></rect>
                                <rect x="322.53" y="401.21" width="8.69" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 326.875px 401.335px;"
                                    id="els55dv0tchu" class="animable"></rect>
                                <rect x="396.59" y="389.21" width="19.19" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 406.185px 389.335px;"
                                    id="el9kxhbrqiic9" class="animable"></rect>
                                <rect x="52.46" y="390.89" width="43.19" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 74.055px 391.015px;"
                                    id="el0mnnmi8czx4" class="animable"></rect>
                                <rect x="104.56" y="390.89" width="6.33" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 107.725px 391.015px;"
                                    id="elr8lnoaenbjp" class="animable"></rect>
                                <rect x="131.47" y="395.11" width="93.68" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 178.31px 395.235px;"
                                    id="el44ionw69rcp" class="animable"></rect>
                                <path
                                    d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 140.46px 196.4px;"
                                    id="elxug1vdjax1n" class="animable"></path>
                                <path
                                    d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 356.75px 196.4px;"
                                    id="elqy5zzfw9rsg" class="animable"></path>
                                <rect x="93.24" y="65.75" width="71.25" height="241.71"
                                    style="fill: rgb(250, 250, 250); transform-origin: 128.865px 186.605px;"
                                    id="elfdvm1nxupc" class="animable"></rect>
                                <polygon points="153.88 65.75 149.72 65.75 124.87 307.46 129.03 307.46 153.88 65.75"
                                    style="fill: rgb(245, 245, 245); transform-origin: 139.375px 186.605px;"
                                    id="elrv9kx2xse6j" class="animable"></polygon>
                                <rect x="92.78" y="66.68" width="70.45" height="2.13"
                                    style="fill: rgb(224, 224, 224); transform-origin: 128.005px 67.745px;"
                                    id="elrzm4ccw83w" class="animable"></rect>
                                <rect x="92.78" y="305.34" width="70.45" height="4.56"
                                    style="fill: rgb(235, 235, 235); transform-origin: 128.005px 307.62px;"
                                    id="el0a0cmrclnaye" class="animable"></rect>
                                <rect x="95.49" y="309.7" width="66.57" height="0.2"
                                    style="fill: rgb(235, 235, 235); transform-origin: 128.775px 309.8px;"
                                    id="elfaqj5sjlwzi" class="animable"></rect>
                                <polygon
                                    points="95.49 66.68 162.06 66.68 162.06 309.7 166.05 309.7 166.05 63.69 91.5 63.69 91.5 309.7 95.49 309.7 95.49 66.68"
                                    style="fill: rgb(235, 235, 235); transform-origin: 128.775px 186.695px;"
                                    id="el6c2ldnit7vs" class="animable"></polygon>
                                <rect x="172.53" y="65.75" width="71.25" height="241.71"
                                    style="fill: rgb(250, 250, 250); transform-origin: 208.155px 186.605px;"
                                    id="elc8jjs43254p" class="animable"></rect>
                                <polygon points="224.01 65.75 201.3 65.75 176.45 307.46 199.16 307.46 224.01 65.75"
                                    style="fill: rgb(245, 245, 245); transform-origin: 200.23px 186.605px;"
                                    id="els3lou3zytb" class="animable"></polygon>
                                <rect x="172.07" y="66.68" width="72.45" height="2.13"
                                    style="fill: rgb(224, 224, 224); transform-origin: 208.295px 67.745px;"
                                    id="elkn039pa4z4f" class="animable"></rect>
                                <rect x="172.07" y="305.34" width="72.45" height="4.56"
                                    style="fill: rgb(235, 235, 235); transform-origin: 208.295px 307.62px;"
                                    id="elo1zju4ultrr" class="animable"></rect>
                                <rect x="174.78" y="309.7" width="66.57" height="0.2"
                                    style="fill: rgb(235, 235, 235); transform-origin: 208.065px 309.8px;"
                                    id="elbqxeossf2mp" class="animable"></rect>
                                <polygon
                                    points="174.78 66.68 241.35 66.68 241.35 309.7 245.33 309.7 245.33 63.69 170.79 63.69 170.79 309.7 174.78 309.7 174.78 66.68"
                                    style="fill: rgb(235, 235, 235); transform-origin: 208.06px 186.695px;"
                                    id="el8bupnn5w0j7" class="animable"></polygon>
                                <rect x="251.81" y="65.75" width="69.25" height="241.71"
                                    style="fill: rgb(250, 250, 250); transform-origin: 286.435px 186.605px;"
                                    id="eluyjv42k046p" class="animable"></rect>
                                <polygon points="291.05 65.75 286.89 65.75 262.04 307.46 266.2 307.46 291.05 65.75"
                                    style="fill: rgb(245, 245, 245); transform-origin: 276.545px 186.605px;"
                                    id="elqd2zrv3yuop" class="animable"></polygon>
                                <rect x="251.36" y="66.68" width="70.45" height="2.13"
                                    style="fill: rgb(224, 224, 224); transform-origin: 286.585px 67.745px;"
                                    id="el8ddtm3sd3pa" class="animable"></rect>
                                <rect x="251.36" y="305.34" width="70.45" height="4.56"
                                    style="fill: rgb(235, 235, 235); transform-origin: 286.585px 307.62px;"
                                    id="elftuvrjoo65h" class="animable"></rect>
                                <rect x="254.07" y="309.7" width="66.57" height="0.2"
                                    style="fill: rgb(235, 235, 235); transform-origin: 287.355px 309.8px;"
                                    id="elj4z6um15f6r" class="animable"></rect>
                                <polygon
                                    points="254.07 66.68 320.63 66.68 320.63 309.7 324.62 309.7 324.62 63.69 250.08 63.69 250.08 309.7 254.07 309.7 254.07 66.68"
                                    style="fill: rgb(235, 235, 235); transform-origin: 287.35px 186.695px;"
                                    id="elunjzq2pqy2" class="animable"></polygon>
                                <rect x="331.1" y="65.75" width="71.25" height="241.71"
                                    style="fill: rgb(250, 250, 250); transform-origin: 366.725px 186.605px;"
                                    id="elwfmm3jj9lt" class="animable"></rect>
                                <polygon points="395.38 65.75 372.67 65.75 347.81 307.46 370.53 307.46 395.38 65.75"
                                    style="fill: rgb(245, 245, 245); transform-origin: 371.595px 186.605px;"
                                    id="elbz1zd9qqccf" class="animable"></polygon>
                                <rect x="330.64" y="66.68" width="70.45" height="2.13"
                                    style="fill: rgb(224, 224, 224); transform-origin: 365.865px 67.745px;"
                                    id="elqefqvykrvff" class="animable"></rect>
                                <rect x="330.64" y="305.34" width="70.45" height="4.56"
                                    style="fill: rgb(235, 235, 235); transform-origin: 365.865px 307.62px;"
                                    id="elzp58cjm8oj" class="animable"></rect>
                                <polygon
                                    points="333.35 66.68 399.92 66.68 399.92 309.7 403.91 309.7 403.91 63.69 329.37 63.69 329.37 309.7 333.35 309.7 333.35 66.68"
                                    style="fill: rgb(235, 235, 235); transform-origin: 366.64px 186.695px;"
                                    id="elv9mv3avyy7l" class="animable"></polygon>
                                <rect x="333.35" y="309.7" width="66.57" height="0.2"
                                    style="fill: rgb(235, 235, 235); transform-origin: 366.635px 309.8px;"
                                    id="elj8w95qsvrxr" class="animable"></rect>
                                <rect x="116.51" y="251.86" width="30.93" height="53.49"
                                    style="fill: rgb(235, 235, 235); transform-origin: 131.975px 278.605px;"
                                    id="elc5j1y6sxrgk" class="animable"></rect>
                                <polygon
                                    points="141.5 244.38 141.5 257.8 139.07 257.8 124.89 257.8 122.45 257.8 122.45 244.38 141.5 244.38"
                                    style="fill: rgb(235, 235, 235); transform-origin: 131.975px 251.09px;"
                                    id="elyycle8jxi2" class="animable"></polygon>
                                <g id="elz0ts203j9b">
                                    <rect x="141.51" y="253.84" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 143.49px 255.82px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elp8a1zwqgfil">
                                    <rect x="133.83" y="253.84" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 135.81px 255.82px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elohx6iatc1zo">
                                    <rect x="126.16" y="253.84" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 128.14px 255.82px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elwys7jqqeetk">
                                    <rect x="118.49" y="253.84" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 120.47px 255.82px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elco5o79xetd9">
                                    <rect x="141.51" y="261.04" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 143.49px 263.02px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elqhx3s3wvm">
                                    <rect x="133.83" y="261.04" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 135.81px 263.02px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elxf3k7o6dq6j">
                                    <rect x="126.16" y="261.04" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 128.14px 263.02px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elhlwhttx54po">
                                    <rect x="118.49" y="261.04" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 120.47px 263.02px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elh1e3sm3n5gi">
                                    <rect x="141.51" y="268.23" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 143.49px 270.21px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elvp8oyps01yk">
                                    <rect x="133.83" y="268.23" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 135.81px 270.21px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elwuc6cgrfa8">
                                    <rect x="126.16" y="268.23" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 128.14px 270.21px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elez2nuuckicf">
                                    <rect x="133.83" y="247.62" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 135.81px 249.6px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elby49on51wbh">
                                    <rect x="126.16" y="247.62" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 128.14px 249.6px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elr6o7r4iynam">
                                    <rect x="118.49" y="268.23" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 120.47px 270.21px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elwrk8ap34eto">
                                    <rect x="141.51" y="275.43" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 143.49px 277.41px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elluwgry828h">
                                    <rect x="133.83" y="275.43" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 135.81px 277.41px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="eli6bhtrf76b">
                                    <rect x="126.16" y="275.43" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 128.14px 277.41px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="ellje8pxs29">
                                    <rect x="118.49" y="275.43" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 120.47px 277.41px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el0nz02a3a5jxq">
                                    <rect x="141.51" y="282.62" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 143.49px 284.6px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elarafh4jkwx5">
                                    <rect x="133.83" y="282.62" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 135.81px 284.6px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elrphzs898ro">
                                    <rect x="126.16" y="282.62" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 128.14px 284.6px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elwg2pp1shfot">
                                    <rect x="118.49" y="282.62" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 120.47px 284.6px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el92ul1jed9wh">
                                    <rect x="141.51" y="289.82" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 143.49px 291.8px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el5vkq6fl9b1r">
                                    <rect x="133.83" y="289.82" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 135.81px 291.8px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="ele62a6ni4oqr">
                                    <rect x="126.16" y="289.82" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 128.14px 291.8px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elanscec00i5s">
                                    <rect x="118.49" y="289.82" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 120.47px 291.8px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elrz4pxnpx8vd">
                                    <rect x="141.51" y="297.01" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 143.49px 298.99px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elsixl5inh2e">
                                    <rect x="133.83" y="297.01" width="3.96" height="3.96"
                                        style="fill: rgb(250, 250, 250); transform-origin: 135.81px 298.99px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elo3zsi3asqb">
                                    <rect x="126.16" y="297.01" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 128.14px 298.99px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elxqrwkyygv5">
                                    <rect x="118.49" y="297.01" width="3.96" height="3.96"
                                        style="fill: rgb(240, 240, 240); transform-origin: 120.47px 298.99px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <rect x="337.63" y="271.34" width="27.71" height="34"
                                    style="fill: rgb(240, 240, 240); transform-origin: 351.485px 288.34px;"
                                    id="elgv54x1kkjti" class="animable"></rect>
                                <polygon
                                    points="340.04 275.12 346.48 275.12 348.26 275.12 350.03 275.12 350.03 278.66 348.26 278.66 346.48 278.66 340.04 278.66 340.04 275.12"
                                    style="fill: rgb(230, 230, 230); transform-origin: 345.035px 276.89px;"
                                    id="elmcjou1kgxas" class="animable"></polygon>
                                <polygon
                                    points="340.04 281.99 346.48 281.99 348.26 281.99 350.03 281.99 350.03 285.54 348.26 285.54 346.48 285.54 340.04 285.54 340.04 281.99"
                                    style="fill: rgb(250, 250, 250); transform-origin: 345.035px 283.765px;"
                                    id="ellcwrfq3c8h9" class="animable"></polygon>
                                <polygon
                                    points="340.04 288.86 346.48 288.86 348.26 288.86 350.03 288.86 350.03 292.41 348.26 292.41 346.48 292.41 340.04 292.41 340.04 288.86"
                                    style="fill: rgb(230, 230, 230); transform-origin: 345.035px 290.635px;"
                                    id="elgx8bthtltv" class="animable"></polygon>
                                <polygon
                                    points="340.04 295.73 346.48 295.73 349.22 295.73 350.03 295.73 350.03 299.28 349.22 299.28 346.48 299.28 340.04 299.28 340.04 295.73"
                                    style="fill: rgb(250, 250, 250); transform-origin: 345.035px 297.505px;"
                                    id="elznhwje5w1yr" class="animable"></polygon>
                                <polygon
                                    points="352.93 275.12 359.38 275.12 361.15 275.12 362.92 275.12 362.92 278.66 361.15 278.66 359.38 278.66 352.93 278.66 352.93 275.12"
                                    style="fill: rgb(250, 250, 250); transform-origin: 357.925px 276.89px;"
                                    id="eldcohzubb4gm" class="animable"></polygon>
                                <polygon
                                    points="352.93 281.99 359.38 281.99 361.88 281.99 362.92 281.99 362.92 285.54 361.88 285.54 359.38 285.54 352.93 285.54 352.93 281.99"
                                    style="fill: rgb(250, 250, 250); transform-origin: 357.925px 283.765px;"
                                    id="elfy6cnjrx9kd" class="animable"></polygon>
                                <polygon
                                    points="352.93 288.86 359.38 288.86 361.15 288.86 362.92 288.86 362.92 292.41 361.15 292.41 359.38 292.41 352.93 292.41 352.93 288.86"
                                    style="fill: rgb(230, 230, 230); transform-origin: 357.925px 290.635px;"
                                    id="eltgv9p7it41" class="animable"></polygon>
                                <polygon
                                    points="352.93 295.73 359.38 295.73 361.15 295.73 362.92 295.73 362.92 299.28 361.15 299.28 359.38 299.28 352.93 299.28 352.93 295.73"
                                    style="fill: rgb(250, 250, 250); transform-origin: 357.925px 297.505px;"
                                    id="elum2tu1b4qm" class="animable"></polygon>
                                <rect x="206.63" y="284.22" width="25.18" height="21.13"
                                    style="fill: rgb(240, 240, 240); transform-origin: 219.22px 294.785px;"
                                    id="elvttsgzeo83f" class="animable"></rect>
                                <g id="elma7kqr464o">
                                    <rect x="226.97" y="286.85" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 228.58px 288.46px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el3i603lxoyfy">
                                    <rect x="220.73" y="286.85" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 222.34px 288.46px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elj1u8421jm3h">
                                    <rect x="214.49" y="286.85" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 216.1px 288.46px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="eleerz4dkaci6">
                                    <rect x="208.24" y="286.85" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 209.85px 288.46px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elecksq6zt92n">
                                    <rect x="226.97" y="292.71" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 228.58px 294.32px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="ela4mpg492e1o">
                                    <rect x="220.73" y="292.71" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 222.34px 294.32px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elzuk2t38gk2">
                                    <rect x="214.49" y="292.71" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 216.1px 294.32px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el0md4mp6x5rir">
                                    <rect x="208.24" y="292.71" width="3.22" height="3.22"
                                        style="fill: rgb(230, 230, 230); transform-origin: 209.85px 294.32px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="eln5wjm4szp6h">
                                    <rect x="226.97" y="298.57" width="3.22" height="3.22"
                                        style="fill: rgb(230, 230, 230); transform-origin: 228.58px 300.18px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el7xnenuebqnu">
                                    <rect x="220.73" y="298.57" width="3.22" height="3.22"
                                        style="fill: rgb(230, 230, 230); transform-origin: 222.34px 300.18px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el72fo92cpd26">
                                    <rect x="214.49" y="298.57" width="3.22" height="3.22"
                                        style="fill: rgb(250, 250, 250); transform-origin: 216.1px 300.18px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elhp0s8vkd5mq">
                                    <rect x="208.24" y="298.57" width="3.22" height="3.22"
                                        style="fill: rgb(230, 230, 230); transform-origin: 209.85px 300.18px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <rect x="178.04" y="268.6" width="25.18" height="36.75"
                                    style="fill: rgb(240, 240, 240); transform-origin: 190.63px 286.975px;"
                                    id="ellpzc7mkzgr" class="animable"></rect>
                                <rect x="192.14" y="270.21" width="9.47" height="9.08"
                                    style="fill: rgb(250, 250, 250); transform-origin: 196.875px 274.75px;"
                                    id="el9ha6zpoytp" class="animable"></rect>
                                <rect x="179.65" y="270.21" width="9.47" height="9.08"
                                    style="fill: rgb(250, 250, 250); transform-origin: 184.385px 274.75px;"
                                    id="eltng0bn56uzl" class="animable"></rect>
                                <rect x="192.14" y="281.92" width="9.47" height="9.08"
                                    style="fill: rgb(250, 250, 250); transform-origin: 196.875px 286.46px;"
                                    id="elwo9f9qk964d" class="animable"></rect>
                                <rect x="179.65" y="281.92" width="9.47" height="9.08"
                                    style="fill: rgb(250, 250, 250); transform-origin: 184.385px 286.46px;"
                                    id="ely06frxgksj9" class="animable"></rect>
                                <rect x="192.14" y="293.63" width="9.47" height="9.08"
                                    style="fill: rgb(250, 250, 250); transform-origin: 196.875px 298.17px;"
                                    id="elq5crqahlohj" class="animable"></rect>
                                <rect x="179.65" y="293.63" width="9.47" height="9.08"
                                    style="fill: rgb(250, 250, 250); transform-origin: 184.385px 298.17px;"
                                    id="el4tencukf4dk" class="animable"></rect>
                            </g>
                            <g id="freepik--Shadow--inject-261" class="animable"
                                style="transform-origin: 250px 416.24px;">
                                <ellipse id="freepik--path--inject-261" cx="250" cy="416.24" rx="193.89" ry="11.32"
                                    style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;"
                                    class="animable"></ellipse>
                            </g>
                            <g id="freepik--Sheet--inject-261" class="animable"
                                style="transform-origin: 354.615px 203.11px;">
                                <polygon
                                    points="444.57 79.61 444.57 299.85 418.07 326.35 264.66 326.35 264.66 79.61 444.57 79.61"
                                    style="fill: rgb(146, 227, 169); transform-origin: 354.615px 202.98px;"
                                    id="eld0nllp3pkya" class="animable"></polygon>
                                <g id="eluv31mssksn">
                                    <polygon
                                        points="444.57 79.61 444.57 299.85 418.07 326.35 264.66 326.35 264.66 79.61 444.57 79.61"
                                        style="fill: rgb(255, 255, 255); opacity: 0.8; isolation: isolate; transform-origin: 354.615px 202.98px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elvx2fi4n41q">
                                    <polyline points="418.07 326.35 418.07 300.63 444.57 300.63 418.59 326.61"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 431.32px 313.62px;"
                                        class="animable"></polyline>
                                </g>
                                <g id="el1y228ubgw98">
                                    <path
                                        d="M332.74,101H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.63,2.63,0,0,1,2.63-2.64h49.62a2.64,2.64,0,0,1,2.63,2.64h0A2.63,2.63,0,0,1,332.74,101Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 307.93px 98.365px;"
                                        class="animable"></path>
                                </g>
                                <g id="eloseibppc4zp">
                                    <path
                                        d="M422.74,122.34H303.12a2.63,2.63,0,0,1-2.63-2.64h0a2.63,2.63,0,0,1,2.63-2.63H422.74a2.63,2.63,0,0,1,2.63,2.63h0A2.64,2.64,0,0,1,422.74,122.34Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 362.93px 119.705px;"
                                        class="animable"></path>
                                </g>
                                <g id="elk3l9j750sn">
                                    <path
                                        d="M422.74,132.71H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.63,2.63,0,0,1,2.63-2.64H422.74a2.64,2.64,0,0,1,2.63,2.64h0A2.63,2.63,0,0,1,422.74,132.71Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 130.075px;"
                                        class="animable"></path>
                                </g>
                                <g id="ello7jkzqw2x8">
                                    <path
                                        d="M422.74,144.43H283.12a2.63,2.63,0,0,1-2.63-2.64h0a2.63,2.63,0,0,1,2.63-2.63H422.74a2.63,2.63,0,0,1,2.63,2.63h0A2.64,2.64,0,0,1,422.74,144.43Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 141.795px;"
                                        class="animable"></path>
                                </g>
                                <g id="el3xsko5hrtu7">
                                    <path
                                        d="M422.74,156.14H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.63,2.63,0,0,1,2.63-2.63H422.74a2.63,2.63,0,0,1,2.63,2.63h0A2.63,2.63,0,0,1,422.74,156.14Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 153.51px;"
                                        class="animable"></path>
                                </g>
                                <g id="el0c65w79xvc3">
                                    <path
                                        d="M422.74,167.86H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.62,2.62,0,0,1,2.63-2.63H422.74a2.63,2.63,0,0,1,2.63,2.63h0A2.63,2.63,0,0,1,422.74,167.86Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 165.23px;"
                                        class="animable"></path>
                                </g>
                                <g id="elvw8utkao71l">
                                    <path
                                        d="M422.74,179.58H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.63,2.63,0,0,1,2.63-2.64H422.74a2.64,2.64,0,0,1,2.63,2.64h0A2.63,2.63,0,0,1,422.74,179.58Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 176.945px;"
                                        class="animable"></path>
                                </g>
                                <g id="eli1iqhxq7kv">
                                    <rect x="280.49" y="186.03" width="144.89" height="5.27" rx="2.63"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.935px 188.665px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elhyjjoy51ni9">
                                    <path
                                        d="M422.74,203H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.63,2.63,0,0,1,2.63-2.63H422.74a2.63,2.63,0,0,1,2.63,2.63h0A2.63,2.63,0,0,1,422.74,203Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 200.37px;"
                                        class="animable"></path>
                                </g>
                                <g id="elexcye332ogd">
                                    <path
                                        d="M422.74,214.73H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.62,2.62,0,0,1,2.63-2.63H422.74a2.63,2.63,0,0,1,2.63,2.63h0A2.63,2.63,0,0,1,422.74,214.73Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 212.1px;"
                                        class="animable"></path>
                                </g>
                                <g id="el2karq03hlub">
                                    <path
                                        d="M422.74,226.45H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.63,2.63,0,0,1,2.63-2.64H422.74a2.64,2.64,0,0,1,2.63,2.64h0A2.63,2.63,0,0,1,422.74,226.45Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 223.815px;"
                                        class="animable"></path>
                                </g>
                                <g id="elzef85vcge6">
                                    <path
                                        d="M422.74,238.17H283.12a2.63,2.63,0,0,1-2.63-2.64h0a2.63,2.63,0,0,1,2.63-2.63H422.74a2.63,2.63,0,0,1,2.63,2.63h0A2.64,2.64,0,0,1,422.74,238.17Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 352.93px 235.535px;"
                                        class="animable"></path>
                                </g>
                                <g id="el2ihy2ti14j">
                                    <path
                                        d="M342.74,249.88H283.12a2.63,2.63,0,0,1-2.63-2.63h0a2.63,2.63,0,0,1,2.63-2.63h59.62a2.63,2.63,0,0,1,2.63,2.63h0A2.63,2.63,0,0,1,342.74,249.88Z"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 312.93px 247.25px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M412,133.58l-.19-.16c-.54-.41-.85-.27-1.1-1.06-.18-.57,0-1.21-.21-1.8a24.89,24.89,0,0,0-1.63-2.94l-2.46-4.43a4.25,4.25,0,0,0-5.77-1.64l-22.65,12.62c-.09.76-.72,1.28-.85,2a1.25,1.25,0,0,0,.38,1.18,1.17,1.17,0,0,1-.7-.25c-1.35-.75-1.71-1.35-3.1-.59-.6.32-1.19.66-1.78,1l-6,3.35-18.8,10.47-22,12.28-18.33,10.21c-2.5,1.39-5.53,2.61-7.76,4.38.62.32.73.81.18,1.29l-1,.91c0,.25.36.25.59.15l1.24-.53a12.55,12.55,0,0,1-3.07,2.79,25,25,0,0,1-6.28,2.58l1.06-1.33c.08-.11.18-.25.11-.38s-.2-.14-.32-.15c-.53-.06-1.06,0-1.45-.39-3.42,2-7,3.9-10.48,5.84a4.25,4.25,0,0,0-1.64,5.77l22.84,41a4.23,4.23,0,0,0,5.76,1.64L312.6,234c0-.71.56-1.5.14-2.15a.57.57,0,0,1-.11-.27c0-.13.12-.23.23-.3a4.28,4.28,0,0,1,2.05-.66c.25,0,.58.11.54.35,0-.22,1.29-.68,1.5-.75.1.54-.27,1.12.36,1.23s1.59-1,2-1.2l6-3.35,19-10.57,20.84-11.61L379,197c.5-.29,1.09-.63,1.57-.87a4.64,4.64,0,0,1,1.28-2.42c1-.69,2.58.07,3.41-.91.16-.19.26-.42.4-.62a3.33,3.33,0,0,1,1-.79,1.57,1.57,0,0,1,.84-.33c.3,0,.62.25.58.55,2.06-.48,3.92-1.87,5.74-2.9.66-.37,6.45-3.09,6.43-3.52-.08-1.33.73-2.47.69-3.84,0-.26-.51-2-.28-2.13-5.2,3.1-10.6,5.92-15.9,8.86-.18.11-.86.34-1,.54,0,0-.05.09-.07.14l-.15.33,0,.08a18.83,18.83,0,0,1-.76,2c0,.09-1.13,1.49-1.22,1.16-.44-1.61-1-1.86-2.23-1.2l-1.76,1-5.59,3.11-18.83,10.5-22.19,12.36-18.49,10.3-7.75,4.31q-2.32-4.2-4.67-8.39l-3-5.39a6.11,6.11,0,0,0-1.32-2c-.43-.32-1.16-.24-1.54-.53-.93-.71-1.6-2-2.48-2.83-.6-.56-1.51-2.24-1.26-3.17.3.12.6.25.9.34a3.12,3.12,0,0,1,.1-1.86c-3-5.05-5.76-10.33-8.63-15.49l-.19-.33,7-3.9,5.11-2.85a17.7,17.7,0,0,0,3-1.65c.65-.56,1.31-1.26,2-1.86a7.28,7.28,0,0,1,1.5-.88l1.89-.92a.71.71,0,0,1,.32-.1,1.32,1.32,0,0,1,.33.08c1,.21,3.48-1.64,4.38-2.14l5.82-3.24,17.56-9.79,21.88-12.18,21.9-12.21,17.62-9.81,9-5,.42-.23,9.73,17.47a6.18,6.18,0,0,0,2.75,2.72c.4.13.85.41.8.82s-.65.75-.51,1.17.91.26,1.09.64-.31,1-.25,1.52a6,6,0,0,0,.91,1.73l2.83,5.09c1.58,2.82,3.15,5.65,4.74,8.5l-17.3,9.64a.85.85,0,0,1,.21.25l.09.23a7.37,7.37,0,0,1,1,.44.86.86,0,0,1,.44.78.88.88,0,0,1-.46.76l-1.06.6a1.16,1.16,0,0,1-.91.95,2.22,2.22,0,0,1-.37,0,.9.9,0,0,1-.74.15.92.92,0,0,1-.62-1.11,1.35,1.35,0,0,1,.16-.29.9.9,0,0,1,.06-.93l-.32,0c-.18,0-.34-.1-.51-.15a5,5,0,0,0-2,2.36.27.27,0,0,0-.06.19c0,.14.22.15.35.21.3.14.23.58.08.87s-.33.66-.13.92a1.88,1.88,0,0,0,.25.24c.43.49-.23,1.91.82,1.33a1.25,1.25,0,0,1,.13-.91,1.34,1.34,0,0,1,.77-.57,12.54,12.54,0,0,1,2.37-.34L427.55,170a4.25,4.25,0,0,0,1.64-5.77l-.12-.21-9.42-16.91-5.44-9.78c-.53-.93-1-1.9-1.58-2.82A3.56,3.56,0,0,0,412,133.58Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 353.59px 179.471px;"
                                    id="elqvn23ec6r0r" class="animable"></path>
                                <path
                                    d="M315.66,188.83c-.69-.84-.48-.86-.61-1.76,0,0,0,0,0-.06l-.08-.09-.12-.14c-.47.21-.94.44-1.41.7l-9.21,5.13,3.71,6.65c-.52-.92,1.32-.65,1.39-.66a2.51,2.51,0,0,1,.6-.1.79.79,0,0,1,.49.33,3.05,3.05,0,0,1,.32,2.22c-.11,1,.42,2-.15,3,.49.8,4.92,8.86,4.94,8.85l9.21-5.13c.53-.3,1.79-.83,2.1-1.36s-.18-1.36.37-1.61a1.48,1.48,0,0,1,1.27.12,11.14,11.14,0,0,0,1.79-13.52c-2.59-4.65-8.47-7.42-13.62-5.26-.36.15.12,1.76-.74,1.94a2.37,2.37,0,0,1,.69-.82M322.34,204l-4.29,2.39c-.35-.63-.69-1.26-1.05-1.87.45.76-.79.52-1.05.35-.63-.42-.8-1.63-.82-2.31a6.14,6.14,0,0,0-1-3.28q-1.51-2.73-3-5.46l4.29-2.39c4-2.24,8-1.31,10.16,2.57S326.37,201.79,322.34,204Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 318.006px 199.147px;"
                                    id="elbc9cd2ustgs" class="animable"></path>
                                <path
                                    d="M346.11,171.8a2.48,2.48,0,0,1,.18,1.52c-.05.28-.5,1-.44,1.18.16.4.32.8.47,1.2a.67.67,0,0,0,.11.18.47.47,0,0,0,.26.08c1.59.14,1.52.3,1.62,1.64.09,1.15,1.08,1.81,1.64,2.81a7.33,7.33,0,0,1-9,10.48,1.06,1.06,0,0,1-.12.1,1,1,0,0,1-.68.08,3,3,0,0,1-2.11-2.23.65.65,0,0,1,0-.24,7.54,7.54,0,0,1-.75-1.12,7.07,7.07,0,0,1,2.73-10,7.29,7.29,0,0,1,4.12-.94l-.08-.12c-.86-1.14,2.24-1.6.84-2.37-.59-.32-.49-1.77-.64-2.36a13.71,13.71,0,0,0-6.47,1.79c-6.4,3.57-8.61,10.64-5.25,16.67a11.76,11.76,0,0,0,6.55,5.51,5.84,5.84,0,0,0,2.08.48c.82-.07.42,0,.77-.49s.14-.7.67-1.22,1.15-.83,1.26-1.63c0,.36.4.62.4,1,0,.11,0,.22,0,.32a.68.68,0,0,0,.17.35c.34.46.91,1,.92,1.53a11.83,11.83,0,0,0,4.14-1.52c6.37-3.55,8.63-10.61,5.25-16.66C353,174.73,349.71,172,346.11,171.8Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 343.646px 183.915px;"
                                    id="elxlhqy90uobk" class="animable"></path>
                                <path
                                    d="M366.56,157.88l6.86,12.31-16.94-6.7-3.88,2.17c2.62,4.7,5.4,9.35,7.86,14.14.17-.52.57-.62,1.05-.69.9-.12.87.33,1.36,1.22.06.11.13.22.24.24s.33-.16.51-.14.25.24.2.41a2.12,2.12,0,0,1-.25.47c-.29.55.19.9.13,1.4,0,.26-.87,1.32-.77,1.5l1,1.72,4.64-2.58-1.24-2.22-.23,0c-1.35.18-.75-1.59-1.05-2.32a26.84,26.84,0,0,0-1.65-3L361.67,171l13.77,5.42a2.84,2.84,0,0,1,.14-1.17c.11-.21,1-.6,1-.8a2.48,2.48,0,0,0,.84,1.67c.53.47.53.4.43,1.23l.82.33,3.86-2.15-11.3-20.27Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 367.565px 170.595px;"
                                    id="elhykw2qww9qh" class="animable"></path>
                                <path
                                    d="M389.87,166.53l-2.62-4.69,9.42-5.25-2-3.65-9.41,5.25-2.45-4.41,6.36-3.54a3,3,0,0,1,1-.83.9.9,0,0,1,.64-.07l2.69-1.49s-1.91-3.41-2.09-3.77c-.92.42,0,1.58-.93,2.14.19.2.47.91,0,1-.27,0-.47-.34-.74-.31s-.28.16-.42.12a.29.29,0,0,1-.19-.17,4.18,4.18,0,0,0-.49-.85c-.63-.61-6.38,3.22-7.18,3.67l-5.35,3,11.29,20.27,4.51-2.51.09-.12c.33-.42.65-.85,1-1.24a.91.91,0,0,1,1.08-.13.68.68,0,0,1,.21.17l8.81-4.91-2.1-3.77Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 389.605px 158.515px;"
                                    id="elei35qqzeyz5" class="animable"></path>
                            </g>
                            <g id="freepik--Plant--inject-261" class="animable"
                                style="transform-origin: 399.299px 348.662px;">
                                <path
                                    d="M401.9,382.21s-6.58-14.34.93-28.49,9.7-17.48,4.91-20.37-7,11.31-7,11.31-4-9.78-.71-20,5.43-26.9.88-28.69-.87,20.79-4.82,28.49a66.37,66.37,0,0,1-3.87-16.79c-.54-8.22.31-21.34-3.29-24.71s-5.89-1-2.36,17.1a190.39,190.39,0,0,1,3.51,32.89s-7.81-23.8-13-24.49-5.23,7-.74,13.69S389.43,340.8,390.84,347c0,0-8.56-17.9-16.27-12.42s6.71,16.31,13.13,20.22,10.89,28.4,10.89,28.4Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 391.318px 332.432px;"
                                    id="elkqz9e14l5db" class="animable"></path>
                                <g id="eln51n5d6uaz">
                                    <path
                                        d="M401.9,382.21s-6.58-14.34.93-28.49,9.7-17.48,4.91-20.37-7,11.31-7,11.31-4-9.78-.71-20,5.43-26.9.88-28.69-.87,20.79-4.82,28.49a66.37,66.37,0,0,1-3.87-16.79c-.54-8.22.31-21.34-3.29-24.71s-5.89-1-2.36,17.1a190.39,190.39,0,0,1,3.51,32.89s-7.81-23.8-13-24.49-5.23,7-.74,13.69S389.43,340.8,390.84,347c0,0-8.56-17.9-16.27-12.42s6.71,16.31,13.13,20.22,10.89,28.4,10.89,28.4Z"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 391.318px 332.432px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M396.7,388.1s6.41-14.45-1.27-28.48-9.91-17.33-5.15-20.3,7.12,11.21,7.12,11.21,3.92-9.83.47-20-5.75-26.82-1.22-28.67,1.12,20.78,5.16,28.41a66,66,0,0,0,3.66-16.84c.45-8.23-.56-21.34,3-24.76s5.89-1.12,2.57,17.07a190.36,190.36,0,0,0-3.11,32.93s7.52-23.91,12.75-24.68,5.31,6.93.91,13.68-12.9,18.85-14.25,25c0,0,8.35-18,16.12-12.65s-6.51,16.4-12.88,20.4S400,389,400,389Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 406.751px 338.168px;"
                                    id="elqvu1f10mgn" class="animable"></path>
                                <polygon points="426.24 377.8 373.34 377.8 377.62 415.66 421.96 415.66 426.24 377.8"
                                    style="fill: rgb(38, 50, 56); transform-origin: 399.79px 396.73px;"
                                    id="elw2tettuq08e" class="animable"></polygon>
                            </g>
                            <g id="freepik--speech-bubble--inject-261" class="animable"
                                style="transform-origin: 138.17px 166.9px;">
                                <path
                                    d="M155.63,139.75H120.72a5.07,5.07,0,0,0-5.07,5.07v33.94a5.07,5.07,0,0,0,5.07,5.07h11.17l-7.52,10.22,13-10.22h18.25a5.07,5.07,0,0,0,5.07-5.07V144.82A5.07,5.07,0,0,0,155.63,139.75Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 138.17px 166.9px;"
                                    id="elrqc47xma5p" class="animable"></path>
                                <g id="elt9as857zdy9">
                                    <path
                                        d="M155.63,139.75H120.72a5.07,5.07,0,0,0-5.07,5.07v33.94a5.07,5.07,0,0,0,5.07,5.07h11.17l-7.52,10.22,13-10.22h18.25a5.07,5.07,0,0,0,5.07-5.07V144.82A5.07,5.07,0,0,0,155.63,139.75Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 138.17px 166.9px;"
                                        class="animable"></path>
                                </g>
                                <circle cx="138.18" cy="161.79" r="15.85"
                                    style="fill: rgb(146, 227, 169); isolation: isolate; transform-origin: 138.18px 161.79px;"
                                    id="el1u4097d971s" class="animable"></circle>
                                <g id="elhsmbc8nf5jf">
                                    <circle cx="138.18" cy="161.79" r="13.59"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 138.18px 161.79px; transform: rotate(-76.72deg);"
                                        class="animable"></circle>
                                </g>
                                <path
                                    d="M136.49,168.28a1.4,1.4,0,0,1-1-.39l-5.77-5.65a1.39,1.39,0,0,1,1.94-2l4.73,4.63,8.18-9.13a1.39,1.39,0,0,1,2.07,1.85l-9.15,10.21a1.38,1.38,0,0,1-1,.46Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 138.122px 161.805px;"
                                    id="elmeyvydban1" class="animable"></path>
                            </g>
                            <g id="freepik--Character--inject-261" class="animable"
                                style="transform-origin: 141.238px 288.223px;">
                                <path
                                    d="M92.9,392.92l28.81-2.84V357.59h11.42v32.48l28.93,2.85a5.6,5.6,0,0,1,5.06,5.58v4.33H87.84V398.5A5.6,5.6,0,0,1,92.9,392.92Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 127.48px 380.21px;"
                                    id="el5mqear3vtnd" class="animable"></path>
                                <g id="elfxj8wn2lcpn">
                                    <path
                                        d="M92.9,392.92l28.81-2.84V357.59h11.42v32.48l28.93,2.85a5.6,5.6,0,0,1,5.06,5.58v4.33H87.84V398.5A5.6,5.6,0,0,1,92.9,392.92Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.1; isolation: isolate; transform-origin: 127.48px 380.21px;"
                                        class="animable"></path>
                                </g>
                                <circle cx="164.07" cy="408.19" r="7.47"
                                    style="fill: rgb(38, 50, 56); transform-origin: 164.07px 408.19px;"
                                    id="elmiln9us0yy" class="animable"></circle>
                                <circle cx="90.89" cy="408.19" r="7.47"
                                    style="fill: rgb(38, 50, 56); transform-origin: 90.89px 408.19px;" id="elv0q8yr7rvr"
                                    class="animable"></circle>
                                <g id="ela1q9735goxb">
                                    <path
                                        d="M123.88,330.23H131a4.13,4.13,0,0,1,4.13,4.13V366.3a0,0,0,0,1,0,0H119.75a0,0,0,0,1,0,0V334.36A4.13,4.13,0,0,1,123.88,330.23Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 127.44px 348.265px; transform: rotate(180deg);"
                                        class="animable"></path>
                                </g>
                                <g id="elhczdxibbwq">
                                    <path
                                        d="M123.88,330.23H131a4.13,4.13,0,0,1,4.13,4.13V366.3a0,0,0,0,1,0,0H119.75a0,0,0,0,1,0,0V334.36A4.13,4.13,0,0,1,123.88,330.23Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 127.44px 348.265px; transform: rotate(180deg);"
                                        class="animable"></path>
                                </g>
                                <path d="M87.54,267.62S96.1,321,113,330.23H95.82s-17-18.2-22.12-62.61Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 93.35px 298.925px;"
                                    id="elhdtlu6gks2g" class="animable"></path>
                                <g id="elyw48wbkegdj">
                                    <path d="M87.54,267.62S96.1,321,113,330.23H95.82s-17-18.2-22.12-62.61Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.1; isolation: isolate; transform-origin: 93.35px 298.925px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M95,322.68h66.92a5,5,0,0,1,5,5v6.69a0,0,0,0,1,0,0H90a0,0,0,0,1,0,0v-6.69A5,5,0,0,1,95,322.68Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 128.46px 328.525px;"
                                    id="elr2kpm7caok" class="animable"></path>
                                <rect x="86.76" y="328.52" width="83.33" height="5.84" rx="2.01"
                                    style="fill: rgb(38, 50, 56); transform-origin: 128.425px 331.44px;"
                                    id="elc0ucdufgr9" class="animable"></rect>
                                <g id="elmvy8fom4x8g">
                                    <rect x="86.76" y="328.52" width="83.33" height="5.84" rx="2.01"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 128.425px 331.44px;"
                                        class="animable"></rect>
                                </g>
                                <path
                                    d="M71.67,278.48H99.16c8.06,0,13.29-6.46,11.69-14.43l-2.14-10.64c-1.6-8-9.43-14.42-17.48-14.42H63.74c-8.06,0-13.29,6.46-11.69,14.42l2.14,10.64C55.79,272,63.61,278.48,71.67,278.48Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 81.45px 258.735px;"
                                    id="el3wnk6lmr7kd" class="animable"></path>
                                <polygon
                                    points="217.54 367.89 211.24 370.36 206.71 361.82 202.59 354.05 209.57 349.87 213.79 359.4 217.54 367.89"
                                    style="fill: rgb(228, 137, 123); transform-origin: 210.065px 360.115px;"
                                    id="el183peldesa3" class="animable"></polygon>
                                <g id="el8m9l5sxauv8">
                                    <polygon
                                        points="213.79 359.4 206.71 361.82 202.59 354.05 209.57 349.87 213.79 359.4"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 208.19px 355.845px;"
                                        class="animable"></polygon>
                                </g>
                                <path
                                    d="M212.48,354.74l-8.57,4.6s-32.39-56.95-37.37-56.47-52.23,30.58-66.64,19.46-.39-44.6-.39-44.6,29.81-8.52,33-2a49.75,49.75,0,0,1,2.14,6c.63,2.05,1.11,3.78,1.11,3.78h0c.91-.37,30.35-12.44,43.49-6C192.66,286.13,212.48,354.74,212.48,354.74Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 152.936px 316.307px;"
                                    id="elw16xf69s7s" class="animable"></path>
                                <g id="elgd94v1qr7dq">
                                    <path
                                        d="M212.48,354.74l-8.57,4.6s-32.39-56.95-37.37-56.47-52.23,30.58-66.64,19.46-.39-44.6-.39-44.6,29.81-8.52,33-2a49.75,49.75,0,0,1,2.14,6c.63,2.05,1.11,3.78,1.11,3.78h0c.91-.37,30.35-12.44,43.49-6C192.66,286.13,212.48,354.74,212.48,354.74Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; isolation: isolate; transform-origin: 152.936px 316.307px;"
                                        class="animable"></path>
                                </g>
                                <polygon
                                    points="165.92 401.18 159.2 400.41 159.16 390.93 159.15 382.23 167.28 381.85 166.56 392.08 165.92 401.18"
                                    style="fill: rgb(228, 137, 123); transform-origin: 163.215px 391.515px;"
                                    id="eljipge19gs8" class="animable"></polygon>
                                <g id="elcdyklpout8w">
                                    <polygon
                                        points="166.54 392.29 159.14 391.11 159.14 382.32 167.27 381.89 166.54 392.29"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 163.205px 387.09px;"
                                        class="animable"></polygon>
                                </g>
                                <polygon points="199.72 356.51 212.26 350.23 213.57 355.55 204.07 360.45 199.72 356.51"
                                    style="fill: rgb(146, 227, 169); transform-origin: 206.645px 355.34px;"
                                    id="eltqosdtabhlj" class="animable"></polygon>
                                <path
                                    d="M122.16,322.42s2.06-.23,33.75-6.1c0,0,.72,40.52,2.22,70.73l9.76.31s14-67,12.35-77.16-13.69-11.49-13.69-11.49S145.64,315,122.16,322.42Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 151.268px 343.035px;"
                                    id="el4yx8zf8w1ib" class="animable"></path>
                                <g id="el18oe3mu5lhi">
                                    <path
                                        d="M122.16,322.42s2.06-.23,33.75-6.1c0,0,.72,40.52,2.22,70.73l9.76.31s14-67,12.35-77.16-13.69-11.49-13.69-11.49S145.64,315,122.16,322.42Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; isolation: isolate; transform-origin: 151.268px 343.035px;"
                                        class="animable"></path>
                                </g>
                                <g id="elwduxj39hsi">
                                    <path
                                        d="M122.16,322.42s2.06-.23,33.75-6.1c0,0,.72,40.52,2.22,70.73l9.76.31s14-67,12.35-77.16-13.69-11.49-13.69-11.49S145.64,315,122.16,322.42Z"
                                        style="opacity: 0.3; isolation: isolate; transform-origin: 151.268px 343.035px;"
                                        class="animable"></path>
                                </g>
                                <polygon points="156.34 384.35 169.65 384.04 167.83 389.52 157.03 389.62 156.34 384.35"
                                    style="fill: rgb(146, 227, 169); transform-origin: 162.995px 386.83px;"
                                    id="elrjsfk9dor58" class="animable"></polygon>
                                <g id="elc4oyf0ywxdi">
                                    <path
                                        d="M135.8,285.53l-17.27,6.15s9.08-6.78,16.16-9.93C135.32,283.8,135.8,285.53,135.8,285.53Z"
                                        style="opacity: 0.3; isolation: isolate; transform-origin: 127.165px 286.715px;"
                                        class="animable"></path>
                                </g>
                                <polygon points="97.51 275.67 98.15 280.46 130.52 273.59 129.77 267.93 97.51 275.67"
                                    style="fill: rgb(38, 50, 56); transform-origin: 114.015px 274.195px;"
                                    id="elublxacl7tmm" class="animable"></polygon>
                                <g id="elnyb2w6jddz">
                                    <polygon points="97.51 275.67 98.15 280.46 130.52 273.59 129.77 267.93 97.51 275.67"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 114.015px 274.195px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elkuotvxokamm">
                                    <rect x="107.36" y="272.27" width="1.64" height="8.35"
                                        style="fill: rgb(38, 50, 56); transform-origin: 108.18px 276.445px; transform: rotate(-10.51deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elugo07j9jymg">
                                    <rect x="115.81" y="270.83" width="7.24" height="5.49"
                                        style="fill: rgb(255, 255, 255); transform-origin: 119.43px 273.575px; transform: rotate(-12.7deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elk315ttssxwm">
                                    <rect x="127.05" y="267.42" width="1.64" height="8.35"
                                        style="fill: rgb(38, 50, 56); transform-origin: 127.87px 271.595px; transform: rotate(-10.4077deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elb3qyxza27q8">
                                    <rect x="107.36" y="272.27" width="1.64" height="8.35"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; isolation: isolate; transform-origin: 108.18px 276.445px; transform: rotate(-10.51deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elhqwi91gid5q">
                                    <rect x="127.05" y="267.42" width="1.64" height="8.35"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; isolation: isolate; transform-origin: 127.87px 271.595px; transform: rotate(-10.4077deg);"
                                        class="animable"></rect>
                                </g>
                                <path
                                    d="M230.06,379.07a8.92,8.92,0,0,0-3.25-.37h0s-4.07-1.7-9-9.79l-4.2.55a3.49,3.49,0,0,0-2.9,2.75,2,2,0,0,0,0,.6,23.58,23.58,0,0,0,.74,3,85,85,0,0,0,3.81,9.53l.68-.28L213.77,379c-.72-2.07,1.79-.32,3.12,1.68s3.22,3.94,7.71,2.24C229.82,380.88,231.89,379.8,230.06,379.07Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 220.701px 377.125px;"
                                    id="elrz9bqc0yb7b" class="animable"></path>
                                <path
                                    d="M216.76,366.76S223.5,377,226.81,378.7c0,0-3.71,3-8.66-1.82-6.39-6.19-7.46-4.07-7.46-4.07a19.41,19.41,0,0,1,.17-3.63C211.37,366.83,216.76,366.76,216.76,366.76Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 218.739px 373.191px;"
                                    id="el5fmmvoambrb" class="animable"></path>
                                <path
                                    d="M176,413.1A9.09,9.09,0,0,0,172.9,412h0s-3.55-2.61-6.4-11.63l-4.21-.46a3.46,3.46,0,0,0-3.47,2,1.9,1.9,0,0,0-.18.57,22.47,22.47,0,0,0,0,3.07,83.52,83.52,0,0,0,1.44,10.16l.73-.11-.65-6.42c-.21-2.18,1.82.12,2.64,2.38s2.19,4.59,6.95,4C175.31,414.81,177.57,414.25,176,413.1Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 167.537px 407.802px;"
                                    id="ellwui6dhccb9" class="animable"></path>
                                <path
                                    d="M166,398s4.12,11.55,6.93,14c0,0-4.31,2-8-3.82-4.75-7.53-6.28-5.72-6.28-5.72a19.32,19.32,0,0,1,1-3.48C160.71,396.78,166,398,166,398Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 165.79px 404.997px;"
                                    id="eljla567t4b9" class="animable"></path>
                                <path
                                    d="M90.46,194,82,195.7a2.8,2.8,0,0,1-2.42.59c-2.52-1-6.15-3.93-6.61-5-.68-1.51,0-5.94,1.78-6.74s7.91,6.6,7.91,6.6l9.09-2.05Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 82.2304px 190.424px;"
                                    id="el1m2nb58sz22" class="animable"></path>
                                <path
                                    d="M117.14,222.12s-.77-27.41-3.94-28.58-27,2.1-27,2.1l-.58-6.26s27.73-4.27,33.1-1.74,7.14,43.38,6.16,51.25Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 105.379px 212.864px;"
                                    id="elgfn2eqnohta" class="animable"></path>
                                <g id="elorodya8nx8a">
                                    <path
                                        d="M117.14,222.12s-.77-27.41-3.94-28.58-27,2.1-27,2.1l-.58-6.26s27.73-4.27,33.1-1.74,7.14,43.38,6.16,51.25Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 105.379px 212.864px;"
                                        class="animable"></path>
                                </g>
                                <polygon points="86.61 196.24 84.95 189.36 87.33 188.5 88.84 196.45 86.61 196.24"
                                    style="fill: rgb(146, 227, 169); transform-origin: 86.895px 192.475px;"
                                    id="el9rat7g4pogm" class="animable"></polygon>
                                <g id="el4rhyg88ueiy">
                                    <polygon points="86.61 196.24 84.95 189.36 87.33 188.5 88.84 196.45 86.61 196.24"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 86.895px 192.475px;"
                                        class="animable"></polygon>
                                </g>
                                <path
                                    d="M117,218.7s-2.13,8.34-12.39,11S83,225.41,83,225.41l2.26,19.9,12.56,31.35,32.1-8.37S128,231.82,117,218.7Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 106.46px 247.68px;"
                                    id="el2czvqdxawqw" class="animable"></path>
                                <g id="elns9ny85ckxd">
                                    <path
                                        d="M117,218.7s-2.13,8.34-12.39,11S83,225.41,83,225.41l2.26,19.9,12.56,31.35,32.1-8.37S128,231.82,117,218.7Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 106.46px 247.68px;"
                                        class="animable"></path>
                                </g>
                                <g id="elq7mnxl2drcg">
                                    <rect x="120.34" y="242.35" width="5.52" height="9.02" rx="0.79"
                                        style="fill: rgb(146, 227, 169); opacity: 0.6; isolation: isolate; transform-origin: 123.1px 246.86px; transform: rotate(162.49deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el0cvemoak2jer">
                                    <rect x="120.79" y="242.93" width="4.48" height="6.13"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 123.03px 245.995px; transform: rotate(162.49deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elrsnedjrp4pj">
                                    <rect x="121.23" y="240.38" width="0.99" height="3.61"
                                        style="fill: rgb(38, 50, 56); transform-origin: 121.725px 242.185px; transform: rotate(-17.51deg);"
                                        class="animable"></rect>
                                </g>
                                <path
                                    d="M95.18,187.55c-7.91,0-13.13,8.38-11.28,21.67s9.26,17.12,9.26,17.12l-.47-3.21a75.4,75.4,0,0,0,25.09,1.4s-3.82-10.84-2.58-21.91C115.2,202.62,117.71,187.53,95.18,187.55Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 100.653px 206.945px;"
                                    id="el10d5pfohos5o" class="animable"></path>
                                <g id="el4q941hhzci4">
                                    <path
                                        d="M110.89,227l3.23,12-5.68-4.33s5.53,12.64,7,20c0,0-4.78-12.53-8.9-19.4l-2.41,6.88-9.69-9.87S103,225.72,110.89,227Z"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 104.94px 240.752px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M106.17,230.87l-9.86.3c4.37-5.59-3.53-15.33-3.53-15.33l9.74,2.11c2.32,9.64,6.33,9.93,6.33,9.93Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 100.815px 223.505px;"
                                    id="eldm5hivz48gb" class="animable"></path>
                                <g id="elfxirkiq5gj">
                                    <path
                                        d="M105.24,224.87A14.78,14.78,0,0,1,95.46,220a29.72,29.72,0,0,0-2.68-4.12l9.74,2.12A22.16,22.16,0,0,0,105.24,224.87Z"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 99.01px 220.375px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M102.51,191.62c8.49.71,10.85,5.48,10.74,14.29-.13,11-3.21,18.57-13.63,15.35C85.46,216.89,88.4,190.44,102.51,191.62Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 101.803px 206.794px;"
                                    id="elvcels91c2gd" class="animable"></path>
                                <path d="M107.8,205a18.07,18.07,0,0,0,2.18,3.73,2.36,2.36,0,0,1-2.32.77Z"
                                    style="fill: rgb(222, 87, 83); transform-origin: 108.82px 207.279px;"
                                    id="elvxgqnyixq8" class="animable"></path>
                                <path d="M102.05,203.58l1.84-.6S102.91,204.44,102.05,203.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 102.97px 203.416px;"
                                    id="ellzpj6ucutp" class="animable"></path>
                                <path d="M102.69,203.37a1.57,1.57,0,0,0-2,.54,2.41,2.41,0,0,1,2,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 101.69px 203.56px;"
                                    id="el2mdzuu2036j" class="animable"></path>
                                <path
                                    d="M99.27,199.32a.36.36,0,0,1-.25-.11.35.35,0,0,1,0-.51,4.78,4.78,0,0,1,4.13-1.08.36.36,0,1,1-.15.71,4.12,4.12,0,0,0-3.46.87A.35.35,0,0,1,99.27,199.32Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 101.175px 198.419px;"
                                    id="elovj5vg4f9r9" class="animable"></path>
                                <path
                                    d="M112.59,199.47a.34.34,0,0,1-.22-.07,3.65,3.65,0,0,0-3-.92.36.36,0,0,1-.19-.7,4.32,4.32,0,0,1,3.65,1.05.37.37,0,0,1,.06.51A.36.36,0,0,1,112.59,199.47Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 110.939px 198.592px;"
                                    id="el0dk4jmtui6kb" class="animable"></path>
                                <path
                                    d="M92,205.16s4.55-6.64,4.4-12.08c0,0,17.41-5.48,16.82,11.68,0,0,2.9-15-11.67-16.59S85.29,208,92.3,215C92.3,215,89.21,209.32,92,205.16Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 100.879px 201.543px;"
                                    id="eltvnel6b0qwd" class="animable"></path>
                                <path
                                    d="M93.27,207.07a3.74,3.74,0,0,0-3.73-3.74c-2.66.07-4.36,5.37,2.08,7.22C92.54,210.81,93.15,209.94,93.27,207.07Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 90.218px 206.962px;"
                                    id="el2eb0pn13asd" class="animable"></path>
                                <path
                                    d="M107.73,212a20.59,20.59,0,0,0-1.67,2.64c-.17-.06-.35-.11-.52-.18-2.35-.83-3.17-2-3.36-3a3.12,3.12,0,0,1,.11-1.52,3.25,3.25,0,0,1,.36-.8,11.58,11.58,0,0,0,4.28,2.58C107.41,211.9,107.73,212,107.73,212Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 104.931px 211.89px;"
                                    id="el9j12irwnznv" class="animable"></path>
                                <path
                                    d="M106.93,211.7l-.51.77c-2.22-.79-3.67-1.64-4.13-2.55a3.25,3.25,0,0,1,.36-.8A11.58,11.58,0,0,0,106.93,211.7Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 104.61px 210.795px;"
                                    id="elequw7rr6f6h" class="animable"></path>
                                <path
                                    d="M105.54,214.46c-2.35-.83-3.17-2-3.36-3a7.92,7.92,0,0,1,2.43,1.43A3,3,0,0,1,105.54,214.46Z"
                                    style="fill: rgb(222, 87, 83); transform-origin: 103.86px 212.96px;"
                                    id="elb2cyruuhz8d" class="animable"></path>
                                <path
                                    d="M102.28,192.25S97.69,205.94,88.91,205s6.27-17.48,6.27-17.48,14.81-4.23,21.26,4-3.19,13.22-3.19,13.22S114.69,194,102.28,192.25Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 102.411px 195.74px;"
                                    id="elo1ktr0obmj" class="animable"></path>
                                <path
                                    d="M95.28,203.9a.28.28,0,0,1-.24-.16.26.26,0,0,1,.15-.33c7-2.67,6.84-12.06,6.84-12.16a.23.23,0,0,1,.24-.25.27.27,0,0,1,.26.24c0,.1.16,9.84-7.16,12.64Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 98.7775px 197.45px;"
                                    id="el79dw1kqwftl" class="animable"></path>
                                <path d="M110.67,204.41l1.84-.59S111.52,205.27,110.67,204.41Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 111.59px 204.251px;"
                                    id="elnyj0tlp4u39" class="animable"></path>
                                <path d="M111.31,204.2a1.56,1.56,0,0,0-2,.55,2.39,2.39,0,0,1,2-.06Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 110.31px 204.394px;"
                                    id="ele1py7znc69" class="animable"></path>
                                <polygon points="97.7 227.13 105.13 230.91 105.01 238.44 94.39 232.25 97.7 227.13"
                                    style="fill: rgb(146, 227, 169); transform-origin: 99.76px 232.785px;"
                                    id="elyya5aytrw0o" class="animable"></polygon>
                                <polygon points="106.26 225.71 106.7 230.28 111.55 235.41 110.89 226.97 106.26 225.71"
                                    style="fill: rgb(146, 227, 169); transform-origin: 108.905px 230.56px;"
                                    id="el6m9zmytkfp5" class="animable"></polygon>
                                <path
                                    d="M71.93,174l-3.1-8a2.78,2.78,0,0,0-.81-2.35c-2.16-1.61-6.62-3.07-7.74-2.9-1.63.24-5,3.19-4.71,5.12s9.81,3.12,9.81,3.12l3.16,8.77Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 63.7412px 169.248px;"
                                    id="elg2pm8ycqak" class="animable"></path>
                                <path
                                    d="M85.28,245.31s6-4.77,3.61-15.31l-6.45-29.16L71.36,170.72l-5.42,2.74s9.1,29.43,9.94,31.42c.43,1,2.14,16.27,4.47,26.5C82.49,240.8,85.28,245.31,85.28,245.31Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 77.6962px 208.015px;"
                                    id="el7alfj268nbb" class="animable"></path>
                                <g id="elw3iwe5mnqge">
                                    <path
                                        d="M85.28,245.31s6-4.77,3.61-15.31l-6.45-29.16L71.36,170.72l-5.42,2.74s9.1,29.43,9.94,31.42c.43,1,2.14,16.27,4.47,26.5C82.49,240.8,85.28,245.31,85.28,245.31Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 77.6962px 208.015px;"
                                        class="animable"></path>
                                </g>
                                <polygon points="64.99 172.6 71.32 169.43 72.7 171.54 65.3 174.82 64.99 172.6"
                                    style="fill: rgb(146, 227, 169); transform-origin: 68.845px 172.125px;"
                                    id="el904wx1p0obl" class="animable"></polygon>
                                <g id="elnpq9qbgkaw">
                                    <polygon points="64.99 172.6 71.32 169.43 72.7 171.54 65.3 174.82 64.99 172.6"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 68.845px 172.125px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el5q0ca2ty4xn">
                                    <polygon points="97.7 227.13 105.13 230.91 105.01 238.44 94.39 232.25 97.7 227.13"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 99.76px 232.785px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el61ldsooigna">
                                    <polygon
                                        points="106.26 225.71 106.7 230.28 111.55 235.41 110.89 226.97 106.26 225.71"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 108.905px 230.56px;"
                                        class="animable"></polygon>
                                </g>
                            </g>
                            <g id="freepik--Desk--inject-261" class="animable"
                                style="transform-origin: 234.91px 312.9px;">
                                <rect x="287.3" y="211.41" width="29.96" height="23.28"
                                    style="fill: rgb(255, 255, 255); transform-origin: 302.28px 223.05px;"
                                    id="elvnrhlos7sbn" class="animable"></rect>
                                <g id="elr9jcqz7ode9">
                                    <rect x="309.58" y="211.41" width="7.68" height="23.28"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 313.42px 223.05px;"
                                        class="animable"></rect>
                                </g>
                                <polygon
                                    points="285.58 255.25 319.45 255.25 319.45 213 308.54 213 285.58 223.99 285.58 255.25"
                                    style="fill: rgb(146, 227, 169); transform-origin: 302.515px 234.125px;"
                                    id="elv9iazim9qil" class="animable"></polygon>
                                <g id="elr1o90rm045m">
                                    <rect x="308.54" y="213" width="10.91" height="42.25"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 313.995px 234.125px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eldt0oeizozo">
                                    <rect x="289.07" y="232.32" width="15.86" height="7.6"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 297px 236.12px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elusm36p69mtm">
                                    <rect x="289.07" y="242.46" width="15.86" height="1.09"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 297px 243.005px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elvepshbm6ef">
                                    <rect x="309.58" y="245.65" width="8.81" height="6.45"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 313.985px 248.875px;"
                                        class="animable"></rect>
                                </g>
                                <rect x="274.57" y="210.14" width="29.96" height="24.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 289.55px 222.415px;"
                                    id="el9gl7wke830f" class="animable"></rect>
                                <g id="el5ozls1up30e">
                                    <rect x="296.85" y="210.14" width="7.68" height="24.55"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 300.69px 222.415px;"
                                        class="animable"></rect>
                                </g>
                                <polygon
                                    points="272.85 255.25 306.72 255.25 306.72 213 295.81 213 272.85 223.99 272.85 255.25"
                                    style="fill: rgb(146, 227, 169); transform-origin: 289.785px 234.125px;"
                                    id="elhcli28o8klm" class="animable"></polygon>
                                <g id="elgenf7gqy39b">
                                    <rect x="295.81" y="213" width="10.91" height="42.25"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 301.265px 234.125px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elift1m5e7n4">
                                    <rect x="276.34" y="232.32" width="15.86" height="7.6"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 284.27px 236.12px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eljnn1h39s2io">
                                    <rect x="276.34" y="242.46" width="15.86" height="1.09"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 284.27px 243.005px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elwr9c4r3brr">
                                    <rect x="296.85" y="245.65" width="8.81" height="6.45"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 301.255px 248.875px;"
                                        class="animable"></rect>
                                </g>
                                <polygon points="251.81 415.66 257.94 415.66 268.94 262.41 260.81 262.41 251.81 415.66"
                                    style="fill: rgb(38, 50, 56); transform-origin: 260.375px 339.035px;"
                                    id="elmttyna31zu9" class="animable"></polygon>
                                <g id="el3k7420367v3">
                                    <polygon
                                        points="251.81 415.66 257.94 415.66 268.4 270.02 268.94 262.66 260.81 262.66 260.38 270.02 251.81 415.66"
                                        style="fill: rgb(255, 255, 255); opacity: 0.1; isolation: isolate; transform-origin: 260.375px 339.16px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="eleheuxqonabr">
                                    <polygon
                                        points="260.38 269.66 268.4 269.66 268.94 262.66 260.81 262.66 260.38 269.66"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 264.66px 266.16px;"
                                        class="animable"></polygon>
                                </g>
                                <polygon points="206.85 415.66 212.98 415.66 213.98 262.41 205.85 262.41 206.85 415.66"
                                    style="fill: rgb(38, 50, 56); transform-origin: 209.915px 339.035px;"
                                    id="elukluio5lu4" class="animable"></polygon>
                                <g id="elxs8nh3xvp2o">
                                    <polygon
                                        points="205.84 262.66 206.01 287.38 206.84 415.66 212.97 415.66 213.81 287.38 213.97 262.66 205.84 262.66"
                                        style="fill: rgb(255, 255, 255); opacity: 0.1; isolation: isolate; transform-origin: 209.905px 339.16px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el96delgfnitf">
                                    <polygon
                                        points="205.84 262.66 206.01 287.66 213.81 287.66 213.97 262.66 205.84 262.66"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 209.905px 275.16px;"
                                        class="animable"></polygon>
                                </g>
                                <polygon points="141.81 415.66 147.94 415.66 158.94 262.41 150.81 262.41 141.81 415.66"
                                    style="fill: rgb(38, 50, 56); transform-origin: 150.375px 339.035px;"
                                    id="el56ua87gvo7" class="animable"></polygon>
                                <g id="elk0vjb4o4br9">
                                    <polygon
                                        points="141.81 415.66 147.94 415.66 158.41 270.02 158.94 262.66 150.81 262.66 150.38 270.02 141.81 415.66"
                                        style="fill: rgb(255, 255, 255); opacity: 0.1; isolation: isolate; transform-origin: 150.375px 339.16px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el7ofz7h8igb9">
                                    <polygon
                                        points="150.38 269.66 158.41 269.66 158.94 262.66 150.81 262.66 150.38 269.66"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 154.66px 266.16px;"
                                        class="animable"></polygon>
                                </g>
                                <polygon points="321.89 415.66 328.02 415.66 319.01 262.41 310.88 262.41 321.89 415.66"
                                    style="fill: rgb(38, 50, 56); transform-origin: 319.45px 339.035px;"
                                    id="eljfinjmoew6" class="animable"></polygon>
                                <g id="el4rz5pezn00l">
                                    <polygon
                                        points="310.88 262.66 311.43 270.02 321.89 415.66 328.01 415.66 319.45 270.02 319.01 262.66 310.88 262.66"
                                        style="fill: rgb(255, 255, 255); opacity: 0.1; isolation: isolate; transform-origin: 319.445px 339.16px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elsu7mnwq1mo">
                                    <polygon
                                        points="319.01 262.66 310.88 262.66 311.43 269.66 319.45 269.66 319.01 262.66"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 315.165px 266.16px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elefx4ouowua9">
                                    <path
                                        d="M146.53,258.57H323.29a2.16,2.16,0,0,1,2.16,2.16v5.51a0,0,0,0,1,0,0H144.37a0,0,0,0,1,0,0v-5.51A2.16,2.16,0,0,1,146.53,258.57Z"
                                        style="fill: rgb(146, 227, 169); transform-origin: 234.91px 262.405px; transform: rotate(180deg);"
                                        class="animable"></path>
                                </g>
                                <g id="elueo0e9d84ib">
                                    <path
                                        d="M146.53,258.57H323.29a2.16,2.16,0,0,1,2.16,2.16v5.51a0,0,0,0,1,0,0H144.37a0,0,0,0,1,0,0v-5.51A2.16,2.16,0,0,1,146.53,258.57Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; isolation: isolate; transform-origin: 234.91px 262.405px; transform: rotate(180deg);"
                                        class="animable"></path>
                                </g>
                                <g id="elselg1thgc2">
                                    <rect x="144.37" y="258.57" width="181.08" height="3.84"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 234.91px 260.49px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <path
                                    d="M140.58,259.57H329.25a2.15,2.15,0,0,0,2.16-2.16h0a2.16,2.16,0,0,0-2.16-2.16H140.58a2.17,2.17,0,0,0-2.17,2.16h0A2.16,2.16,0,0,0,140.58,259.57Z"
                                    style="fill: rgb(146, 227, 169); transform-origin: 234.91px 257.41px;"
                                    id="elbqs2fvaldec" class="animable"></path>
                                <g id="elef541iqrnow">
                                    <path
                                        d="M140.58,259.57H329.25a2.15,2.15,0,0,0,2.16-2.16h0a2.16,2.16,0,0,0-2.16-2.16H140.58a2.17,2.17,0,0,0-2.17,2.16h0A2.16,2.16,0,0,0,140.58,259.57Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; isolation: isolate; transform-origin: 234.91px 257.41px;"
                                        class="animable"></path>
                                </g>
                                <polygon
                                    points="288.71 255.23 288.71 251.85 290.98 251.85 288.71 250.53 290.41 250.53 288.14 249.05 285.99 249.05 285.99 247.35 288.49 247.35 285.99 246.36 285.99 242.67 288.49 242.67 288.49 240.26 290.98 240.26 288.49 239.42 288.49 237.7 290.27 237.7 288.81 236.25 287.55 234.98 248.91 234.98 248.91 236.71 246.36 236.71 249.2 237.99 249.2 239.42 243.99 239.42 243.99 242.08 241.68 242.08 243.99 243.24 243.99 246.21 245.63 246.21 245.63 247.63 248.91 247.63 248.91 251.85 247.07 251.85 248.58 253.36 248.58 255.25 288.71 255.23"
                                    style="fill: rgb(146, 227, 169); transform-origin: 266.33px 245.115px;"
                                    id="el4c3j099h1y" class="animable"></polygon>
                                <g id="el4lwu6rcp2tv">
                                    <polygon
                                        points="288.71 255.23 288.71 251.85 290.98 251.85 288.71 250.53 290.41 250.53 288.14 249.05 285.99 249.05 285.99 247.35 288.49 247.35 285.99 246.36 285.99 242.67 288.49 242.67 288.49 240.26 290.98 240.26 288.49 239.42 288.49 237.7 290.27 237.7 288.81 236.25 287.55 234.98 248.91 234.98 248.91 236.71 246.36 236.71 249.2 237.99 249.2 239.42 243.99 239.42 243.99 242.08 241.68 242.08 243.99 243.24 243.99 246.21 245.63 246.21 245.63 247.63 248.91 247.63 248.91 251.85 247.07 251.85 248.58 253.36 248.58 255.25 288.71 255.23"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; isolation: isolate; transform-origin: 266.33px 245.115px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el32obm11yw">
                                    <polygon
                                        points="288.71 255.23 288.71 251.85 290.98 251.85 288.71 250.53 290.41 250.53 288.14 249.05 285.99 249.05 285.99 247.35 288.49 247.35 285.99 246.36 285.99 242.67 288.49 242.67 288.49 240.26 290.98 240.26 288.49 239.42 288.49 237.7 290.27 237.7 288.81 236.25 287.55 234.98 267.2 234.98 267.2 236.71 264.65 236.71 267.48 237.99 267.48 239.42 262.27 239.42 262.27 242.08 259.96 242.08 262.27 243.24 262.27 246.21 263.91 246.21 263.91 247.63 267.2 247.63 267.2 251.85 265.36 251.85 266.86 253.36 266.86 255.25 288.71 255.23"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 275.47px 245.115px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="eljb6apcf1r">
                                    <polygon points="249.2 239.42 267.48 239.42 249.2 238.76 249.2 239.42"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 258.34px 239.09px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="eli1qb5hp1cnh">
                                    <polygon points="248.91 247.63 267.2 247.63 267.28 248.91 248.91 247.63"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 258.095px 248.27px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elxq6ako36ze9">
                                    <polygon points="245.63 246.21 263.91 246.21 245.63 246.85 245.63 246.21"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 254.77px 246.53px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elh2mvg4gcqj">
                                    <polygon points="248.91 251.85 267.2 251.85 248.91 251.18 248.91 251.85"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 258.055px 251.515px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elsi9ie39decc">
                                    <polygon points="248.58 253.36 266.86 253.36 266.86 254.06 248.58 253.36"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 257.72px 253.71px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="eliopt67oijro">
                                    <polygon points="243.99 242.08 262.27 242.08 243.99 241.5 243.99 242.08"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 253.13px 241.79px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elfpi28if8197">
                                    <polygon points="248.91 236.71 267.2 236.71 248.91 236.07 248.91 236.71"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 258.055px 236.39px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el6eii3r0h42">
                                    <polygon points="288.49 237.7 269.94 237.7 288.49 238.27 288.49 237.7"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 279.215px 237.985px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el8fkd0x72kqh">
                                    <polygon points="267.48 239.42 288.49 239.42 269.44 240.04 267.48 239.42"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 277.985px 239.73px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="el3x50pur3h1y">
                                    <polygon points="262.27 242.08 288.49 242.67 288.49 242.08 262.27 242.08"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 275.38px 242.375px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elvconfguza6j">
                                    <polygon points="262.27 243.24 275.24 243.24 262.27 243.87 262.27 243.24"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 268.755px 243.555px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elqsi5c84yqu">
                                    <polygon points="285.99 246.36 267.2 246.21 285.99 245.79 285.99 246.36"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 276.595px 246.075px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elapfx1o4gym">
                                    <polygon points="285.99 247.35 266.86 247.35 285.99 247.99 285.99 247.35"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 276.425px 247.67px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="elm39d53hwwto">
                                    <polygon points="288.71 250.53 267.48 250.53 267.48 251.18 288.71 250.53"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 278.095px 250.855px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="ellb5bf07yhca">
                                    <polygon points="288.71 251.85 273.33 251.85 288.71 252.28 288.71 251.85"
                                        style="opacity: 0.1; isolation: isolate; transform-origin: 281.02px 252.065px;"
                                        class="animable"></polygon>
                                </g>
                                <path
                                    d="M239.51,250.87v3.21c0,.82-1,1.16-1.79,1.16H173.6c-.82,0-1.81-.34-1.81-1.16v-3.21Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 205.65px 253.055px;"
                                    id="elletgn3varlq" class="animable"></path>
                                <g id="elqlslrwv62er">
                                    <path
                                        d="M239.51,250.87v3.21c0,.82-1,1.16-1.79,1.16H173.6c-.82,0-1.81-.34-1.81-1.16v-3.21Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; isolation: isolate; transform-origin: 205.65px 253.055px;"
                                        class="animable"></path>
                                </g>
                                <g id="eli32rtsawcnr">
                                    <path
                                        d="M239.51,250.87v3.21c0,.82-1,1.16-1.79,1.16H195.43c-.82,0-1.8-.34-1.8-1.16v-3.21Z"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 216.57px 253.055px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M250.24,217.55l-7.64,34.63a2.59,2.59,0,0,1-2.48,2H198.43a1.68,1.68,0,0,1-1.57-2.17l7.62-34.36a2.39,2.39,0,0,1,2.48-1.7h41.7C249.78,215.91,250.48,216.42,250.24,217.55Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 223.537px 235.061px;"
                                    id="elxq92gya2ns" class="animable"></path>
                                <g id="elmcxmdt7tsdn">
                                    <path
                                        d="M250.24,217.55l-7.64,34.63a2.59,2.59,0,0,1-2.48,2H199.84a1.68,1.68,0,0,1-1.57-2.17l7.63-34.36a2.38,2.38,0,0,1,2.48-1.7h40.28C249.78,215.91,250.48,216.42,250.24,217.55Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; isolation: isolate; transform-origin: 224.242px 235.061px;"
                                        class="animable"></path>
                                </g>
                                <g id="elq7uh07stxb">
                                    <path
                                        d="M229.68,235.15h0c0,3-3.18,5.37-5.51,5.37s-3.71-2.41-3-5.37,3-5.27,5.26-5.36c-.66,3,.76,5.36,3.08,5.36Z"
                                        style="opacity: 0.2; isolation: isolate; transform-origin: 225.332px 235.155px;"
                                        class="animable"></path>
                                </g>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                    <feColorMatrix type="matrix"
                                        values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                    </feColorMatrix>
                                </filter>
                            </defs>
                        </svg>

                        <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Booking kamar berhasil!
                        </h2>

                        <div class="text-gray-600 mb-8">
                            Terimakasih telah memilih hotel kami. <br> Jangan lupa untuk menyerahkan bukti
                            reservasi
                            dengan mendownload di bawah ini.
                        </div>
                    @endif
                    <button @click="step = 1"
                        class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Kembali
                    </button>

                    <button wire:click.prevent="unduhPDF"
                        class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:ring-lime-200 dark:focus:ring-lime-800">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">

                            Unduh Bukti Reservasi
                        </span>
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
                                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-selected="true">
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
                                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-selected="true">
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
                                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-selected="true">
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
                                            Konfirmasi akhir</h3>
                                        <h3 x-show="step !== 3"
                                            class="text-lg font-semibold text-gray-400 dark:text-white">
                                            Konfirmasi akhir</h3>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div x-show.transition.in="step === 1">
                    <div class="p-4 mt-2">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="name" wire:model="nama_tamu"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                Pemesan</label>

                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="name" wire:model="nama_pemesan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                tamu</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="email" wire:model="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" wire:model="no_tlp"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                                Telepon</label>
                        </div>
                    </div>
                </div>
                <div x-show.transition.in="step === 2">
                    <div class="p-4 mt-2">
                        <div class="grid xl:grid-cols-3 xl:gap-6">
                            <div class="relative z-0 mb-6 w-full group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jumlah
                                    kamar</label>
                                <input type="number" wire:model="jumlah_kamar"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipe
                                    kamar</label>
                                <select wire:model="tipe_kamar"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Pilih tipe</option>
                                    @foreach ($kamars as $kamar)
                                        <option value="{{ $kamar->id }}">
                                            {{ $kamar->tipe_kamar }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Hanya bisa
                                    memesan tipe kamar yang sama saat melakukan pemesanan lebih dari 1 kamar
                                    dalam 1 kali pemesanan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show.transition.in="step === 3">
                    <div class="p-4 mt-2">
                        <div date-rangepicker class="flex justify-center items-center">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                </div>
                                <input wire:model="tgl_checkin" type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                    placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-gray-500">sampai</span>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                </div>
                                <input wire:model="tgl_checkout" type="date"
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
                <button x-show="step > 1" @click="step--" type="button"
                    class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Sebelumnya</button>
            </div>

            <div class="w-1/2 text-right">
                <button x-show="step < 3" @click="step++" type="button"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Selanjutnya</button>

                <button @click="step = 'complete'" x-show="step === 3" type="button" wire:click.prevent="store()"
                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Konfirmasi</button>
            </div>
        </div>
    </div>
</div>
