@extends('layouts.myapp')

@section('title', 'Data Mahasiswa')

@section('header')
<h1 class="display-4 text-center">Detail Mahasiswa</h1>
@endsection

@section('sidebar')
@parent
@endsection

@section('content')
<div class="card border-0 ml-3 col shadow-lg">
    <div class="card-body" style="font-size: 30px">
        <p class="card-title display-4 text-uppercase"> {{$mahasiswa -> nama}} </p>
        <p class="card-subtitle mb-2 text-muted">{{$mahasiswa -> npm}}</p>
        <p class="card-text">{{$mahasiswa -> jk == "L" ? "Laki laki" : "Perempuan"}}</p>
        <p class="card-text">{{$mahasiswa -> tempat_lahir}}</p>
        <p class="card-text">{{$mahasiswa -> tanggal_lahir}}</p>
        <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-primary">Edit</a>
        <form action="/mahasiswa/{{$mahasiswa->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a class="float-right btn btn-success" href="/mahasiswa">Back</a>
    </div>
</div>
@endsection
