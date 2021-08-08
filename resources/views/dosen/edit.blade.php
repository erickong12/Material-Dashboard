@extends('layouts.myapp')

@section('title', 'Edit Mahasiswa')

@section('header')
<h1 class="display-4 text-center">Edit Mahasiswa</h1>
@endsection

@section('sidebar')
@parent
@endsection

@section('content')
<div class="col bg-white shadow-lg ml-4 p-5">
    <form method="POST" action="/mahasiswa/{{$mahasiswa->id}}">
        @method('put')
        @csrf
        <div class="form-col">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" type="text" value="{{$mahasiswa->nama}}" name="nama" placeholder="full name">
                @error('nama') <div class="invalid-feedback"> {{$message}}</div> @enderror
            </div>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input class="form-control @error('npm') is-invalid @enderror" type="text" value="{{$mahasiswa->npm}}" name="npm" placeholder="NPM">
                @error('npm') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group">
                <input class="gender mx-2" type="radio" name="jk" value="L" @if($mahasiswa->jk == "L") checked : ""; @endif>Laki-laki
                <input class="gender mx-2" type="radio" name="jk" value="P" @if($mahasiswa->jk == "P") checked : ""; @endif>Perempuan
            </div>
            <div class="form-group">
                <label for="tempat_lahir">tempat lahir</label>
                <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text" value="{{$mahasiswa->tempat_lahir}}" name="tempat_lahir" placeholder="tempat lahir">
                @error('tempat_lahir') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">tanggal lahir</label>
                <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date" value="{{$mahasiswa->tanggal_lahir}}" name="tanggal_lahir">
                @error('tanggal_lahir') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <br>
            <button class="btn btn-success" id="submit" type="submit">Edit</button>
            <a href="/mahasiswa/{{$mahasiswa->id}}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
@endsection
