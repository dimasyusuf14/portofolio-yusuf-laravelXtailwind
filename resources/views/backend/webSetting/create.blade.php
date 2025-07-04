@extends('backend.main')

@section('content')
<div class="max-w-5xl mx-auto pt-20 pb-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Setting Landing Page</h2>

    {{-- Form Start --}}
    <form action="{{ route('store_webSetting') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')


        {{-- Landing Page --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10">
            {{-- Text Inputs --}}
            <div>
                <!-- Landing Title -->
                <div class="mb-4">
                    <label for="landing_title" class="block font-medium text-gray-700 mb-1">Landing Title</label>
                    <input type="text" name="landing_title" id="landing_title"
                        class="w-full border border-gray-300 px-3 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Landing Description -->
                <div class="mb-4">
                    <label for="landing_description" class="block font-medium text-gray-700 mb-1">Landing Description</label>
                    <textarea name="landing_description" id="landing_description" rows="4"
                        class="w-full border border-gray-300 px-3 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
            </div>

            {{-- Image Upload --}}
            <div>
                <!-- Landing Image -->
                <div class="mb-6">
                    <label for="landing_image" class="block font-medium text-gray-700 mb-2">Landing Image</label>
                    <div
                        class="relative w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center overflow-hidden bg-gray-50 hover:bg-gray-100">
                        <input type="file" name="landing_image" id="landing_image"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10">
                        <span class="text-sm text-gray-500">Klik untuk upload</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="h-[2px] w-full bg-black opacity-20 mb-10"></div>

        {{-- About Page --}}
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Setting About Page</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            {{-- Text Inputs --}}
            <div>
                <!-- About Title -->
                <div class="mb-4">
                    <label for="about_title" class="block font-medium text-gray-700 mb-1">About Title</label>
                    <input type="text" name="about_title" id="about_title"
                        class="w-full border border-gray-300 px-3 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- About Description -->
                <div class="mb-4">
                    <label for="about_description" class="block font-medium text-gray-700 mb-1">About Description</label>
                    <textarea name="about_description" id="about_description" rows="4"
                        class="w-full border border-gray-300 px-3 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
            </div>

            <div class="flex gap-6">
                <!-- About Image 1 -->
                <div class="mb-6">
                    <label for="about_image1" class="block font-medium text-gray-700 mb-2">About  Image 1</label>
                    <div
                        class="relative w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center overflow-hidden bg-gray-50 hover:bg-gray-100">
                        <input type="file" name="about_image1" id="about_image1"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10">
                        <span class="text-sm text-gray-500">Klik untuk upload</span>
                    </div>
                </div>


                <!-- About Image 2 -->
                <div class="mb-6">
                    <label for="about_image2" class="block font-medium text-gray-700 mb-2">About Image 2</label>
                    <div
                        class="relative w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center overflow-hidden bg-gray-50 hover:bg-gray-100">
                        <input type="file" name="about_image2" id="about_image2"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10">
                        <span class="text-sm text-gray-500">Klik untuk upload</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- Submit Button --}}
        <div class="mt-8 text-right">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">
                Simpan Pengaturan
            </button>
        </div>
    </form>
</div>
@endsection
