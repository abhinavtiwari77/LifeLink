@extends('layouts.main')

@section('content')
<div class="bg-gray-100 py-8 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Admin Dashboard</h1>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                <div class="text-gray-500 text-sm font-medium mb-1">Total Donors</div>
                <div class="text-3xl font-bold text-gray-900">{{ $stats['total_donors'] }}</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-blue-500">
                <div class="text-gray-500 text-sm font-medium mb-1">Total Requests</div>
                <div class="text-3xl font-bold text-gray-900">{{ $stats['total_requests'] }}</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-yellow-500">
                <div class="text-gray-500 text-sm font-medium mb-1">Active Requests</div>
                <div class="text-3xl font-bold text-gray-900">{{ $stats['active_requests'] }}</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 border-l-4 border-l-red-600">
                <div class="text-gray-500 text-sm font-medium mb-1">Emergency Requests</div>
                <div class="text-3xl font-bold text-red-600">{{ $stats['emergency_requests'] }}</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent Donors -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
                    <h2 class="font-bold text-gray-800">Recently Registered Donors</h2>
                    <a href="{{ route('donors.index') }}" class="text-sm text-red-600 hover:underline">View All</a>
                </div>
                <div class="divide-y divide-gray-100">
                    @forelse($recent_donors as $donor)
                        <div class="p-4 flex items-center justify-between hover:bg-gray-50 transition">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold mr-4">
                                    {{ $donor->blood_group }}
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">{{ $donor->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $donor->city }}</div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-400">
                                {{ $donor->created_at->diffForHumans() }}
                            </div>
                        </div>
                    @empty
                        <div class="p-6 text-center text-gray-500">No donors found.</div>
                    @endforelse
                </div>
            </div>

            <!-- Recent Requests -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
                    <h2 class="font-bold text-gray-800">Recent Blood Requests</h2>
                    <a href="{{ route('blood_requests.index') }}" class="text-sm text-red-600 hover:underline">View All</a>
                </div>
                <div class="divide-y divide-gray-100">
                    @forelse($recent_requests as $req)
                        <div class="p-4 flex items-center justify-between hover:bg-gray-50 transition">
                            <div>
                                <div class="font-medium text-gray-900">
                                    <span class="text-red-600 font-bold mr-1">{{ $req->blood_group }}</span>
                                    for {{ $req->patient_name }}
                                </div>
                                <div class="text-sm text-gray-500">{{ $req->hospital_name }} • {{ $req->city }}</div>
                            </div>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $req->emergency_level == 'Critical' ? 'bg-red-100 text-red-800' : 'bg-orange-100 text-orange-800' }}">
                                {{ $req->emergency_level }}
                            </span>
                        </div>
                    @empty
                        <div class="p-6 text-center text-gray-500">No requests found.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
