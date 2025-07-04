<!-- Sidebar -->
<aside class="w-64 bg-white shadow-md hidden md:block">
    <div class="p-6 font-bold text-xl text-blue-600 border-b">MyDashboard</div>

    <nav class="p-4 space-y-2" x-data="{ openWebSetting: {{ request()->routeIs('webSetting', 'create_webSetting') ? 'true' : 'false' }} }">
        <a href="{{ route('dashboard') }}"
            class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100
          {{ request()->routeIs('dashboard') ? 'bg-blue-100 font-semibold' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('project') }}"
            class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100
          {{ request()->routeIs('project') ? 'bg-blue-100 font-semibold' : '' }}">
            Projects
        </a>

        <a href="{{ route('category') }}"
            class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100
          {{ request()->routeIs('category') ? 'bg-blue-100 font-semibold' : '' }}">
            Categories
        </a>
        
        <a href="{{ route('webSetting') }}"
            class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100
          {{ request()->routeIs('webSetting') ? 'bg-blue-100 font-semibold' : '' }}">
            Web Settings
        </a>


    </nav>
</aside>