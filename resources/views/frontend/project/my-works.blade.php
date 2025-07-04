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

@php
$count = $projects->count();
$chunks = $projects->slice(8)->values();
@endphp

<!-- Grid Project Gallery -->
@if($count > 0)
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6">
    @foreach($projects->take(3) as $project)
    <div class="hover:scale-105 transition overflow-hidden rounded-2xl">
        <div class="w-full h-[200px] md:h-[350px]">
            <img src="{{ $project->image ? asset('storage/' . $project->image) : asset('assets/image/example_profile_picture.png') }}" alt="{{ $project->title }}" class="w-full h-full object-cover rounded-b-2xl" />
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $project->client }}</p>
            <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $project->title }}</h3>
        </div>
    </div>
    @endforeach
</div>
@endif

@if($count > 3)
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mt-4 md:mt-6">
    <div class="md:col-span-2">
        @if($projects->get(3))
        <div class="hover:scale-105 transition bg-red-600">
            <div class="w-full h-[250px] md:h-[600px]">
                <img src="{{ $projects->get(3)->image ? asset('storage/' . $projects->get(3)->image) : asset('assets/image/example_project1_pict.png') }}" alt="{{ $projects->get(3)->title }}" class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="p-3 md:p-4 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $projects->get(3)->client }}</p>
                <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $projects->get(3)->title }}</h3>
            </div>
        </div>
        @endif
    </div>

    <!-- bagian kolom kanan atas bawah -->

    <div class="md:col-span-2 space-y-4 md:space-y-0">
        @if($projects->get(4))
        <div class="hover:scale-105 transition bg-red-600 ">
            <div class="w-full h-[250px] md:h-[273px] pb-4">
                <img src="{{ $projects->get(4)->image ? asset('storage/' . $projects->get(4)->image) : asset('assets/image/example_profile_picture.png') }}" alt="{{ $projects->get(4)->title }}" class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="pb-4 md:pb-4 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $projects->get(4)->client }}</p>
                <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $projects->get(4)->title }}</h3>
            </div>
        </div>
        @endif
        @if($projects->get(5))
        <div class="hover:scale-105 transition bg-red-600">
            <div class="w-full h-[250px] md:h-[273px] pb-4">
                <img src="{{ $projects->get(5)->image ? asset('storage/' . $projects->get(5)->image) : asset('assets/image/example_project3_pict.png') }}" alt="{{ $projects->get(5)->title }}" class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="pb-4 md:pb-4 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $projects->get(5)->client }}</p>
                <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $projects->get(5)->title }}</h3>
            </div>
        </div>
        @endif
    </div>
</div>
@endif

@if($count > 6)
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mt-4 md:mt-6">
    <div class="md:col-span-2 hover:scale-105 transition">
        @if($projects->get(6))
        <div class="w-full h-[250px] md:h-[500px]">
            <img src="{{ $projects->get(6)->image ? asset('storage/' . $projects->get(6)->image) : asset('assets/image/example_profile_picture.png') }}" alt="{{ $projects->get(6)->title }}" class="w-full h-full object-cover rounded-2xl">
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $projects->get(6)->client }}</p>
            <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $projects->get(6)->title }}</h3>
        </div>
        @endif
    </div>
    <div class="md:col-span-2 hover:scale-105 transition">
        @if($projects->get(7))
        <div class="w-full h-[250px] md:h-[500px] rounded-2xl">
            <img src="{{ $projects->get(7)->image ? asset('storage/' . $projects->get(7)->image) : asset('assets/image/example_project3_pict.png') }}" alt="{{ $projects->get(7)->title }}" class="w-full h-full object-cover rounded-2xl">
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $projects->get(7)->client }}</p>
            <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $projects->get(7)->title }}</h3>
        </div>
        @endif
    </div>
</div>
@endif

@if($count > 8)
@foreach($chunks->chunk(8) as $chunk)
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mt-4 md:mt-6">
    @foreach($chunk->take(3) as $project)
    <div class="hover:scale-105 transition overflow-hidden rounded-2xl">
        <div class="w-full h-[200px] md:h-[350px]">
            <img src="{{ $project->image ? asset('storage/' . $project->image) : asset('assets/image/example_profile_picture.png') }}" alt="{{ $project->title }}" class="w-full h-full object-cover rounded-b-2xl" />
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $project->client }}</p>
            <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $project->title }}</h3>
        </div>
    </div>
    @endforeach
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mt-4 md:mt-6">
    <div class="md:col-span-2">
        @if($chunk->get(3))
        <div class="hover:scale-105 transition bg-red-600">
            <div class="w-full h-[250px] md:h-[600px]">
                <img src="{{ $chunk->get(3)->image ? asset('storage/' . $chunk->get(3)->image) : asset('assets/image/example_project1_pict.png') }}" alt="{{ $chunk->get(3)->title }}" class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="p-3 md:p-4 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $chunk->get(3)->client }}</p>
                <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $chunk->get(3)->title }}</h3>
            </div>
        </div>
        @endif
    </div>
    <div class="md:col-span-2 space-y-4 md:space-y-0">
        @if($chunk->get(4))
        <div class="hover:scale-105 transition bg-red-600">
            <div class="w-full h-[250px] md:h-[273px] pb-4 ">
                <img src="{{ $chunk->get(4)->image ? asset('storage/' . $chunk->get(4)->image) : asset('assets/image/example_profile_picture.png') }}" alt="{{ $chunk->get(4)->title }}" class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="pb-4 md:pb-4 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $chunk->get(4)->client }}</p>
                <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $chunk->get(4)->title }}</h3>
            </div>
        </div>
        @endif
        @if($chunk->get(5))
        <div class="hover:scale-105 transition bg-red-600">
            <div class="w-full h-[250px] md:h-[273px] pb-4 ">
                <img src="{{ $chunk->get(5)->image ? asset('storage/' . $chunk->get(5)->image) : asset('assets/image/example_project3_pict.png') }}" alt="{{ $chunk->get(5)->title }}" class="w-full h-full object-cover rounded-2xl">
            </div>
            <div class="pb-4 md:pb-4 text-center">
                <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $chunk->get(5)->client }}</p>
                <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $chunk->get(5)->title }}</h3>
            </div>
        </div>
        @endif
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mt-4 md:mt-6">
    <div class="md:col-span-2 hover:scale-105 transition">
        @if($chunk->get(6))
        <div class="w-full h-[250px] md:h-[500px]">
            <img src="{{ $chunk->get(6)->image ? asset('storage/' . $chunk->get(6)->image) : asset('assets/image/example_profile_picture.png') }}" alt="{{ $chunk->get(6)->title }}" class="w-full h-full object-cover rounded-2xl">
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $chunk->get(6)->client }}</p>
            <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $chunk->get(6)->title }}</h3>
        </div>
        @endif
    </div>
    <div class="md:col-span-2 hover:scale-105 transition">
        @if($chunk->get(7))
        <div class="w-full h-[250px] md:h-[500px] rounded-2xl">
            <img src="{{ $chunk->get(7)->image ? asset('storage/' . $chunk->get(7)->image) : asset('assets/image/example_project3_pict.png') }}" alt="{{ $chunk->get(7)->title }}" class="w-full h-full object-cover rounded-2xl">
        </div>
        <div class="p-3 md:p-4 text-center">
            <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $chunk->get(7)->client }}</p>
            <h3 class="font-syne text-base md:text-2xl text-gray-400 font-bold">{{ $chunk->get(7)->title }}</h3>
        </div>
        @endif
    </div>
</div>
@endforeach
@endif
@endsection
