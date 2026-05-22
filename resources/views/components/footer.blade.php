<footer class="bg-gray-900 text-white pt-16 pb-8 border-t-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-2">
                <a href="{{ route('home') }}" class="flex items-center gap-3 text-red-500 mb-4">
                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    <span class="font-bold text-2xl tracking-tight text-white">LifeLink</span>
                </a>
                <p class="text-gray-400 max-w-sm leading-relaxed mb-6">
                    A professional platform bridging the gap between blood donors and patients in emergency situations. Your single donation can save up to three lives.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition bg-gray-800 p-2 rounded-full hover:bg-red-600">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition bg-gray-800 p-2 rounded-full hover:bg-red-600">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-sm font-semibold tracking-wider uppercase text-gray-300 mb-4">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-red-500 transition">Home</a></li>
                    <li><a href="{{ route('donors.index') }}" class="text-gray-400 hover:text-red-500 transition">Find a Donor</a></li>
                    <li><a href="{{ route('blood_requests.create') }}" class="text-gray-400 hover:text-red-500 transition">Request Blood</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-400 hover:text-red-500 transition">Register</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold tracking-wider uppercase text-gray-300 mb-4">Contact</h3>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        123 Health Avenue, Medical District
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        +1 (555) 123-4567
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        support@lifelink.com
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} LifeLink Platform. All rights reserved.</p>
            <p class="text-sm text-gray-500 mt-4 md:mt-0">Designed for saving lives.</p>
        </div>
    </div>
</footer>
