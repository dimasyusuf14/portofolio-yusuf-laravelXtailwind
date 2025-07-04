@extends('frontend.main')

@section('content_frontend')


<!-- Title Section -->
<div class="p-6 sm:p-10 md:p-20 pt-20">
    <div class="relative mt-10">
        <div class="absolute left-0 top-0 w-40 sm:w-60 h-40 sm:h-60 bg-white opacity-15 rounded-full blur-3xl pointer-events-none"></div>
        <h1 class="font-syne text-3xl md:text-7xl font-bold mb-4 md:mb-6 text-white">Project Detail</h1>
        <p class="font-rubik text-gray-400 mb-6 max-w-md text-sm sm:text-lg">Details About The Project</p>
        <div class="h-[2px] w-full bg-white opacity-20 mt-8"></div>
    </div>
</div>

<!-- Hero Image -->
<div class="px-4 sm:px-10 lg:px-20 mb-10">
    <img src="{{ asset('assets/image/example_project1_pict.png') }}" alt="Orbitlustry" class="w-full object-cover rounded-2xl max-h-[500px] sm:max-h-[600px] mx-auto" />
</div>

<!-- Project Story -->
<div class="flex flex-col items-center px-4 sm:px-10 md:px-20 mb-20">
    <div class="relative max-w-2xl"> <!-- Removed text-center from here -->
        <div class="absolute left-0 top-0 w-40 h-40 bg-white opacity-10 rounded-full blur-3xl pointer-events-none"></div>
        <h1 class="font-syne text-3xl sm:text-3xl md:text-4xl font-bold mb-6 text-center">Project Story</h1> <!-- Kept text-center only for heading -->
        <p class="text-gray-400 mb-4 text-sm sm:text-base text-left"> <!-- Added text-left -->
            The fact that photography has different meanings to different people is one of the many components of its appeal. Photography is such an important part of our life that it is now very difficult to imagine the world without it.
        </p>
        <p class="text-gray-400 text-sm sm:text-base text-left"> <!-- Added text-left -->
            We cannot imagine a wedding without the opportunity to capture it on film, we would not be able to remember the growing up of children or the holidays if we did not have pictures.
        </p>
    </div>
</div>

<!-- Two Side-by-Side Images -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-6xl mx-auto px-6 mb-20">
    <div class="transition">
        <img src="{{ asset('assets/image/example_profile_picture.png') }}" alt="South Adienne" class="w-full object-cover rounded-2xl max-h-[400px] sm:max-h-[500px]" />
    </div>
    <div class="transition">
        <img src="{{ asset('assets/image/example_profile_picture.png') }}" alt="Lake Theor" class="w-full object-cover rounded-2xl max-h-[400px] sm:max-h-[500px]" />
    </div>
</div>

<!-- Day One Section -->
<div class="flex flex-col items-center px-4 sm:px-10 md:px-20 mb-20">
    <div class="relative text-center max-w-3xl">
        <div class="absolute left-0 top-0 w-40 h-40 bg-white opacity-10 rounded-full blur-3xl pointer-events-none"></div>
        <h1 class="font-syne text-3xl sm:text-4xl md:text-5xl font-bold mb-6 text-start">Day One</h1>
        <p class="text-gray-400 mb-4 text-sm sm:text-base text-start">
            Everywhere we are haunted by photography in newspapers, magazines, advertisements on television on the Internet, but we still crave even more.
        </p>
        <p class="text-gray-400 text-sm sm:text-base text-start">
            And what helps to achieve a good result? We will look at these issues and some of the possibilities of photography and explain that it is a combination of thought imagination, visual design, technical skills and organizational skills
        </p>
    </div>
</div>

<!-- Other Project Bottom Divider -->
<div class="flex flex-col items-center mb-10">
    <div class="h-[2px] w-full bg-white opacity-20 mb-10"></div>
    <h1 class="font-syne text-3xl sm:text-4xl md:text-6xl font-bold text-center">Other Projects</h1>
</div>

<!-- Project Grid Gallery -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-6 mb-20">
    @for($i = 0; $i < 3; $i++)
        <div class="hover:scale-105 transition">
        <img src="{{ asset('assets/image/example_project2_pict.png') }}" alt="Project Image" class="w-full object-cover rounded-2xl max-h-[300px] sm:max-h-[350px]" />
        <div class="p-4">
            <h3 class="font-syne text-lg font-bold text-center">Project Title</h3>
            <p class="text-sm text-gray-400 mt-1 text-center">Subtitle</p>
        </div>
</div>
@endfor
</div>
@endsection