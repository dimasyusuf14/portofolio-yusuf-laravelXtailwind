@extends('frontend.main')

@section('content_frontend')

<!-- Title Section -->
<div class="p-8 md:p-20">
    <div class="mt-10 md:mt-20 relative">
        <div class="absolute left-0 top-0 w-40 h-40 md:w-60 md:h-60 bg-white opacity-15 rounded-full blur-3xl pointer-events-none"></div>
        <h1 class="font-syne text-3xl md:text-7xl font-bold mb-4 md:mb-6 text-white">
            My works
        </h1>
        <p class="font-rubik text-sm md:text-lg text-gray-400 mb-6 md:mb-8 max-w-md">
            Showcase About Works
        </p>
        <div class="h-px md:h-[2px] w-full bg-white opacity-20 mt-6 md:mt-8"></div>
    </div>
</div>

<!-- Grid Project Gallery -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6">
    <!-- Project Items 1-3 -->
    <div class="hover:scale-105 transition overflow-hidden rounded-2xl">
        <div class="w-full h-[200px] md:h-[350px]">
            <img src="{{ asset('assets/image/example_profile_picture.png') }}" alt="Orbitlustry" class="w-full h-full object-cover rounded-b-2xl" />
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Lori</p>
            <h3 class="font-syne text-base md:text-2xl font-bold">Orbitlustry</h3>
        </div>
    </div>

    <div class="hover:scale-105 transition overflow-hidden rounded-2xl">
        <div class="w-full h-[200px] md:h-[350px]">
            <img src="{{ asset('assets/image/example_project2_pict.png') }}" alt="Orbitlustry" class="w-full h-full object-cover rounded-b-2xl" />
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Lori</p>
            <h3 class="font-syne text-base md:text-2xl font-bold">Orbitlustry</h3>
        </div>
    </div>

    <div class="hover:scale-105 transition overflow-hidden rounded-2xl">
        <div class="w-full h-[200px] md:h-[350px]">
            <img src="{{ asset('assets/image/example_profile_picture.png') }}" alt="Remophonic" class="w-full h-full object-cover rounded-b-2xl" />
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Zonie</p>
            <h3 class="font-syne text-base md:text-2xl font-bold">Remophonic</h3>
        </div>
    </div>
</div>

<!-- Project Items 4-6 -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mt-4 md:mt-6">
    <!-- Large Left Item -->
    <div class="md:col-span-2">
        <div class="hover:scale-105 transition">
            <div class="w-full h-[250px] md:h-[600px]"> <!-- Changed mobile height to match first gallery -->
                <img src="{{ asset('assets/image/example_project1_pict.png') }}" alt="Dektoloyal"
                    class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="p-3 md:p-4 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Lana</p>
                <h3 class="font-syne text-base md:text-2xl font-bold">Dektoloyal</h3>
            </div>
        </div>
    </div>

    <!-- Right Column (2 smaller items) -->
    <div class="md:col-span-2 space-y-4 md:space-y-6">
        <!-- Top Right Item -->
        <div class="hover:scale-105 transition">
            <div class="w-full h-[250px] md:h-[260px]"> <!-- Changed mobile height to match first gallery -->
                <img src="{{ asset('assets/image/example_profile_picture.png') }}" alt="Backriptograph"
                    class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="p-3 md:p-0  text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Henrick</p>
                <h3 class="font-syne text-base md:text-2xl font-bold">Backriptograph</h3>
            </div>
        </div>

        <!-- Bottom Right Item -->
        <div class="hover:scale-105 transition">
            <div class="w-full h-[250px] md:h-[260px]"> <!-- Changed mobile height to match first gallery -->
                <img src="{{ asset('assets/image/example_project3_pict.png') }}" alt="Fletheristal"
                    class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="p-3 md:p-0 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Tomo</p>
                <h3 class="font-syne text-base md:text-2xl font-bold">Fletheristal</h3>
            </div>
        </div>
    </div>
</div>

<!-- Project Items 7-8 -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mt-4 md:mt-6 pb-20">
    <div class="md:col-span-2 hover:scale-105 transition">
        <div class="w-full h-[250px] md:h-[500px]">
            <img src="{{ asset('assets/image/example_profile_picture.png') }}" alt="South Adienne" class="w-full h-full object-cover rounded-2xl">
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Mikel</p>
            <h3 class="font-syne text-base md:text-2xl font-bold">South Adienne</h3>
        </div>
    </div>

    <div class="md:col-span-2 hover:scale-105 transition">
        <div class="w-full h-[250px] md:h-[500px] rounded-2xl">
            <img src="{{ asset('assets/image/example_project3_pict.png') }}" alt="Lake Theor" class="w-full h-full object-cover rounded-2xl">
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">Monda</p>
            <h3 class="font-syne text-base md:text-2xl font-bold">Lake Theor</h3>
        </div>
    </div>
</div>
@endsection