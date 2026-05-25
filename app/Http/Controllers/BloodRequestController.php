<?php
namespace App\Http\Controllers;
use App\Models\BloodRequest;
use Illuminate\Http\Request;
class BloodRequestController extends Controller
{
    public function index()
    {
        $requests = BloodRequest::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.blood_requests', compact('requests'));
    }

    public function create()
    {
        return view('pages.need_blood');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_name' => 'required|string|max:255',
            'blood_group' => 'required|string',
            'units_required' => 'required|integer|min:1',
            'hospital_name' => 'required|string|max:255',
            'emergency_level' => 'required|string',
            'contact_number' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);
        $validated['user_id'] = auth()->id() ?? 1;
        auth()->user()->bloodRequests()->create($validated);
        return redirect()->route('blood_requests.index')->with('success', 'Blood request submitted successfully!');
    }
}
