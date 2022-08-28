@extends('layouts.app')
@extends('admin.panel')

@section('content')
<div class="content-wrapper" style="background-color:white;">
    <div class="container" style="max-width:1592px; background-color:white;">
        <div class="row justify-content-center">
            <div class="card width:200rem;" >
                <div class="card-header text-center fs-6 fw-bold" style="background-color:#0166FE; color:white; font-size:1rem;">{{ __('TIDAK MEMILIKI IZIN STASIUN RADIO') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="col-lg">
                        <div class="row mb-3">
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark" style="font-weight:bold">
                                <tr>
                                    <td>No</td>
                                    <td>Nama Pemilik</td>
                                    <td>NIK Pemilik</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Agama</td>
                                    <td>Pekerjaan</td>
                                    <td>Jabatan</td>
                                    <td>Alamat</td>
                                    <td>Bertindak Untuk</td>
                                    <td>Nama Pemeriksa</td>
                                    <td>NIP Pemeriksa</td>
                                    <td>Nama Kepala Balai</td>
                                    <td>NIP Kepala Balai</td>
                                </tr>
                                </thead>
                                @foreach ($data as $dataDataSurat)
                                <tr>
                                    <td>{{ $dataDataSurat->id }}</td>
                                    <td>{{ $dataDataSurat->nama_pemilik }}</td>
                                    <td>{{ $dataDataSurat->nik_pemilik }}</td>
                                    <td>{{ $dataDataSurat->jenis_kelamin }}</td>
                                    <td>{{ $dataDataSurat->agama }}</td>
                                    <td>{{ $dataDataSurat->pekerjaan }}</td>
                                    <td>{{ $dataDataSurat->jabatan }}</td>
                                    <td>{{ $dataDataSurat->alamat }}</td>
                                    <td>{{ $dataDataSurat->bertindak_untuk }}</td>
                                    <td>{{ $dataDataSurat->nama_pemeriksa }}</td>
                                    <td>{{ $dataDataSurat->nip_pemeriksa }}</td>
                                    <td>{{ $dataDataSurat->nama_kbalai }}</td>
                                    <td>{{ $dataDataSurat->nip_kbalai }}</td>
                                    <td>
                                        <a href="{{ url('/showDataSurat/' . $dataDataSurat->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/deleteDataSurat/' . $dataDataSurat->id) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md">
                                <a  class="btn btn-primary" href="#">
                                    {{ __('TAMBAH') }}
                                </a>
                                <a  class="btn btn-primary" href="{{ url('word-export-datasurat/' . $dataDataSurat->id) }}">
                                    {{ __('CETAK SURAT') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection