@extends('frontend.main')

@section('content_frontend')

<!-- Title Section -->
<div class="grid-rows-1 px-4 sm:px-8 md:px-16 lg:px-20 py-10 sm:py-16 justify-start">
    <div class="row-span-2 mt-10 sm:mt-20 relative">
        <div
            class="absolute left-[-100px] top-[-100px] w-40 sm:w-48 md:w-60 h-40 sm:h-48 md:h-60 bg-white opacity-15 rounded-full blur-3xl pointer-events-none">
        </div>
        <h1 class="font-syne text-3xl md:text-7xl font-bold mb-4 md:mb-6 text-white">
            Contact Me
        </h1>
        <p class="font-rubik text-sm sm:text-lg text-gray-400 mb-8 max-w-md">
            For Any Project Knock Me
        </p>
        <div class="h-[2px] w-full bg-white opacity-20 mt-8"></div>
    </div>
</div>

<!-- Misi -->
<div class="flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-4 px-4 sm:px-8 md:px-16 lg:px-20 py-10 sm:py-16 items-center gap-8 max-w-7xl w-full">
        <!-- Kiri -->
        <div class="md:col-span-2 relative">
            <h1 class="font-syne text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white max-w-sm">
                <span class="md:block">Get in Touch With Me</span>
            </h1>
        </div>

        <!-- Kanan -->
        <div class="md:col-span-2">
            <div class="flex flex-col items-center text-center px-4 mt-20 gap-5">
                <a href="https://wa.me/629695902631" target="_blank"
                    class="font-rubik flex items-center gap-2 sm:gap-3
                        px-3 sm:px-5 lg:px-6
                        py-1.5 sm:py-2.5 lg:py-3
                        text-[10px] sm:text-sm lg:text-base 
                        text-white bg-green-500
                        rounded-full uppercase font-bold tracking-wider
                        hover:bg-green-400 transition-colors duration-300
                        w-[300px] justify-center">
                    Hit me up on WhatsApp
                    <i class="fab fa-whatsapp text-xl"></i>
                </a>

                <a href="mailto:youremail@gmail.com"
                    class="font-rubik flex items-center gap-2 sm:gap-3
                        px-3 sm:px-5 lg:px-6
                        py-1.5 sm:py-2.5 lg:py-3
                        text-[10px] sm:text-sm lg:text-base
                        text-white  bg-red-500
                        rounded-full uppercase font-bold tracking-wider
                        hover:bg-red-400 transition-colors duration-300
                        w-[300px] justify-center">
                    Hit me up on EMAIL
                    <img src="{{ asset('assets/icons/icon.svg') }}" alt="Gmail Icon" class="w-6 h-5" />
                </a>




            </div>
        </div>
    </div>
</div>

<!-- Hero Image -->
<div class="px-4 sm:px-10 lg:px-20 mb-10">
    <img src="{{ asset('assets/image/example_project1_pict.png') }}" alt="Orbitlustry" class="w-full object-cover rounded-2xl max-h-[500px] sm:max-h-[600px] mx-auto" />
</div>

<div class="px-4 sm:px-10 lg:px-20 mb-10 pb-40">
    <div class="flex font-bold justify-between w-full text-xs sm:text-sm md:text-base text-gray-300 tracking-wide">
        <a href="#" class="hover:text-orange-500 transition-colors duration-300">Jakarta Timur, Pekayon, Pasar Rebo</a>
        <a href="#" class="hover:text-orange-500 transition-colors duration-300">+62 896 9590 2631</a>
        <a href="#" class="hover:text-orange-500 transition-colors duration-300">yusufdimas02@gmail.com</a>

    </div>
</div>
@endsection