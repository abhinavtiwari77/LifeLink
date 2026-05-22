@extends('layouts.main')

@section('content')
<div class="bg-gray-50 py-12 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex justify-between items-end">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">My Dashboard</h1>
                <p class="text-gray-600 mt-1">Welcome back, {{ $user->name }}!</p>
            </div>
            <a href="{{ route('profile.edit') }}" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                Edit Profile
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Profile Info Card -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:col-span-1 h-fit">
                <div class="flex items-center justify-center mb-6">
                    <div class="h-24 w-24 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-black text-3xl border-4 border-white shadow-md">
                        {{ $user->blood_group ?? 'N/A' }}
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="text-sm text-gray-500">Name</div>
                        <div class="font-medium text-gray-900">{{ $user->name }}</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500">Contact Number</div>
                        <div class="font-medium text-gray-900">{{ $user->phone ?? 'Not provided' }}</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500">Location</div>
                        <div class="font-medium text-gray-900">{{ $user->city ?? 'Not provided' }}</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500">Availability</div>
                        <div class="font-medium">
                            @if($user->availability_status == 'available')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Available to Donate</span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Unavailable</span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-center px-4 py-2 border border-red-200 text-red-600 hover:bg-red-50 rounded-md transition font-medium">
                            Sign Out
                        </button>
                    </form>
                </div>
            </div>

            <!-- Activity Area -->
            <div class="md:col-span-2 space-y-8">
                <!-- My Blood Requests -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-900">My Blood Requests</h2>
                        <a href="{{ route('blood_requests.create') }}" class="text-sm font-medium text-red-600 hover:text-red-700">Post New Request &rarr;</a>
                    </div>
                    
                    <div class="space-y-4">
                        @forelse($requests as $req)
                        <div class="p-4 border border-gray-100 rounded-xl bg-gray-50 flex justify-between items-center">
                            <div>
                                <h3 class="font-bold text-gray-900">{{ $req->patient_name }} ({{ $req->blood_group }})</h3>
                                <p class="text-sm text-gray-500">{{ $req->hospital_name }} • {{ $req->created_at->format('M d, Y') }}</p>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $req->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
                                    {{ ucfirst($req->status) }}
                                </span>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-6 text-gray-500">
                            You haven't posted any blood requests yet.
                        </div>
                        @endforelse
                    </div>
                </div>
                
                <!-- Donation History -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Donation History</h2>
                    @if($user->last_donation_date)
                        <div class="flex items-center justify-between p-4 bg-red-50 rounded-xl border border-red-100">
                            <div class="flex items-center">
                                <svg class="h-8 w-8 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <div>
                                    <div class="font-bold text-gray-900">Last Donation</div>
                                    <div class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($user->last_donation_date)->format('F j, Y') }}</div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($user->last_donation_date)->diffForHumans() }}
                            </div>
                        </div>
                    @else
                        <div class="text-center py-6 text-gray-500 bg-gray-50 rounded-xl border border-dashed border-gray-300">
                            No donation history recorded. Update your profile to add your last donation date.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
