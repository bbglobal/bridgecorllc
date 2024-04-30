<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Jobsrequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class MainController extends Controller
{
public function Dashboard()
{
    $totalContacts = Lead::count();
    $totalJobs = Jobsrequest::count();
    $totalUsers = User::count();
    
    return view('admin.pages.dashboard', compact('totalContacts', 'totalJobs', 'totalUsers'));
}


    
    public function showLoginForm()
    {
        return view('admin.pages.login');
    }
    public function logout()
    {
        return view('admin.pages.logout');
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
// public function login(Request $request)
//     {
//         $user = User::where('email', $request->email)
//                     ->where('password', $request->password)
//                     ->first(); // Retrieve the first user matching the query
    
//         if ($user) {
//             session()->put('id', $user->id); // Store user ID in session
//             session()->put('role', $user->role); // Store user role in session
    
//             if ($user->role == 'user') {
//                 return redirect()->route('home'); // Redirect to user dashboard
//             } elseif ($user->role == 'admin') {
//                 return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
//             } else {
//                 return redirect()->route('login')->with('error', 'Invalid role detected.');
//             }
//         } else {
//             return redirect()->route('login')->with('error', 'Invalid email or password.');
//         }
//     }


public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    $remember = $request->filled('remember'); // Check if 'remember' checkbox is checked

    // Attempt authentication
    if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']], $remember)) {
        // Authentication successful, redirect based on user role
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            // Handle other roles or default redirect
            return redirect()->route('frontend.index');
        }
    }

    // Authentication failed, redirect back to login form with error message
    return redirect()->route('login')->with('error', 'Invalid credentials.');
}




}
