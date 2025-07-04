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

    <form action="{{ route('store_webSetting')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mt-6 flex justify-end">
            <a href="{{ route('create_webSetting') }}"
                class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">
                Create Data
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">

            {{-- Data Landing --}}
            <div class="bg-white border rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Data Landing</h3>

                {{-- Tabel Data --}}
                <table class="w-full text-sm text-left text-gray-700 border mb-4">
                    <thead class="bg-gray-100 text-gray-600 uppercase">
                        <tr>
                            <th class="px-4 py-2 border">Field</th>
                            <th class="px-4 py-2 border">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border">Judul</td>
                            <td class="px-4 py-2 border">{{ $websetting->landing_title ?? "-" }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border">Deskripsi</td>
                            <td class="px-4 py-2 border">{{ $websetting->landing_description ?? "-" }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border">Gambar</td>
                            <td class="px-4 py-2 border">
                                {{-- Gambar --}}
                                @if($websetting?->landing_image)
                                <div class="flex justify-center">
                                    <div class="w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center overflow-hidden bg-gray-50">
                                        <img src="{{ asset('storage/' . $websetting->landing_image) }}" alt="">
                                    </div>
                                </div>
                                @endif


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Data About --}}
            <div class="bg-white border rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Data About</h3>

                {{-- Tabel Data --}}
                <table class="w-full text-sm text-left text-gray-700 border mb-4">
                    <thead class="bg-gray-100 text-gray-600 uppercase">
                        <tr>
                            <th class="px-4 py-2 border">Field</th>
                            <th class="px-4 py-2 border">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border">Judul</td>
                            <td class="px-4 py-2 border">{{ $websetting->about_title ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border">Deskripsi</td>
                            <td class="px-4 py-2 border">{{ $websetting->about_description ?? '-' }}</td>
                        </tr>

                    </tbody>
                </table>

                {{-- Tabel gambar --}}
                <table class="w-full text-sm text-left text-gray-700 border mb-4">
                    <thead class="bg-gray-100 text-gray-600 uppercase">
                        <tr>
                            <th class="px-4 py-2 border text-center">Image 1</th>
                            <th class="px-4 py-2 border text-center">Image 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border text-center">
                                @if($websetting?->about_image1)
                                <div class="w-48 h-48 mx-auto border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center overflow-hidden bg-gray-50">
                                    <img src="{{ asset('storage/' . $websetting->about_image1) }}" alt="" class="object-cover h-full w-full">
                                </div>
                                @else
                                <p class="text-gray-400 italic">Tidak ada gambar</p>
                                @endif
                            </td>
                            <td class="px-4 py-2 border text-center">
                                @if($websetting?->about_image2)
                                <div class="w-48 h-48 mx-auto border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center overflow-hidden bg-gray-50">
                                    <img src="{{ asset('storage/' . $websetting->about_image2) }}" alt="" class="object-cover h-full w-full">
                                </div>
                                @else
                                <p class="text-gray-400 italic">Tidak ada gambar</p>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>


        @if($websetting?->id)
        <div class="mt-6 flex justify-center">
            <a href="{{ route('show_webSetting', $websetting->id) }}"
                class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">
                Edit
            </a>
        </div>
        @endif


</div>
@endsection
