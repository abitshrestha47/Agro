@extends('layout.header')

@section('homeContents')

    <div class="container w-75 border rounded p-3 mt-5 mb-5">
        <form action="{{ route('submit_job_application') }}" method="post">
            @csrf
            <h2>Job Details</h2>
            <div class="mb-3">
                <label for="job_title" class="form-label">Job Title:</label>
                <input type="text" id="job_title" name="job_title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="job_description" class="form-label">Job Description:</label>
                <textarea id="job_description" name="job_description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="num_workers" class="form-label">Number of Workers Needed:</label>
                <input type="number" id="num_workers" name="num_workers" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Salary (RS):</label>
                <input type="number" id="salary" name="salary" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="job_location" class="form-label">Job Location:</label>
                <input type="text" id="job_location" name="job_location" class="form-control" required>
            </div>
            <h2>Contact Information</h2>
            <div class="mb-3">
                <label for="contact_name" class="form-label">Contact Name:</label>
                <input type="text" id="contact_name" name="contact_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="contact_email" class="form-label">Contact Email:</label>
                <input type="email" id="contact_email" name="contact_email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="contact_phone" class="form-label">Contact Phone Number:</label>
                <input type="tel" id="contact_phone" name="contact_phone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Submit Application</button>
        </form>
    </div>
@endsection
