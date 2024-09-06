<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Method get login page
    public function login()
    {
        return view('auth.login');
    }

    // Method post login
    public function postLogin(Request $request)
    {
        // Get emailPhoneNumber from request
        $emailPhoneNumber = $request->input('emailPhoneNumber');
        // Get password from request
        $password = $request->input('password');

        // Get user from database by email or phone number
        $user = User::where('email', $emailPhoneNumber)->orWhere('phone', $emailPhoneNumber)->first();
        // Check if user is not exist or password is not correct
        if (!$user || !Hash::check($password, $user->password)) {
            // Return back with error message
            return back()->withErrors(["error" => "Thông tin đăng nhập không hợp lệ. Vui lòng liên hệ đến quản trị hệ thống!"])->withInput();
        }
        // Login user
        Auth::login($user);
        $request->session()->regenerate();
        // Redirect to home page
        return redirect()->route('home');

    }

    // Method logout
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}