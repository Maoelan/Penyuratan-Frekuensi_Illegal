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
                                    <td>Tanggal Pemeriksaan</td>
                                    <td>Metode Pemeriksaan</td>
                                    <td>Client Name</td>
                                    <td>Kategori Pengguna</td>
                                    <td>Merk Perangkat</td>
                                    <td>Tipe Perangkat</td>
                                    <td>No Seri</td>
                                    <td>No Sertifikat</td>
                                    <td>Jenis Perangkat</td>
                                    <td>Status</td>
                                    <td>Keterangan</td>
                                </tr>
                                </thead>
                                @foreach ($data as $dataTms)
                                <tr>
                                    <td>{{ $dataTms->id }}</td>
                                    <td>{{ $dataTms->tanggal_pemeriksaan }}</td>
                                    <td>{{ $dataTms->metode_pemeriksaan }}</td>
                                    <td>{{ $dataTms->client_name }}</td>
                                    <td>{{ $dataTms->kategori_pengguna }}</td>
                                    <td>{{ $dataTms->merk_perangkat }}</td>
                                    <td>{{ $dataTms->tipe_perangkat }}</td>
                                    <td>{{ $dataTms->no_seri }}</td>
                                    <td>{{ $dataTms->no_sertifikat }}</td>
                                    <td>{{ $dataTms->jenis_perangkat }}</td>
                                    <td>{{ $dataTms->status }}</td>
                                    <td>{{ $dataTms->status }}</td>
                                    <td>{{ $dataTms->keterangan }}</td>
                                    <td>
                                        <a href="{{ url('/showTms/' . $dataTms->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/deleteTms/' . $dataTms->id) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md">
                                <a  class="btn btn-primary" href="{{ route('createTms') }}">
                                    {{ __('TAMBAH') }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('CETAK SURAT') }}
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('CETAK LAMPIRAN') }}
                                </button>
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