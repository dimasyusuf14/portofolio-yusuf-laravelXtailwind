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




<div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">CATEGORY</h1>

    

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Form -->
        <form action="{{ route('store_category') }}" class="space-y-4" method="post">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Input New Category Project</label>
                <input type="text" name="name" class=" h-10 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Kirim</button>
        </form>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600 border">No</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600 border">Name</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600 border">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($categories as $category)
                    <tr>
                        <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border">{{ $category->name }}</td>
                        <td class="px-4 py-2 border">
                            <a href="{{route('show_category', $category->id) }}" class="text-blue-600 hover:underline text-sm">Edit</a>
                            <form id=""
                                action="{{ route('destroy_category', $category->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection