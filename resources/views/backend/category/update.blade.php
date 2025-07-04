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
    <h1 class="text-2xl font-bold mb-6 text-center">Form & Table Layout</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Form -->
        <form action="{{ route('update_category', $category->id) }}" class="space-y-4" method="post">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Kirim</button>
        </form>
    </div>
</div>  



@endsection