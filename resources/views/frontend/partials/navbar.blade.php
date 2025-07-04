<!-- resources/views/partials/navbar.blade.php -->


<div class="navbar fixed top-0 z-50 w-full backdrop-blur-lg shadow-md px-4 sm:px-10 lg:px-20">
    <div class="flex-1">
        <img src="assets/image/logo-nav.png" alt="Logo" class="h-5 sm:h-6 object-contain">
    </div>

    <!-- Menu untuk layar besar -->
    <div class="hidden md:flex flex-none">
        <ul class="menu menu-horizontal px-1 text-xs sm:text-sm md:text-base text-white">
            <li class="hover:bg-gray-400/10 hover:text-orange-500 rounded-md transition-colors duration-300">
                <a href="{{ route('home') }}">HOME</a>
            </li>
            <li class="hover:bg-gray-400/10 hover:text-orange-500 rounded-md transition-colors duration-300">
                <a href="{{ route('about-me') }}">ABOUT ME</a>
            </li>
            <li class="hover:bg-gray-400/10 hover:text-orange-500 rounded-md transition-colors duration-300">
                <a href="{{ route('my-works') }}">MY WORKS</a>
            </li>
            <li class="hover:bg-gray-400/10 hover:text-orange-500 rounded-md transition-colors duration-300">
                <a href="{{ route('contact-me') }}">CONTACT ME</a>
            </li>
            
        </ul>
    </div>

    <!-- Burger Menu untuk mobile -->
    <div class="md:hidden flex-none dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-7 sm:w-7" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </label>
        <ul tabindex="0"
            class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-black text-sm">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('about-me') }}">ABOUT ME</a></li>
            <li><a href="{{ route('my-works') }}">MY WORKS</a></li>
            <li>
                <details>
                    <summary>PARENT</summary>
                    <ul class="p-2">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                        <li><a>Link 3</a></li>
                        <li><a>Link 4</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>
