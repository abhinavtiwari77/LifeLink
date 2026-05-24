<nav class="bg-white shadow-sm sticky top-0 z-50 glassmorphism">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-12 xl:px-20">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3.5 hover:opacity-90 transition">
                    <img src="{{ asset('imgs/bloodDropLogo.png') }}?v=3" alt="LifeLink Logo" class="h-9 w-auto drop-shadow-sm">
                    <span class="text-[32px] text-gradient" style="font-family: 'Caveat', cursive; font-weight: 700; line-height: 1; letter-spacing: 0.5px;">LifeLink</span>
                </a>
            </div>
            
            <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-8">
                @auth
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition">Home</a>
                    <a href="{{ route('donors.index') }}" class="text-gray-600 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition">Find Donor</a>
                    <a href="{{ route('blood_requests.index') }}" class="text-gray-600 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition">Blood Requests</a>
                    <a href="{{ route('blood_requests.create') }}" class="text-gray-600 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition">Request Blood</a>
                @endauth
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-500 hover:text-red-600 ml-4 font-medium transition">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-red-600 font-medium transition">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 bg-red-600 hover:bg-red-700 text-white px-5 py-2.5 rounded-full text-sm font-semibold shadow-md shadow-red-200 transition transform hover:-translate-y-0.5">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
