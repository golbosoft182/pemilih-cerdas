@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Detail Calon Presiden dan Wakil Presiden Indonesia') }}</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <label class="col-form-label">{{ $calon_pemilih_cerdas->nama }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="umur" class="col-md-4 col-form-label text-md-right">{{ __('Umur') }}</label>

                            <div class="col-md-6">
                                <label class="col-form-label">{{ $calon_pemilih_cerdas->umur }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <label class="col-form-label">{{ $calon_pemilih_cerdas->alamat }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <label class="col-form-label">{{ $calon_pemilih_cerdas->email }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="visi" class="col-md-4 col-form-label text-md-right">{{ __('Visi') }}</label>

                            <div class="col-md-6">
                                <label class="col-form-label">{{ $calon_pemilih_cerdas->visi }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="misi" class="col-md-4 col-form-label text-md-right">{{ __('Misi') }}</label>

                            <div class="col-md-6">
                                <label class="col-form-label">{{ $calon_pemilih_cerdas->misi }}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('calon_pemilih_cerdas.index') }}" class="btn btn-primary">
                                    {{ __('Kembali') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
