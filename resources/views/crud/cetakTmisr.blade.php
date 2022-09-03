<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--Styles-->
    <!-- CSS only -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <p class="card-header text-center fs-6 fw-bold">{{ __('DATA LAMPIRAN TIDAK MEMILIKI IZIN STASIUN RADIO') }}</p>
        <br>
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
            </tr>
            @endforeach
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>