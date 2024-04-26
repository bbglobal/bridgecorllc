@extends('admin.layout.main')

@section('main-section-admin')
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

    .form-input,
    .form-textarea,
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
                    <h1>Edit Job</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.jobs') }}" class="btn btn-secondary">Back to Jobs</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="form-container">
                    <form action="{{ route('admin.jobs.update', $jobs->id) }}" method="POST">
                        @csrf
                        @method('post') 
                        <div class="form-group">
                            <label class="form-label" for="name">Name <span class="required-label">*</span></label>
                            <input type="text" id="name" class="form-input" name="name" value="{{ $jobs->name }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email <span class="required-label">*</span></label>
                            <input type="email" id="email" class="form-input" name="email" value="{{ $jobs->email }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="tel" id="phone" class="form-input" name="phone" value="{{ $jobs->phone }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="role">Role</label>
                            <label>Select Your Preferred Field</label>
                            <span class="wpcf7-form-control-wrap" data-name="include_blank">
                                <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" id="select-field"
                                        aria-required="true" aria-invalid="false" name="role">
                                    <option value="Data science" {{ $jobs->role === 'Data science' ? 'selected' : '' }}>Data science</option>
                                    <option value="Computer network" {{ $jobs->role === 'Computer network' ? 'selected' : '' }}>Computer network</option>
                                    <option value="Software Engineer" {{ $jobs->role === 'Software Engineer' ? 'selected' : '' }}>Software Engineer</option>
                                    <option value="Computer security" {{ $jobs->role === 'Computer security' ? 'selected' : '' }}>Computer security</option>
                                    <option value="Software" {{ $jobs->role === 'Software' ? 'selected' : '' }}>Software</option>
                                    <option value="Network administrator" {{ $jobs->role === 'Network administrator' ? 'selected' : '' }}>Network administrator</option>
                                    <option value="Web Developer" {{ $jobs->role === 'Web Developer' ? 'selected' : '' }}>Web Developer</option>
                                    <option value="Computer Systems Analyst" {{ $jobs->role === 'Computer Systems Analyst' ? 'selected' : '' }}>Computer Systems Analyst</option>
                                    <option value="Network Engineer" {{ $jobs->role === 'Network Engineer' ? 'selected' : '' }}>Network Engineer</option>
                                    <option value="Database Administrator" {{ $jobs->role === 'Database Administrator' ? 'selected' : '' }}>Database Administrator</option>
                                    <option value="Systems analyst" {{ $jobs->role === 'Systems analyst' ? 'selected' : '' }}>Systems analyst</option>
                                    <option value="Technical Support" {{ $jobs->role === 'Technical Support' ? 'selected' : '' }}>Technical Support</option>
                                    <option value="Information technology consulting" {{ $jobs->role === 'Information technology consulting' ? 'selected' : '' }}>Information technology consulting</option>
                                    <option value="Data analysis" {{ $jobs->role === 'Data analysis' ? 'selected' : '' }}>Data analysis</option>
                                    <option value="Computer Engineering" {{ $jobs->role === 'Computer Engineering' ? 'selected' : '' }}>Computer Engineering</option>
                                    <option value="Information Security Analysts" {{ $jobs->role === 'Information Security Analysts' ? 'selected' : '' }}>Information Security Analysts</option>
                                    <option value="Information security" {{ $jobs->role === 'Information security' ? 'selected' : '' }}>Information security</option>
                                    <option value="Analyst" {{ $jobs->role === 'Analyst' ? 'selected' : '' }}>Analyst</option>
                                    <option value="Business" {{ $jobs->role === 'Business' ? 'selected' : '' }}>Business</option>
                                    <option value="IT Technician" {{ $jobs->role === 'IT Technician' ? 'selected' : '' }}>IT Technician</option>
                                    <option value="Computer Network Architects" {{ $jobs->role === 'Computer Network Architects' ? 'selected' : '' }}>Computer Network Architects</option>
                                    <option value="Computer scientist" {{ $jobs->role === 'Computer scientist' ? 'selected' : '' }}>Computer scientist</option>
                                    <option value="Computer Support Specialists" {{ $jobs->role === 'Computer Support Specialists' ? 'selected' : '' }}>Computer Support Specialists</option>
                                    <option value="Architect" {{ $jobs->role === 'Architect' ? 'selected' : '' }}>Architect</option>
                                </select>
                            </span>
                            
                            
                            
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="message">Message</label>
                            <textarea id="message" class="form-textarea" name="message" id="" cols="30" rows="10">{{ $jobs->message }}</textarea>
                        </div>
                        <div class="form-submit-container">
                            <button type="submit" class="form-submit">Update Job</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
