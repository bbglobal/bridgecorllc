@extends('admin.layout.main')

@section('main-section-admin')
    <!-- Content Header (Page header) -->
    <style>
        .form-container {
             width: 100%;
             padding: 20px;
             border: 1px solid #ccc;
             border-radius: 5px;
             background-color: #f9f9f9;
         }
     
         .form-group {
             margin-bottom: 20px;
         }
     
         .form-label {
             font-weight: bold;
         }
     
         .form-input {
             width: 100%;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
             box-sizing: border-box;
         }
     
         .form-textarea {
             width: 100%;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
             box-sizing: border-box;
         }
     
         .form-select {
             width: 100%;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
             box-sizing: border-box;
         }
     
         .form-submit {
             padding: 10px 20px;
             border: none;
             border-radius: 5px;
             background-color: #007bff;
             color: #fff;
             cursor: pointer;
         }
     
         .form-submit:hover {
             background-color: #0056b3;
         }
     </style>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.leads') }}" class="btn btn-primary">New Leads</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="container-fluid">
            <!-- Display existing users in a table -->
            <div class="card">
                <div class="card-header">
                    <!-- Search form -->
                    <div class="card-tools">
                        <div class="input-group input-group" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Form to add a new user -->
            <div class="card mt-4">
                <div class="card-header">
                    Add New User
                </div>
                <div class="card-body">
                    <form id="userForm" method="post" action="{{ route('admin.users.update', ['id' => $user->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" id="password" class="form-control" name="password" value="{{ $user->password }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="role">Role <span class="text-danger">*</span></label>
                            <select id="role" class="form-control" name="role" required>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>        
@endsection
   