<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method get dashboard page
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}