@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Insert Mahasiswa')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{route('dosen.index')}}">
                    @csrf
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                            <p class="card-category">{{ __('User information') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('nama') is-invalid @enderror" type="text" value="{{old('nama')}}" name="nama" placeholder="full name" required="true" aria-required="true" />
                                        @error('nama')
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nama') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('nik') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('nik') is-invalid @enderror" type="text" value="{{old('nik')}}" name="nik" placeholder="nik" required="true" aria-required="true" />
                                        @error('nik')
                                        <span id="nik-error" class="error text-danger" for="input-name">{{ $errors->first('nik') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Tanggal Lahir') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date" value="{{old('tanggal_lahir')}}" name="tanggal_lahir" required="true" aria-required="true" />
                                        @error('tanggal_lahir')
                                        <span id="tanggal-lahir-error" class="error text-danger" for="input-name">{{ $errors->first('tanggal_lahir') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('alamat') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('alamat') is-invalid @enderror" type="text" value="{{old('alamat')}}" name="alamat" placeholder="tempat lahir" required="true" aria-required="true" />
                                        @error('alamat')
                                        <span id="tempat-lahir-error" class="error text-danger" for="input-name">{{ $errors->first('alamat') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection