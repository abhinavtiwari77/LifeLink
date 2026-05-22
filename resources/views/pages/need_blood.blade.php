@extends('layouts.main')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <div class="bg-red-600 px-6 py-8 text-center">
                <h1 class="text-3xl font-bold text-white mb-2">Emergency Blood Request</h1>
                <p class="text-red-100">Fill out this form carefully. Your request will be immediately visible to all donors.</p>
            </div>
            
            <form action="{{ route('blood_requests.store') }}" method="POST" class="p-8">
                @csrf
                
                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="patient_name" class="block text-sm font-medium text-gray-700 mb-1">Patient Name</label>
                        <input type="text" name="patient_name" id="patient_name" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                    </div>
                    
                    <div>
                        <label for="blood_group" class="block text-sm font-medium text-gray-700 mb-1">Blood Group Needed</label>
                        <select name="blood_group" id="blood_group" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                            <option value="">Select Group</option>
                            <option value="A+">A+</option><option value="A-">A-</option>
                            <option value="B+">B+</option><option value="B-">B-</option>
                            <option value="AB+">AB+</option><option value="AB-">AB-</option>
                            <option value="O+">O+</option><option value="O-">O-</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="units_required" class="block text-sm font-medium text-gray-700 mb-1">Units Required</label>
                        <input type="number" name="units_required" id="units_required" min="1" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                    </div>
                    
                    <div>
                        <label for="emergency_level" class="block text-sm font-medium text-gray-700 mb-1">Emergency Level</label>
                        <select name="emergency_level" id="emergency_level" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                            <option value="Critical">Critical (Within hours)</option>
                            <option value="High">High (Within 24 hours)</option>
                            <option value="Medium">Medium (Within 2-3 days)</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="hospital_name" class="block text-sm font-medium text-gray-700 mb-1">Hospital Name</label>
                        <input type="text" name="hospital_name" id="hospital_name" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                    </div>
                    
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                        <input type="text" name="city" id="city" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                    </div>
                    
                    <div class="md:col-span-2">
                        <label for="contact_number" class="block text-sm font-medium text-gray-700 mb-1">Contact Number</label>
                        <input type="text" name="contact_number" id="contact_number" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" placeholder="Number to contact for donation">
                    </div>
                    
                    <div class="md:col-span-2">
                        <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                        <textarea name="notes" id="notes" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" placeholder="Any specific requirements or instructions..."></textarea>
                    </div>
                </div>
                
                <div class="pt-4 border-t border-gray-200">
                    <button type="submit" class="w-full bg-red-600 text-white font-bold py-3 px-4 rounded-md shadow hover:bg-red-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Submit Emergency Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
