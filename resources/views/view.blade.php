@extends('layouts.layout')
@section('content')

    <h1>View Appliers</h1>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job ID</th>
                <th scope="col">CV</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appliers as $applier)
            <tr>
                <th scope="row">{{$applier->id}}</th>
                <td>{{$applier->name}}</td>
                <td>{{$applier->age}}</td>
                <td>{{$applier->job_id}}</td>
                <td>{{$applier->CV}}</td>
                <td>
                    <a href="{{route('getApplierById', ['id'=>$applier->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>
                    <form action="{{route('deleteApplier', ['id'=>$applier->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
