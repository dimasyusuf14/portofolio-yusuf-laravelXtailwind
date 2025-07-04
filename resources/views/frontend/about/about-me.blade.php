@extends('frontend.main')

@section('content_frontend')

    <!-- Title Section -->
    <div class="grid-rows-1 px-4 sm:px-8 md:px-16 lg:px-20 py-10 sm:py-16 justify-start">
        <div class="row-span-2 mt-10 sm:mt-20 relative">
            <div
                class="absolute left-[-100px] top-[-100px] w-40 sm:w-48 md:w-60 h-40 sm:h-48 md:h-60 bg-white opacity-15 rounded-full blur-3xl pointer-events-none">
            </div>
            <h1 class="font-syne text-3xl md:text-7xl font-bold mb-4 md:mb-6 text-white">
                About Me
            </h1>
            <p class="font-rubik text-sm sm:text-lg text-gray-400 mb-8 max-w-md">
                Little Brief About Myself
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
                    <span class="md:block">
                        <!-- My mission is to turn ideas into real. -->

                        {{ $aboutdata->about_title ?? 'My mission is to turn ideas into real.' }}
                    </span>
                </h1>
            </div>

            <!-- Kanan -->
            <div class="md:col-span-2">
                <p class="font-rubik text-sm sm:text-base md:text-xl text-gray-400 max-w-[500px] leading-relaxed">
                    <!-- I build custom mobile apps tailored to client needs, combining unique UI designs and smooth functionality to create engaging, high-performing solutions. Through close collaboration and continuous iteration, I ensure every project meets expectations and delivers real value without hassle. -->

                    {{ $aboutdata->about_description ?? 'I build custom mobile apps tailored to client needs, combining unique UI designs and smooth functionality to create engaging, high-performing solutions. Through close collaboration and continuous iteration, I ensure every project meets expectations and delivers real value without hassle.' }}
                </p>
            </div>
        </div>
    </div>

    <!-- Grid Gambar -->
    <div class="p-4 sm:p-8 md:p-10 flex flex-col items-center space-y-10">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6 max-w-6xl w-full mx-auto group">

            <!-- Gambar Kiri -->
            <div class="col-span-2 relative overflow-hidden rounded-lg h-[250px] sm:h-[300px] md:h-[400px] group/gambar1">

                <img src="{{ asset('storage/' . $aboutdata->about_image1) }}" alt="Person 1"
                    class="w-full h-full object-cover sm:grayscale group-hover/gambar1:grayscale-0 transition-all duration-500" />
                <div class="absolute top-5 left-0 w-[20px] h-30 border-2 border-orange-400 rounded-full bg-transparent"></div>

            </div>

            <!-- Gambar Kanan -->
            <div class="col-span-3 relative overflow-hidden rounded-lg h-[250px] sm:h-[300px] md:h-[400px] group/gambar2">
                <img src="{{ asset('storage/' . $aboutdata->about_image2) }}" alt="Person 2"
                    class="w-full h-full object-cover sm:grayscale group-hover/gambar2:grayscale-0 transition-all duration-500" />
                <div class="absolute bottom-5 right-0 h-[20px] w-30 border-2 border-orange-400 rounded-full bg-transparent"></div>
            </div>

            <!-- Social Media -->
            <div class="col-span-5 space-y-2 px-2 sm:px-0">
                <p class="font-syne text-xl sm:text-2xl md:text-4xl font-semibold pb-3 sm:pb-5 text-white text-left">
                    Follow me on:
                </p>
                <div class="flex font-rubik font-bold justify-between w-full text-xs sm:text-sm md:text-base text-gray-300 tracking-wide uppercase">
                    <a href="#" class="hover:text-orange-500 transition-colors duration-300">Dribbble</a>
                    <a href="#" class="hover:text-orange-500 transition-colors duration-300">Twitter</a>
                    <a href="#" class="hover:text-orange-500 transition-colors duration-300">Facebook</a>
                    <a href="https://www.instagram.com/dms.yusuf"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-orange-500 transition-colors duration-300">Instagram</a>
                </div>

            </div>
        </div>
    </div>
@endsection
