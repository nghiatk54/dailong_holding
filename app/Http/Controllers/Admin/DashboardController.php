<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Method get index page dashboard
    public function index()
    {
        // Get user from auth
        $user = auth()->user();

        return view('admin.dashboard.index', compact('user'));
    }
}