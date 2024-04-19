<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Leads;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function users()
    {
        // Logic to fetch and display users
        return view('admin.pages.users');
    }

    public function create()
    {
        return view('admin.pages.create-user');
    }

    public function store(Request $request)
    {
        // Logic to store new user
        // Example: $user = User::create($request->all());
        return redirect()->route('admin.pages.users')->with('success', 'User created successfully');
    }

    public function jobs()
    {
        // Logic to fetch and display jobs
        return view('admin.pages.jobs');
    }

    public function showLoginForm()
    {
        return view('admin.pages.login');
    }

    public function login(Request $request)
    {
        // Logic to handle login attempt
        // Example: Implement authentication logic
    }

    public function logout(Request $request)
    {
        // Logic to handle logout
        // Example: Implement logout logic
        return view('admin.pages.logout');

    }

    public function contact()
    {
        // Logic to fetch and display contacts
        $leads = Lead::all();
        return view('admin.pages.contact', compact('leads'));
    }

    public function leads(Request $request)
    {
        // dd($request->all());
        $leads = new Lead;
        $leads->name = $request->input('name');
        $leads->email = $request->input('email');
        $leads->phone = $request->input('phone');
        $leads->role = $request->input('role');
        $leads->message = $request->input('message');
        $leads->save();

        return redirect()->back()->with('success', 'Your request submitted');
    }
}
