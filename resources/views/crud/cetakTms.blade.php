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
        <p class="card-header text-center fs-6 fw-bold">{{ __('DATA LAMPIRAN TIDAK MEMILIKI SERTIFIKAT') }}</p>
        <br>
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
                <td>Lokasi Segel</td>
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
                <td>{{ $dataTms->lokasi_segel }}</td>
                <td>{{ $dataTms->status }}</td>
                <td>{{ $dataTms->keterangan }}</td>
            </tr>
            @endforeach
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>