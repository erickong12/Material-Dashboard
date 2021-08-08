@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Edit Mahasiswa')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{route('mahasiswa.update',$mahasiswa->id)}}">
                    @method('put')
                    @csrf
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                            <p class="card-category">{{ __('Mahasiswa information') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('nama') is-invalid @enderror" type="text" value="{{$mahasiswa->nama}}" name="nama" placeholder="full name" required="true" aria-required="true" />
                                        @error('nama')
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nama') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('NPM') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('npm') is-invalid @enderror" type="text" value="{{$mahasiswa->npm}}" name="npm" placeholder="NPM" required="true" aria-required="true" />
                                        @error('npm')
                                        <span id="npm-error" class="error text-danger" for="input-name">{{ $errors->first('npm') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Gender') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="mx-2" type="radio" name="jk" value="L" @if($mahasiswa['jk']=="L" ) checked : "" ; @endif required="true" aria-required="true" />Laki-laki
                                        <input class="mx-2" type="radio" name="jk" value="P" @if($mahasiswa['jk']=="P" ) checked : "" ; @endif required="true" aria-required="true" />Perempuan
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Tempat Lahir') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text" value="{{$mahasiswa->tempat_lahir}}" name="tempat_lahir" placeholder="tempat lahir" required="true" aria-required="true" />
                                        @error('tempat_lahir')
                                        <span id="tempat-lahir-error" class="error text-danger" for="input-name">{{ $errors->first('tempat_lahir') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Tanggal Lahir') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date" value="{{$mahasiswa->tanggal_lahir}}" name="tanggal_lahir" required="true" aria-required="true" />
                                        @error('tanggal_lahir')
                                        <span id="tanggal-lahir-error" class="error text-danger" for="input-name">{{ $errors->first('tanggal_lahir') }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection