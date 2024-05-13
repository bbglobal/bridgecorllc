<?php

namespace App\Http\Controllers\Admin;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5219786e16850104b177abc92ec54797166206a2
=======

>>>>>>> 0707951ee2a8b23f3de87ea2d655f6a0cf147e05
use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Jobsrequest;
use App\Models\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

=======
>>>>>>> 5219786e16850104b177abc92ec54797166206a2
=======
use Illuminate\Support\Facades\Auth;

>>>>>>> 0707951ee2a8b23f3de87ea2d655f6a0cf147e05
class MainController extends Controller
{
    public function showDashboard()
    {
        $totalContacts = Lead::count();
        $totalJobs = Jobsrequest::count();
        $totalUsers = User::count();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0707951ee2a8b23f3de87ea2d655f6a0cf147e05

        if (Auth::user()->role == "user") {

            return view('admin.pages.dashboard', compact('totalContacts', 'totalJobs', 'totalUsers'));
        } else {
            return redirect()->back();
        }
<<<<<<< HEAD
=======
    
    
        if(session()->get('role')=='admin'){
            return view('admin.pages.dashboard', compact('totalContacts', 'totalJobs', 'totalUsers'));    }

>>>>>>> 5219786e16850104b177abc92ec54797166206a2
=======
>>>>>>> 0707951ee2a8b23f3de87ea2d655f6a0cf147e05
    }
    public function showLoginForm()
    {
        return view('admin.pages.login');
    }
    public function logout()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Auth::logout();
        return view('admin.pages.login');
=======
        return view('admin.pages.logout');
>>>>>>> 5219786e16850104b177abc92ec54797166206a2
=======
        Auth::logout();
        return view('admin.pages.login');
>>>>>>> 0707951ee2a8b23f3de87ea2d655f6a0cf147e05
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0707951ee2a8b23f3de87ea2d655f6a0cf147e05
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
<<<<<<< HEAD
=======
public function login(Request $request)
    {
        $user = User::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first(); // Retrieve the first user matching the query
    
        if ($user) {
            session()->put('id',$user->id); // Store user ID in session
            session()->put('role', $user->role); // Store user role in session
    
            if ($user->role == 'user') {
                return redirect()->route('home'); // Redirect to user dashboard
            } elseif ($user->role == 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
            } else {
                return redirect()->route('login')->with('error', 'Invalid role detected.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password.');
        }
    }
}   
>>>>>>> 5219786e16850104b177abc92ec54797166206a2
=======
>>>>>>> 0707951ee2a8b23f3de87ea2d655f6a0cf147e05
