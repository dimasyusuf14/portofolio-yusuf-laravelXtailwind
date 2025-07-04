<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login to Your Account</h2>

        <form action="{{ route('do-login')  }}" method="POST" class="space-y-5">
            @csrf
            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Enter your username"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="••••••••"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required />
            </div>

            <!-- Submit Button -->
            <div>
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Login
                </button>
            </div>

            <!-- Additional Links -->
            <div class="text-center text-sm text-gray-500 mt-4">
                Don't have an account?
                <a href="#" class="text-blue-600 hover:underline">Register</a>
            </div>
        </form>
    </div>

</body>

</html>