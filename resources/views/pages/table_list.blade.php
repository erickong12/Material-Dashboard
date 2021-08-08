@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Table Mahasiswa</h4>
            <p class="card-category"> Data semua Mahasiswa yang ada</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="text-primary">
                  <tr>
                    <th>NO</th>
                    <th>NPM</th>
                    <th>NAMA</th>
                    <th>GENDER</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
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
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title"> Table Dosen</h4>
            <p class="card-category">Data semua Dosen yang ada</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="text-primary">
                  <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>TANGGAL LAHIR</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dosen as $d)
                  <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $d->nik }}</td>
                    <td> {{ $d->nama }}</td>
                    <td> {{ $d->tanggal_lahir }}</td>
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