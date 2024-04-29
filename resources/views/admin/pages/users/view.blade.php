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
                    <a href="{{ route('admin.users.user') }}" class="btn btn-primary">New users</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
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

            <br>
            <br>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h2>user Details</h2></div>

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label"><h3>user Name</h3></label>
                                <p>{{ $user->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><h3>Email</h3></label>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"><h3>Password</h3></label>
                                <p>{{ $user->password }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label"><h3>Role</h3></label>
                                <p>{{ $user->role }}</p>
                            </div>
                            <!-- Add more fields as needed -->

                           <a href="{{ route('admin.users.edit',['id' => $user->id]) }}" class="btn btn-primary">Edit user</a>
                            <a href="{{ route('admin.users.user') }}" class="btn btn-secondary">Back to users</a>
                        </div> 
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br> 
        </div>
    </div>
</div>
<!-- /.card -->
@endsection

