<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">


        @include('backend.partials.navbar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->
            <header class="bg-white shadow p-4 flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Hi, Admin</span>
                    <button class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">Logout</button>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6 overflow-y-auto flex-1">
                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>