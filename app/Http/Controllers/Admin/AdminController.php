<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Jobsrequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function indexuser()
    {
        $users = User::all();
        return view('admin.pages.users.user', compact('users'));
    }

    public function storeuser(Request $request)
    {
        // Validate form data
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8',
        //     'role' => 'required',
        //     // Add more validation rules as needed
        // ]);

        // Create a new user instance
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        // Set other user properties here

        // Save the user record
        $user->save();

        // Redirect or return response
        return redirect()->back()->with('success', 'User Successfully Created!');
    }

    public function edituser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.users.edit-user', compact('user'));
    }

    public function updateuser(Request $request, $id)
    {
        // Validate the request data
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users,email,' . $id,
    //         'password' => 'required' . $id,
    //         'role' => 'required' . $id,

            
    //     //     // Add more validation rules as needed
    //    ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user details
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        // Update other user properties here

        // Save the user
        $user->update();

        // Redirect back or to any other route as needed
        return redirect()->route('admin.users.user')->with('success', 'User updated successfully!');
    }

    public function destroyuser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User Successfully Deleted!');
    }
    public function viewuser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.users.view', compact("user"));
    }
   
    
    
      // JOBS
      
    public function jobs()
    {
        $jobs = Jobsrequest::all();
        return view('admin.pages.jobs.job', compact('jobs'));
    }

    public function jobreq(Request $request)
{
    // Validate form data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'role' => 'required',
        'message' => 'required',
    ]);

    // Create a new job instance
    $job = new Jobsrequest();
    $job->name = $request->input('name');
    $job->email = $request->input('email');
    $job->phone = $request->input('phone');
    $job->role = $request->input('role');
    $job->message = $request->input('message');

    // Save the job record
    $job->save();

    // Redirect or return response
    return redirect()->back()->with('success', 'Lead Successfully Deleted!');
}

      
    public function destroyj($id)
    {
        $jobs = Jobsrequest::findOrFail($id);
        $jobs->delete();
        return redirect()->back()->with('success', 'Lead Successfully Deleted!');
    }
    public function editj($id)
    {
        $jobs = Jobsrequest::findOrFail($id);
        return view('admin.pages.jobs.edit-job', compact('jobs'));
    }

    public function updatej(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'role' => 'required|string',
        'message' => 'nullable|string',
    ]);

    // Find the job by ID
    $job = Jobsrequest::findOrFail($id);

    // Update job details
    $job->name = $request->input('name');
    $job->email = $request->input('email');
    $job->phone = $request->input('phone');
    $job->role = $request->input('role');
    $job->message = $request->input('message');

    // Save the job
    $job->save();

    // Redirect back or to any other route as needed
    return redirect()->route('admin.jobs
.view', $job->id)->with('success', 'Job Updated Successfully!');
}

    public function viewleadj($id)
    {
        $jobs = Jobsrequest::findOrFail($id);
        // dd($leads->all());
        return view('admin.pages.jobs.view', compact("jobs"));
    }

          // LEADS 
          public function contact()
          {
              // Logic to fetch and display contacts
              $leads = Lead::all();
              return view('admin.pages.leads.contact', compact('leads'));
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
    public function destroy($id)
    {
        $leads = Lead::findOrFail($id);
        $leads->delete();
        return redirect()->back()->with('success', 'Lead Successfully Deleted!');
    }
    public function edit($id)
    {
        $leads = Lead::findOrFail($id);
        return view('admin.pages.leads.edit-contact', compact('leads'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'role' => 'required|string|in:Employer,Candidate',
            'message' => 'nullable|string',
        ]);
    
        // Find the lead by ID
        $leads = Lead::findOrFail($id);
        // Update lead details
        $leads->name = $request->name;
        $leads->email = $request->email;
        $leads->phone = $request->phone;
        $leads->role = $request->role;
        $leads->message = $request->message;
    
        // Save the lead
        $leads->update();
    
        // Redirect back or to any other route as needed
        return redirect()->route('admin.pages.leads.edit',['id' => $leads->id])->with('success', 'Lead Updated Successfully!');
    }

    public function viewlead($id)
    {
        $leads = Lead::findOrFail($id);
        // dd($leads->all());
        return view('admin.pages.leads.view', compact("leads"));
    }
         // LEADS 
}
