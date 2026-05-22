@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="relative pt-20 pb-32 overflow-hidden bg-gradient-to-br from-red-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-red-100 text-red-600 font-semibold text-sm mb-6 shadow-sm border border-red-200">
                <span class="flex h-2 w-2 rounded-full bg-red-500 mr-2 animate-pulse"></span>
                Every drop counts
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-8 leading-tight">
                Your blood donation could <br/>
                <span class="text-gradient">save someone's life</span>
            </h1>
            <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto leading-relaxed">
                Join our community of heroes. A single donation can save up to three lives. Whether you're here to give or receive, LifeLink connects you instantly.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('blood_requests.create') }}" class="px-8 py-4 rounded-full bg-red-600 text-white font-bold text-lg shadow-lg shadow-red-300 hover:bg-red-700 hover:shadow-xl hover:-translate-y-1 transition transform duration-200">
                    Need Blood
                </a>
                <a href="{{ route('register') }}" class="px-8 py-4 rounded-full bg-white text-gray-800 font-bold text-lg shadow-md border border-gray-100 hover:bg-gray-50 hover:shadow-lg hover:-translate-y-1 transition transform duration-200">
                    Register as Donor
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white relative z-10 border-t border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-6 rounded-2xl bg-gray-50">
                <div class="text-4xl font-black text-red-600 mb-2">1,240+</div>
                <div class="text-gray-600 font-medium">Registered Donors</div>
            </div>
            <div class="p-6 rounded-2xl bg-gray-50">
                <div class="text-4xl font-black text-red-600 mb-2">3,450</div>
                <div class="text-gray-600 font-medium">Lives Saved</div>
            </div>
            <div class="p-6 rounded-2xl bg-gray-50">
                <div class="text-4xl font-black text-red-600 mb-2">15</div>
                <div class="text-gray-600 font-medium">Cities Covered</div>
            </div>
            <div class="p-6 rounded-2xl bg-gray-50">
                <div class="text-4xl font-black text-red-600 mb-2">24/7</div>
                <div class="text-gray-600 font-medium">Emergency Support</div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Blood Requests -->
<section class="py-24 bg-red-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Emergency Blood Requests</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">These patients are in urgent need of blood. If you have a matching blood group, please consider donating today.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Sample Request Card 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-red-100 hover:shadow-xl transition relative overflow-hidden group">
                <div class="absolute top-0 right-0 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-bl-lg z-10">URGENT</div>
                <div class="flex items-center justify-between mb-4">
                    <div class="h-14 w-14 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-black text-xl">
                        O+
                    </div>
                    <div class="text-right">
                        <div class="text-sm text-gray-500">Units Needed</div>
                        <div class="font-bold text-lg text-gray-900">3 Units</div>
                    </div>
                </div>
                <h3 class="font-bold text-xl text-gray-900 mb-1">Ahmed Doe</h3>
                <p class="text-gray-500 text-sm mb-4 flex items-center">
                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    City Hospital, New York
                </p>
                <a href="#" class="block w-full py-3 bg-gray-50 text-red-600 text-center font-bold rounded-xl group-hover:bg-red-600 group-hover:text-white transition">Contact Now</a>
            </div>
            
            <!-- Sample Request Card 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 hover:shadow-xl transition relative overflow-hidden group">
                <div class="flex items-center justify-between mb-4">
                    <div class="h-14 w-14 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-black text-xl">
                        A-
                    </div>
                    <div class="text-right">
                        <div class="text-sm text-gray-500">Units Needed</div>
                        <div class="font-bold text-lg text-gray-900">1 Unit</div>
                    </div>
                </div>
                <h3 class="font-bold text-xl text-gray-900 mb-1">Sarah Smith</h3>
                <p class="text-gray-500 text-sm mb-4 flex items-center">
                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    General Clinic, Chicago
                </p>
                <a href="#" class="block w-full py-3 bg-gray-50 text-red-600 text-center font-bold rounded-xl group-hover:bg-red-600 group-hover:text-white transition">Contact Now</a>
            </div>
            
            <div class="bg-gradient-to-br from-red-600 to-red-800 rounded-2xl p-6 shadow-lg text-white flex flex-col justify-center items-center text-center">
                <svg class="h-12 w-12 mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <h3 class="font-bold text-2xl mb-2">View All Requests</h3>
                <p class="text-red-100 mb-6 text-sm">Browse all current emergencies and find where your blood type is needed most.</p>
                <a href="{{ route('blood_requests.index') }}" class="px-6 py-2 bg-white text-red-600 font-bold rounded-full hover:bg-gray-100 transition shadow">Browse Requests</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 relative z-10 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-900 rounded-3xl p-10 md:p-16 text-center relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 -mt-10 -mr-10 h-40 w-40 rounded-full bg-red-600 opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 h-40 w-40 rounded-full bg-red-600 opacity-20 blur-3xl"></div>
            
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 relative z-10">Ready to save lives?</h2>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto relative z-10">Registration takes less than two minutes. Once registered, you will appear in our search database and can be contacted during emergencies.</p>
            
            <a href="{{ route('register') }}" class="inline-block px-10 py-4 bg-red-600 text-white font-bold text-lg rounded-full hover:bg-red-500 transition shadow-[0_0_20px_rgba(220,38,38,0.4)] relative z-10">Become a Donor Today</a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/tsPracticlesEngine.js') }}"></script>
<script src="{{ asset('js/tsPracticles.js') }}"></script>
<script>
    // Assuming tsPracticles is initialized here like in the original code
    document.addEventListener("DOMContentLoaded", function () {
        if(typeof tsParticles !== 'undefined') {
            tsParticles.loadJSON("tsparticles", "{{ asset('json/particles.json') }}")
                .then(function() {
                    console.log('Particles loaded');
                })
                .catch(function(error) {
                    console.error('Error loading particles', error);
                });
        }
    });
</script>
@endsection
