<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $requests = $user->bloodRequests()->orderBy('created_at', 'desc')->get();
        
        $stats = [
            'total_donors' => \App\Models\User::where('role', 'user')->where('is_donor', true)->count(),
            'active_requests' => \App\Models\BloodRequest::where('status', 'pending')->count(),
            'my_requests' => $requests->count(),
        ];
        
        return view('pages.dashboards.user', compact('user', 'requests', 'stats'));
    }
}
