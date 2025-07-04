@extends('backend.main')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-4 rounded-xl shadow text-center">
        <h2 class="text-lg font-semibold text-gray-700">Total Projects</h2>
        <p class="text-3xl mt-2 text-blue-600 font-bold">12</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow text-center">
        <h2 class="text-lg font-semibold text-gray-700">Images</h2>
        <p class="text-3xl mt-2 text-blue-600 font-bold">34</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow text-center">
        <h2 class="text-lg font-semibold text-gray-700">Users</h2>
        <p class="text-3xl mt-2 text-blue-600 font-bold">5</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow text-center">
        <h2 class="text-lg font-semibold text-gray-700">Categories</h2>
        <p class="text-3xl mt-2 text-blue-600 font-bold">5</p>
    </div>
</div>

<div class="mt-8">
    <h3 class="text-xl font-semibold text-gray-700 mb-4">Recent Projects</h3>
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 text-left text-sm uppercase text-gray-600">
                <tr>
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Created</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                <tr class="border-b">
                    <td class="px-4 py-3">Website Redesign</td>
                    <td class="px-4 py-3">ABC Corp</td>
                    <td class="px-4 py-3">2025-06-01</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-3">Logo Project</td>
                    <td class="px-4 py-3">XYZ Studio</td>
                    <td class="px-4 py-3">2025-05-22</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endSection