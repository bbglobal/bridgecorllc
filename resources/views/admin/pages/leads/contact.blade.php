@include('admin.layout.header')

@section('content')
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
                        <h1>Leads</h1>
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
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>View</th>
                                <th width="150">Update</th>
                                <th width="100">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="{{ route('admin.lead.view', ['id' => $user->id]) }}">
                                            <i class="fas fa-eye"></i> 
                                        </a>
                                    </td>
                                    <td><a href="{{ route('admin.lead.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-warning">Edit</a></td>
                                    <td>
                                        <form action="/admin/leads/delete/{{ $user->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this lead?')">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <br>
                <div class="form-container">
                    <form id="leadForm" class="wpforms-validate wpforms-form" method="post" action="{{ route('admin.leads') }}">
                        @csrf
                        <noscript class="wpforms-error-noscript">
                            Please enable JavaScript in your browser to complete this form.
                        </noscript>
                        <div class="form-group">
                            <label class="form-label" for="name">Name <span class="wpforms-required-label">*</span></label>
                            <input type="text" id="name" class="form-input" name="name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email <span class="wpforms-required-label">*</span></label>
                            <input type="email" id="email" class="form-input" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="tel" id="phone" class="form-input" name="phone">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="role">Tell Us About Yourself</label>
                            <select id="role" class="form-select" name="role">
                                <option value="Employer">Employer</option>
                                <option value="Candidate">Candidate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="message">Message</label>
                            <textarea id="message" class="form-textarea" name="message"></textarea>
                        </div>
                        <div class="wpforms-recaptcha-container">
                            <div class="g-recaptcha" data-sitekey="6LcKsMsaAAAAAK0vuzqcpC7QJgxUGUoxtICkVxxh"></div>
                            <input type="text" name="g-recaptcha-hidden" class="wpforms-recaptcha-hidden"
                                style="position:absolute!important;clip:rect(0,0,0,0)!important;height:1px!important;width:1px!important;border:0!important;overflow:hidden!important;padding:0!important;margin:0!important;">
                        </div>
                        <div class="form-submit-container">
                            <button type="submit" class="form-submit">Submit</button>
                            <img decoding="async" src="../wp-content/plugins/wpforms/assets/images/submit-spin.svg"
                                class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt="">
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <br> 
            </div>
        </div>
    </div>
    <!-- /.card -->


    @include('admin.layout.footer')
