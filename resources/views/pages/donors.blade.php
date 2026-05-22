@extends('layouts.main')

@section('content')
<div class="bg-red-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Find a Blood Donor</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Search our database of registered blood donors by blood group and city. Contact them directly to request a donation.</p>
        </div>

        <!-- Search Filters -->
        <div class="bg-white rounded-2xl shadow-md p-6 mb-10 border border-gray-100">
            <form action="{{ route('donors.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <label for="blood_group" class="block text-sm font-medium text-gray-700 mb-1">Blood Group</label>
                    <select name="blood_group" id="blood_group" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                        <option value="">All Blood Groups</option>
                        <option value="A+" @if(request('blood_group')=='A+') selected @endif>A+</option>
                        <option value="A-" @if(request('blood_group')=='A-') selected @endif>A-</option>
                        <option value="B+" @if(request('blood_group')=='B+') selected @endif>B+</option>
                        <option value="B-" @if(request('blood_group')=='B-') selected @endif>B-</option>
                        <option value="AB+" @if(request('blood_group')=='AB+') selected @endif>AB+</option>
                        <option value="AB-" @if(request('blood_group')=='AB-') selected @endif>AB-</option>
                        <option value="O+" @if(request('blood_group')=='O+') selected @endif>O+</option>
                        <option value="O-" @if(request('blood_group')=='O-') selected @endif>O-</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                    <input type="text" name="city" id="city" value="{{ request('city') }}" placeholder="e.g. New York" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full md:w-auto px-8 py-2.5 bg-red-600 text-white font-bold rounded-md hover:bg-red-700 transition shadow-sm">
                        Search Donors
                    </button>
                </div>
            </form>
        </div>

        <!-- Donor Results -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($donors as $donor)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-black text-2xl border-2 border-red-200">
                            {{ $donor->blood_group }}
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">{{ $donor->name }}</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Available
                            </span>
                        </div>
                    </div>
                </div>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center text-sm text-gray-600">
                        <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        {{ $donor->city }}
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        {{ ucfirst($donor->gender) }}, {{ $donor->age }} years
                    </div>
                </div>
                <div class="pt-4 border-t border-gray-100">
                    <a href="tel:{{ $donor->phone }}" class="flex items-center justify-center w-full px-4 py-2 bg-gray-50 hover:bg-red-50 text-red-600 font-semibold rounded-lg transition border border-gray-200 hover:border-red-200">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Contact Donor
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 text-center bg-white rounded-2xl shadow-sm border border-gray-100">
                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-medium text-gray-900 mb-1">No donors found</h3>
                <p class="text-gray-500">Try adjusting your search criteria to find matching donors.</p>
            </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $donors->links() }}
        </div>
    </div>
</div>
@endsection
