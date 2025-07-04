@extends('backend.main')

@section('content')

<!-- Alert Success -->
@if(session('success'))
<x-alert type="success" :message="session('success')" duration="5000" />
@endif

<!-- Alert Error -->
@if($errors->any())
<x-alert type="error" :message="$errors->all()" duration="7000" />
@endif


<div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-md">

    <h2 class="text-2xl font-bold mb-6 text-gray-800">Pengaturan Website</h2>

    <form action="{{ route('update_webSetting', $webSetting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">

            {{-- Form Landing --}}
            <div class="bg-white border rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Form Landing</h3>

                {{-- Title --}}
                <div class="mb-4">
                    <label for="landing_title" class="block font-medium mb-1">Judul</label>
                    <input type="text" name="landing_title" id="landing_title"
                        value="{{ old('landing_title', $webSetting->landing_title ?? '') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 shadow-sm">
                </div>

                {{-- Description --}}
                <div class="mb-4">
                    <label for="landing_description" class="block font-medium mb-1">Deskripsi</label>
                    <textarea name="landing_description" id="landing_description" rows="4"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 shadow-sm">{{ old('landing_description', $webSetting->landing_description ?? '') }}</textarea>
                </div>

                {{-- Image --}}
                <div class="mb-4">
                    <label for="landing_image" class="block font-medium mb-1">Gambar</label>
                    <input type="file" name="landing_image" id="landing_image"
                        class="w-full border border-gray-300 rounded-md p-2">
                    @if (!empty($webSetting->landing_image))
                    <div class="mt-3 flex justify-center">
                        <div class="w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg overflow-hidden bg-gray-50">
                            <img src="{{ asset('storage/' . $webSetting->landing_image) }}" class="w-full h-full object-cover" alt="Landing Image">
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            {{-- Form About --}}
            <div class="bg-white border rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Form About</h3>

                {{-- Title --}}
                <div class="mb-4">
                    <label for="about_title" class="block font-medium mb-1">Judul</label>
                    <input type="text" name="about_title" id="about_title"
                        value="{{ old('about_title', $webSetting->about_title ?? '') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 shadow-sm">
                </div>

                {{-- Description --}}
                <div class="mb-4">
                    <label for="about_description" class="block font-medium mb-1">Deskripsi</label>
                    <textarea name="about_description" id="about_description" rows="4"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 shadow-sm">{{ old('about_description', $webSetting->about_description ?? '') }}</textarea>
                </div>

                <div class="flex gap-6">
                    {{-- Image --}}
                    <div class="mb-4">
                        <label for="about_image1" class="block font-medium mb-1">Gambar</label>
                        <input type="file" name="about_image1" id="about_image1"
                            class="w-full border border-gray-300 rounded-md p-2">
                        @if (!empty($webSetting->about_image1))
                        <div class="mt-3 flex justify-center">
                            <div class="w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg overflow-hidden bg-gray-50">
                                <img src="{{ asset('storage/' . $webSetting->about_image1) }}" class="w-full h-full object-cover" alt="About Image">
                            </div>
                        </div>
                        @endif
                    </div>

                    {{-- Image 2 --}}
                    <div class="mb-4 w-1/2">
                        <label for="about_image2" class="block font-medium mb-1">Gambar 2</label>
                        <input type="file" name="about_image2" id="about_image2"
                            class="w-full border border-gray-300 rounded-md p-2">
                        @if (!empty($webSetting->about_image2))
                        <div class="mt-3 flex justify-center">
                            <div class="w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg overflow-hidden bg-gray-50">
                                <img src="{{ asset('storage/' . $webSetting->about_image2) }}" class="w-full h-full object-cover" alt="About Image 2">
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        {{-- Submit --}}
        <div class="mt-6 flex justify-center">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">
                Simpan Pengaturan
            </button>
        </div>

    </form>
</div>

@endsection
