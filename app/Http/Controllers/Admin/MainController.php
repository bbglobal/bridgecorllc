<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Jobsrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function showDashboard()
    {
        $totalContacts = Lead::count();
        $totalJobs = Jobsrequest::count();
        $totalUsers = User::count();

        if (Auth::user()->role == "user") {

            return view('admin.pages.dashboard', compact('totalContacts', 'totalJobs', 'totalUsers'));
        } else {
            return redirect()->back();
        }
    }
    public function showLoginForm()
    {
        return view('admin.pages.login');
    }
    public function logout()
    {
        Auth::logout();
        return view('admin.pages.login');
    }
    // public function login(Request $request)
    // {
    //     // Validate the form data
    //     // $credentials = $request->validate([
    //     //     'email' => 'required|email',
    //     //     'password' => 'required',
    //     // ]);

    //     // Attempt to authenticate the user
    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();

    //         // Redirect based on user role
    //         if ($user->role === 'admin') {
    //             return redirect()->route('admin.dashboard');
    //         } elseif ($user->role === 'user') {
    //             return redirect()->route('frontend.index');
    //         }
    //     }

    //     // Authentication failed, redirect back to login with error message
    //     return redirect()->route('login.form')->with('error', 'Invalid credentials.');

    // }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
