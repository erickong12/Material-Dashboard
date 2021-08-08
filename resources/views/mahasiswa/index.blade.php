@extends('layouts.app', ['activePage' => 'mahasiswa', 'titlePage' => __('Mahasiswa')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Mahasiswa</h4>
                        <p class="card-category"> Here you can manage Mahasiswa</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{route('mahasiswa.create')}}" class="btn btn-sm btn-primary">Add Mahasiswa</a>
                            </div>
                        </div>
                        @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>id</th>
                                        <th>npm</th>
                                        <th>nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $d)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{ $d->npm }}</td>
                                        <td> {{ $d->nama }}</td>
                                        <td>
                                            {{$d->jk == "L" ? "Laki laki" : "Perempuan"}}
                                        </td>
                                        <td> {{ $d->tempat_lahir }}</td>
                                        <td> {{ $d->tanggal_lahir }}</td>
                                        <td class="td-actions">
                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{route('mahasiswa.edit', $d->id )}}" data-original-title="" title="Edit">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <form action="{{route('mahasiswa.destroy', $d->id )}}" method="post" class="d-inline">
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