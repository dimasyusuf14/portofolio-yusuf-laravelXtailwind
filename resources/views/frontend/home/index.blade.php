@extends('frontend.main')

@section('content_frontend')

<!-- Hero Section -->
<section>
    <div class="flex justify-center">
        <div class="grid grid-cols-2 md:grid-cols-2 gap-10 px-4 sm:px-10 lg:px-20 py-10 items-center pt-40 max-w-7xl w-full">
            <!-- Kolom Kiri -->
            <div class="relative">
                <!-- Efek bulat blur -->
                <div class="absolute left-[-30px] top-[-50px] w-32 h-32 sm:w-44 sm:h-44 bg-white opacity-10 rounded-full blur-3xl pointer-events-none"></div>

                <h1 class="font-syne text-lg/8 sm:text-2xl md:text-3xl lg:text-5xl font-bold leading-tight mb-4 text-white">

                    {{$landingdata->landing_title ?? 'Welcome to My Portfolio'}}
                </h1>

                <p class=" font-rubik text-xs sm:text-sm md:text-base lg:text-lg text-gray-400 mb-6 max-w-xl leading-relaxed">
                    {{$landingdata->landing_description ?? 'I am a passionate designer and developer, dedicated to creating exceptional digital experiences. Explore my portfolio to see my work and learn more about my journey.'}}

                    <!-- I’m a Software Engineering student with a strong passion and skill in mobile application development using Flutter. With hands-on experience in building several Flutter projects, I specialize in creating responsive, user-friendly, and functional apps. I enjoy exploring new technologies and continuously improving my development skills to deliver high-quality digital solutions. -->
                </p>

                <a href="{{ route('about-me') }}"
                    class="inline-flex items-center gap-2 sm:gap-3
                    px-4 sm:px-6 lg:px-8
                    py-2 sm:py-3 lg:py-3
                    text-xs sm:text-sm lg:text-base
                    border border-orange-500 text-white
                    rounded-full uppercase font-semibold tracking-wider
                    hover:bg-orange-500 transition-colors duration-300
                    whitespace-nowrap
                    font-rubik">
                    Discover More About Me
                </a>
            </div>

            <!-- Kolom Kanan -->
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('storage/' . $landingdata->landing_image) }}" alt="Profile"
                    class="w-56 sm:w-72 md:w-106 lg:w-[30rem] h-auto" />
            </div>

        </div>
    </div>
</section>
<!-- Projects Highlight -->
<div class="flex flex-col items-center text-center px-4 mt-20">
    <div class="relative inline-block">
        <div class="absolute right-[-60px] top-[-50px] w-40 h-40 bg-white opacity-10 blur-2xl rounded-full pointer-events-none"></div>
        <h1 class="font-syne text-lg sm:text-2xl md:text-3xl lg:text-5xl font-bold leading-tight mb-4 text-white">My Projects Highlight</h1>
    </div>
    <a href="{{ route('my-works') }}" class="font-rubik flex items-center gap-2 sm:gap-3
           px-3 sm:px-5 lg:px-6
           py-1.5 sm:py-2.5 lg:py-3
           text-[10px] sm:text-sm lg:text-base
           border border-orange-500 text-white
           rounded-full uppercase font-semibold tracking-wider
           hover:bg-orange-500 transition-colors duration-300">
        Explore More
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
    </a>
</div>

<!-- Project Grid -->
<div class="flex justify-center items-start py-10 px-4 pb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-4xl w-full mx-auto">
        @foreach ([1,2,3,4] as $item)
        <a class="flex flex-col items-start hover:bg-gray-400/10 p-2 rounded-2xl transition-colors duration-300 group" href="{{ route('detail-project') }}">
            <div class="rounded-2xl overflow-hidden w-full aspect-[4/3] bg-gray-800">
                <img src="assets/image/example_project{{ $item }}_pict.png" alt="Project Image" class="w-full h-full object-cover sm:grayscale group-hover:grayscale-0 transition-all duration-500" />
            </div>
            <div class="flex items-center mb-2 mt-4">
                <h2 class="font-syne text-xl font-semibold text-white mr-4">Brand Journey Improvements</h2>
                <div class="w-1 h-6 bg-orange-500 rounded"></div>
            </div>
            <div class="text-sm text-gray-400 space-y-1 w-full">
                <div class="flex"><span class="w-16 font-rubik">Client:</span><span class="text-white font-rubik">Organc</span></div>
                <div class="flex"><span class="w-16 font-rubik">Work:</span><span class="text-white flex gap-4 font-rubik">Branding <span>Logo design</span></span></div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
