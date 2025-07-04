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

    <div class="mt-6 flex justify-end">
        <a href="{{ route('create_project') }}"
            class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">
            Create Data
        </a>
    </div>


    <div class="bg-white border rounded-lg shadow p-6 mt-10">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Data Project</h3>

        <table class="w-full text-sm text-gray-700 border mb-4 text-center">
            <thead class="bg-gray-100 text-gray-600 uppercase">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Title</th>
                    <th class="px-4 py-2 border">Description</th>
                    <th class="px-4 py-2 border">Client</th>
                    <th class="px-4 py-2 border">Category</th>
                    <th class="px-4 py-2 border">Image</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($project as $item)
                <tr>
                    <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 border">{{ $item->title }}</td>
                    <td class="px-4 py-2 border text-start">{{ \Illuminate\Support\Str::limit($item->description, 100, '...') }}</td>
                    <td class="px-4 py-2 border">{{ $item->client }}</td>
                    <td class="px-4 py-2 border">
                        @foreach($item->categories as $category)
                        <span class="inline-block bg-blue-100 text-blue-800 px-2 py-1 rounded-sm text-xs">
                            {{ $category->name }}
                        </span>
                        @endforeach
                    </td>

                    <td class="px-4 py-2 border">
                        @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-20 h-20 object-cover mx-auto rounded" />
                        @else
                        <span class="text-gray-400 italic">No Image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 border">
                        <a href="{{ route('destroy_project', $item->id) }}" class="text-blue-600 hover:underline text-sm">Edit</a>
                        <form action="{{ route('destroy_project', $item->id) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline text-sm"
                                onclick="return confirm('Yakin ingin menghapus project ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@endsection
