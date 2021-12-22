@extends('layouts.layout')
@section('content')

    <h1>Job Applicant Form</h1>
    <br>

    <form action="{{ route('createApplier') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input your Name">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input name='age' type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input your Age">
        </div>
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="job_id" class="form-label">Job ID</label>
            <input name="job_id" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Job ID">
        </div>
        @error('job_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="CV" class="form-label">CV</label>
            <input name="CV" type="file" class="form-control" id="formFile" placeholder="upload CV">
        </div>
        @error('CV')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
