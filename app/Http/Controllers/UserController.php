<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $requests = $user->bloodRequests()->orderBy('created_at', 'desc')->get();
        return view('pages.dashboards.user', compact('user', 'requests'));
    }
}
