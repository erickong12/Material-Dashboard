@extends('layouts.app', ['activePage' => 'mahasiswa', 'titlePage' => __('Mahasiswa')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Users</h4>
                        <p class="card-category"> Here you can manage users</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{route('dosen.create')}}" class="btn btn-sm btn-primary">Add Dosen</a>
                            </div>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>NO</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>TANGGAL LAHIR</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $d)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{ $d->nik }}</td>
                                        <td> {{ $d->nama }}</td>
                                        <td> {{ $d->tanggal_lahir }}</td>
                                        <td class="td-actions">
                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{route('dosen.edit', $d->id )}}" data-original-title="" title="Edit">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <form action="{{route('dosen.destroy', $d->id )}}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button rel="tooltip" type="submit" class="btn btn-danger btn-link" data-original-title="" title="Remove">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection