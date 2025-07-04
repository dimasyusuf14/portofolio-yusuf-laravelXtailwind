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

    <form action="{{ route('update_project', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
            {{-- Title --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="title" value="{{ old('title', $project->title) }}"
                    class="h-10 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500" />
            </div>

            {{-- Client --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Client</label>
                <input type="text" name="client" value="{{ old('client', $project->client) }}"
                    class="h-10 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500" />
            </div>

            {{-- Category with Dropdown Checkboxes for Edit/Update --}}
            <div class="relative">
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                <div x-data="{
                    open: false,selectedIds: {{ json_encode($project->categories->pluck('id')->toArray()) }},selectedNames: {{ json_encode($project->categories->pluck('name')->toArray()) }},
                    initSelected() {
                        // Inisialisasi nilai yang sudah dipilih
                        this.selectedIds = {{ json_encode($project->categories->pluck('id')->toArray()) }};
                        this.selectedNames = {{ json_encode($project->categories->pluck('name')->toArray()) }}; }}" class="mt-1 relative" x-init="initSelected()">

                    <!-- Input hidden untuk menyimpan nilai terpilih -->
                    <template x-for="(id, index) in selectedIds" :key="index">
                        <input type="hidden" name="category_ids[]" :value="id">
                    </template>

                    <button
                        @click="open = !open"
                        type="button"
                        class="w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <span x-text="selectedNames.length > 0 ? selectedNames.join(', ') : 'Pilih Kategori'" class="block truncate"></span>
                        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>

                    <div
                        x-show="open"
                        @click.away="open = false"
                        class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                        @foreach($categories as $cat)
                        <div class="flex items-center pl-3 pr-9 py-2 hover:bg-gray-50">
                            <input
                                type="checkbox"
                                id="category_{{ $cat->id }}"
                                :checked="selectedIds.includes({{ $cat->id }})"
                                @change="
                        if (selectedIds.includes({{ $cat->id }})) {
                            selectedIds = selectedIds.filter(id => id !== {{ $cat->id }});
                            selectedNames = selectedNames.filter(name => name !== '{{ $cat->name }}');
                        } else {
                            selectedIds.push({{ $cat->id }});
                            selectedNames.push('{{ $cat->name }}');
                        }
                    "
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="category_{{ $cat->id }}" class="ml-2 block text-sm text-gray-700">
                                {{ $cat->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Description --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" rows="4"
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500">{{ old('description', $project->description) }}</textarea>
            </div>

            {{-- Image --}}
            <div x-data="{ imagePreview: null }" class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Baru (Opsional)</label>

                <div class="flex flex-row gap-6 items-start">
                    {{-- Kotak Upload --}}
                    <div class="flex flex-col items-center">
                        <div
                            class="relative w-48 h-48 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center bg-gray-50 hover:bg-gray-100 cursor-pointer">
                            <input type="file" name="image" accept="image/*"
                                class="absolute inset-0 opacity-0 z-10 cursor-pointer"
                                @change="const file = $event.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = (e) => imagePreview = e.target.result;
                            reader.readAsDataURL(file);
                        }">
                            <span class="text-sm text-gray-500 z-0 text-center px-2" x-show="!imagePreview">Klik untuk upload</span>

                            {{-- Preview --}}
                            <template x-if="imagePreview">
                                <img :src="imagePreview" alt="Preview"
                                    class="absolute inset-0 w-full h-full object-cover rounded-lg z-0">
                            </template>
                        </div>
                        <span class="mt-2 text-xs text-gray-500">Gambar baru</span>
                    </div>

                    {{-- Gambar Saat Ini --}}
                    @if($project->image)
                    <div class="flex flex-col items-center">
                        <div class="w-48 h-48 border border-gray-300 rounded overflow-hidden bg-gray-100">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="Current Image"
                                class="w-full h-full object-cover">
                        </div>
                        <span class="mt-2 text-xs text-gray-500">Gambar saat ini</span>
                    </div>
                    @endif
                </div>
            </div>


        </div>

        <div class="mt-6 flex justify-center">
            <button type="submit"
                class="px-6 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700 transition duration-200">
                Update Project
            </button>
        </div>
    </form>

</div>
@endsection