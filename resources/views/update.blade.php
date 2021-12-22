<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>Update Applicant Data</h1>
    <br>

    <form action="{{ route('updateApplier', ['id'=> $applier->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="{{$applier->name}}" placeholder="Input your Name">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input name='age' type="numeric" class="form-control" id="formGroupExampleInput" value="{{$applier->age}}" placeholder="Input your Age">
        </div>
        <div class="mb-3">
            <label for="job_id" class="form-label">Job CID</label>
            <input name="job_id" type="text" class="form-control" id="formGroupExampleInput" value="{{$applier->job_id}}" placeholder="Input a Job ID">
        </div>
        <div class="mb-3">
            <label for="CV" class="form-label">CV</label>
            <input name="CV" type="file" class="form-control" id="formFile" value="{{$applier->CV}}" placeholder="upload CV">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
