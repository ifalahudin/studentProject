@extends('layout.main')
@section('title', 'Student List')

@section('activate-student','active')

@section('style')
    <style>
        .list-group-item:hover{
            background-color: #198754;
            color: azure;
        }
    </style>
@endsection

@section('container')
    <div class="container mt-5">
        <div class="row">
            <h1>Welcome,</h1>
        </div>
        <h3 class="card-subtitle text-muted">You're in Student List's page</h3>
        <div class="row mt-2">
            <div class="col-6">
                <div class="list-group mt-5">
                    @foreach ($students as $std)
                    <a href="/student/{{$std -> id}}" id="list" class="list-group-item list-group-item-action" aria-current="true">
                        {{$std->nama}}
                    </a>
                    @endforeach
                </div>
                <div class="d-flex mt-5">
                    <div class="col">
                        <a href="/student/create" class="btn btn-primary">Add Data</a>
                    </div>
                    <div class="col justfy-content-end">
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('status')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection