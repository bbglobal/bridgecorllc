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
                    <h1>Jobs Request</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.jobreq') }}" class="btn btn-primary">New Jobs Request</a>
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
                        <div class="card-header"><h2>Job Details</h2></div>

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label"><h3>job Name</h3></label>
                                <p>{{ $jobs->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><h3>Email</h3></label>
                                <p>{{ $jobs->email }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"><h3>Phone</h3></label>
                                <p>{{ $jobs->phone }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label"><h3>Role</h3></label>
                                <p>{{ $jobs->role }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label"><h3>Message</h3></label>
                                <p>{{ $jobs->message }}</p>
                            </div>
                            <!-- Add more fields as needed -->

                           <a href="{{ route('admin.jobs.edit', $jobs->id) }}" class="btn btn-primary">Edit job</a>
                            <a href="{{ route('admin.jobs') }}" class="btn btn-secondary">Back to jobs</a>
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

