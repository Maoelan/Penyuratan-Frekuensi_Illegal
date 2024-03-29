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
                                    <td>Nomer Surat</td>
                                    <td>Tanggal Pemeriksaan</td>
                                    <td>Metode Pemeriksaan</td>
                                    <td>Client ID</td>
                                    <td>Client Name</td>
                                    <td>Nama Stasiun</td>
                                    <td>Alamat Stasiun</td>
                                    <td>Koordinat</td>
                                    <td>Stasiun Lawan</td>
                                    <td>Tx</td>
                                    <td>Rx</td>
                                    <td>Bw</td>
                                    <td>Jenis Barang</td>
                                    <td>Merk/Type</td>
                                    <td>Lokasi Segel</td>
                                    <td>Jenis Barang</td>
                                    <td>Merk/Type</td>
                                    <td>Lokasi Segel</td>
                                    <td>Status</td>
                                    <td>Mulai Beroperasi</td>
                                    <td>Keterangan</td>
                                </tr>
                                </thead>
                                @foreach ($data as $dataTmisr)
                                <tr>
                                    <td>{{ $dataTmisr->id }}</td>
                                    <td>{{ $dataTmisr->nomer_surat }}</td>
                                    <td>{{ $dataTmisr->tanggal_pemeriksaan }}</td>
                                    <td>{{ $dataTmisr->metode_pemeriksaan }}</td>
                                    <td>{{ $dataTmisr->client_id }}</td>
                                    <td>{{ $dataTmisr->client_name }}</td>
                                    <td>{{ $dataTmisr->nama_stasiun }}</td>
                                    <td>{{ $dataTmisr->alamat_stasiun }}</td>
                                    <td>{{ $dataTmisr->koordinat }}</td>
                                    <td>{{ $dataTmisr->stasiun_lawan }}</td>
                                    <td>{{ $dataTmisr->tx }}</td>
                                    <td>{{ $dataTmisr->rx }}</td>
                                    <td>{{ $dataTmisr->bw }}</td>
                                    <td>{{ $dataTmisr->jenis_barang }}</td>
                                    <td>{{ $dataTmisr->merk_type }}</td>
                                    <td>{{ $dataTmisr->lokasi_segel }}</td>
                                    <td>{{ $dataTmisr->jenis_barang_dua }}</td>
                                    <td>{{ $dataTmisr->merk_type_dua }}</td>
                                    <td>{{ $dataTmisr->lokasi_segel_dua }}</td>
                                    <td>{{ $dataTmisr->status }}</td>
                                    <td>{{ $dataTmisr->mulai_beroperasi }}</td>
                                    <td>{{ $dataTmisr->keterangan }}</td>
                                    <td>
                                        <a href="{{ url('/showTmisr/' . $dataTmisr->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/deleteTmisr/' . $dataTmisr->id) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md">
                                <a  class="btn btn-primary" href="{{ route('createTmisr') }}">
                                    {{ __('TAMBAH') }}
                                </a>
                                <a class="btn btn-primary" href="{{ route('cetakTmisr') }}">
                                    {{ __('CETAK LAMPIRAN') }}
                                </a>
                                <a  class="btn btn-primary" href="{{ url('createDataSurat') }}">
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