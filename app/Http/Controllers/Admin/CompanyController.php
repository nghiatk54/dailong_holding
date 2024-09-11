<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Method get index page
    public function index()
    {
        // Get user form auth
        $user = auth()->user();
        // Get company pagination from modal Company
        $companies = Company::paginate(10);

        // Return view index
        return view('admin.company.index', compact('user', 'companies'));
    }
}