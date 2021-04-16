@extends('layout.main')

@section('title', 'Detail Students')

@section('container')
<div class="container ">
    <div class="row">
    <div class="col-8 mt-3">
        <h1>Detail Students</h1>
        <div class="row">
            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mt-2">{{$student-> nama}}</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle text-muted">{{$student -> nim}}</h6>
                        <p class="card-text"> {{$student -> email}} </p>
                        <p class="card-text"> {{$student -> jurusan}} </p>

                        <div class="row d-flex">
                            <div class="col-8">
                                <a href="/student/{{$student->id}}/edit" type="submit" class="btn btn-success">Edit</a>
                                <form action="{{$student->id}}" method="POST" class="d-inline">
                                    @method('delete') {{--New Method to override post methode--}}
                                    @csrf {{--Give hiden token--}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <a href="/student" class="btn btn-primary btn-rounded">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
