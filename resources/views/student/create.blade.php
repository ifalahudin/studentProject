@extends('layout.main')

@section('title', 'Add Students')

@section('style')
    <style>
        #batal:hover{
            background-color: #dc3545;
            color: white;
        }
    </style>
@endsection

@section('container')
<div class="container">
    <div class="row ">
        <div class="col mt-3">
            <h1>Add Students</h1>
            <div class="row justify-content-center">
                <div class="col-4">
                    <form class="my-3" method="POST" action="/student">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Name" value="{{old('nama')}}">
                            @error('nama')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="NIM" value="{{old('nim')}}">
                            @error('nim')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                            @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Jurusan" value="{{old('jurusan')}}">
                            @error('jurusan')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a href="/student" id="batal" class="btn btn-outline-secondary btn-rounded">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
