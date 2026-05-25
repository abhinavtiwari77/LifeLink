<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\BloodRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized access.');
        }

        $stats = [
            'total_donors' => User::where('role', 'user')->count(),
            'active_requests' => BloodRequest::where('status', 'pending')->count(),
            'total_requests' => BloodRequest::count(),
            'emergency_requests' => BloodRequest::where('emergency_level', 'High')->count(),
        ];

        $recent_donors = User::where('role', 'user')->latest()->take(5)->get();
        $recent_requests = BloodRequest::with('user')->latest()->take(5)->get();

        return view('pages.dashboards.admin', compact('stats', 'recent_donors', 'recent_requests'));
    }
}
