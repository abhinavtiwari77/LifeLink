<nav class="bg-white shadow-sm sticky top-0 z-50 glassmorphism">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3 text-red-600">
                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    <span class="font-bold text-2xl tracking-tight">LifeLink</span>
                </a>
            </div>
            
            <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition">Home</a>
                <a href="{{ route('donors.index') }}" class="text-gray-600 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition">Find Donor</a>
                <a href="{{ route('blood_requests.create') }}" class="text-gray-600 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition">Need Blood</a>
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-red-600 font-medium">Admin Dashboard</a>
                    @else
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-red-600 font-medium">Dashboard</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-500 hover:text-red-600 ml-4 font-medium">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-red-600 font-medium">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 bg-red-600 hover:bg-red-700 text-white px-5 py-2.5 rounded-full text-sm font-semibold shadow-md shadow-red-200 transition transform hover:-translate-y-0.5">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
