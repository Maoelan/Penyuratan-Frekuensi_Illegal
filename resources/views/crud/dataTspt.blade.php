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
                                    <td>Client ID</td>
                                    <td>Client Name</td>
                                    <td>Nama Stasiun</td>
                                    <td>Alamat Stasiun</td>
                                    <td>Koordinat</td>
                                    <td>Stasiun Lawan</td>
                                    <td>Tx</td>
                                    <td>Rx</td>
                                    <td>Bw</td>
                                    <td>Nomer ISR</td>
                                    <td>Jenis Barang</td>
                                    <td>Merk/Type</td>
                                    <td>Lokasi Segel</td>
                                    <td>Mulai Beroperasi</td>
                                    <td>Keterangan</td>
                                </tr>
                                </thead>
                                @foreach ($data as $dataTspt)
                                <tr>
                                    <td>{{ $dataTspt->id }}</td>
                                    <td>{{ $dataTspt->tanggal_pemeriksaan }}</td>
                                    <td>{{ $dataTspt->metode_pemeriksaan }}</td>
                                    <td>{{ $dataTspt->client_id }}</td>
                                    <td>{{ $dataTspt->client_name }}</td>
                                    <td>{{ $dataTspt->nama_stasiun }}</td>
                                    <td>{{ $dataTspt->alamat_stasiun }}</td>
                                    <td>{{ $dataTspt->koordinat }}</td>
                                    <td>{{ $dataTspt->stasiun_lawan }}</td>
                                    <td>{{ $dataTspt->tx }}</td>
                                    <td>{{ $dataTspt->rx }}</td>
                                    <td>{{ $dataTspt->bw }}</td>
                                    <td>{{ $dataTspt->nomer_isr }}</td>
                                    <td>{{ $dataTspt->jenis_barang }}</td>
                                    <td>{{ $dataTspt->merk_type }}</td>
                                    <td>{{ $dataTspt->lokasi_segel }}</td>
                                    <td>{{ $dataTspt->mulai_beroperasi }}</td>
                                    <td>{{ $dataTspt->keterangan }}</td>
                                    <td>
                                        <a href="{{ url('/showTspt/' . $dataTspt->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/deleteTspt/' . $dataTspt->id) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md">
                                <a  class="btn btn-primary" href="{{ route('createTspt') }}">
                                    {{ __('TAMBAH') }}
                                </a>
                                <a class="btn btn-primary" href="{{ url('cetakTspt') }}">
                                    {{ __('CETAK LAMPIRAN') }}
                                </a>
                                <a  class="btn btn-primary" href="{{ url('word-export-tspt/' . $dataTspt->id) }}">
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