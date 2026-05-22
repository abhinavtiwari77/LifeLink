@extends('layouts.main')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 mb-2">Emergency Blood Requests</h1>
                <p class="text-gray-600">Browse current emergencies and find where your blood type is needed.</p>
            </div>
            <a href="{{ route('blood_requests.create') }}" class="hidden md:inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Post Request
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($requests as $req)
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 flex flex-col">
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $req->emergency_level == 'Critical' ? 'bg-red-100 text-red-800' : 'bg-orange-100 text-orange-800' }}">
                            {{ $req->emergency_level }}
                        </span>
                        <span class="text-xs text-gray-500">{{ $req->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 h-12 w-12 rounded-full bg-red-100 flex items-center justify-center">
                            <span class="text-xl font-bold text-red-600">{{ $req->blood_group }}</span>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-bold text-gray-900">{{ $req->patient_name }}</h2>
                            <p class="text-sm text-gray-500">Needs {{ $req->units_required }} units</p>
                        </div>
                    </div>
                    <div class="space-y-2 text-sm text-gray-600 mb-4">
                        <p class="flex items-center"><svg class="h-4 w-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>{{ $req->hospital_name }}</p>
                        <p class="flex items-center"><svg class="h-4 w-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>{{ $req->city }}</p>
                    </div>
                    @if($req->notes)
                        <p class="text-sm text-gray-500 italic bg-gray-50 p-3 rounded border border-gray-100">"{{ $req->notes }}"</p>
                    @endif
                </div>
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    <a href="tel:{{ $req->contact_number }}" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 transition">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Contact & Donate
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 text-center bg-white rounded-xl shadow-sm border border-gray-200">
                <svg class="mx-auto h-12 w-12 text-green-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-medium text-gray-900 mb-1">No Active Requests</h3>
                <p class="text-gray-500">There are no emergency requests at the moment.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-8">
            {{ $requests->links() }}
        </div>
    </div>
</div>
@endsection
