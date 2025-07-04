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

// Pola: 3,2,3,2, dst
$pattern = [3,2];
$rows = [];
$index = 0;
$projectsArr = $projects->all();
while ($index < count($projectsArr)) {
    foreach ($pattern as $take) {
        if ($index >= count($projectsArr)) break;
        $rows[] = array_slice($projectsArr, $index, $take);
        $index += $take;
    }
}
@endphp

<!-- Grid Project Gallery -->
@foreach($rows as $row)
    <div class="grid grid-cols-1 md:grid-cols-{{ count($row) }} gap-4 md:gap-6 max-w-6xl mx-auto px-4 md:px-6 mb-6 pb-10">
        @foreach($row as $project)
            <div class="flex flex-col items-center">
                <div class="w-full h-[220px] md:h-[350px] flex items-center justify-center">
                    <img src="{{ $project->image ? asset('storage/' . $project->image) : asset('assets/image/example_profile_picture.png') }}" alt="{{ $project->title }}" class="w-full h-full object-cover rounded-2xl" />
                </div>
                <div class="flex flex-col items-center mt-2">
                    <p class="font-rubik text-xs md:text-sm text-gray-400 mt-1">{{ $project->client }}</p>
                    <h3 class="font-syne text-base md:text-xl font-bold text-white">{{ $project->title }}</h3>
                </div>
            </div>
        @endforeach
    </div>
@endforeach

@endsection
