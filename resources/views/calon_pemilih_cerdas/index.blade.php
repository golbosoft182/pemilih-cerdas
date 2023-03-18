@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Calon Presiden dan Wakil Presiden Indonesia') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Visi</th>
                                    <th scope="col">Misi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($calonPemilihCerdas as $pemilih)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $pemilih->nama }}</td>
                                    <td>{{ $pemilih->umur }}</td>
                                    <td>{{ $pemilih->alamat }}</td>
                                    <td>{{ $pemilih->email }}</td>
                                    <td>{{ $pemilih->visi }}</td>
                                    <td>{{ $pemilih->misi }}</td>

<td><a href="{{ route('calon_pemilih_cerdas.edit', ['id' => $pemilih->id]) }}" class="btn btn-primary">Detail</a></td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <a href="{{ route('calon_pemilih_cerdas.create') }}" class="btn btn-primary">Tambah Calon Presiden dan Wakil Presiden Indonesia Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
