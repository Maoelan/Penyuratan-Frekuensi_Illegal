@extends('layouts.app')
@extends('admin.panel')

@section('content')
<div class="content-wrapper" style="background-color:#F1F1F1;">
    <div class="container" style="width:200rem;">
        <div class="row justify-content-center">
            <div class="card width:200rem;" >
                <div class="card-header text-center fs-6 fw-bold" style="background-color:#0166FE; color:white; font-size:1rem;">{{ __('TIDAK MEMILIKI SERTIFIKAT') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('/tmsStore') }}" enctype="multipart/form-data">
                        @csrf
                        <p class="text-center fs-6 fw-bold">{{ __('Masukkan Data Yang Tidak Memiliki Sertifikat') }}</p>
                        <div class="card">
                            <div class="card-body">
    
                                <div class="row mb-3">
                                    <label for="tanggal_pemeriksaan" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Pemeriksaan') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="tanggal_pemeriksaan" type="date" placeholder ="tanggal_pemeriksaan" class="form-control @error('tanggal_pemeriksaan') is-invalid @enderror" name="tanggal_pemeriksaan" value="{{ old('tanggal_pemeriksaan') }}" required autocomplete="tanggal_pemeriksaan" autofocus>
        
                                        @error('tanggal_pemeriksaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="metode_pemeriksaan" class="col-md-4 col-form-label text-md-end">{{ __('Metode Pemeriksaan') }}</label>
        
                                    <div class="col-md-6">
                                        <!--<input id="metode_pemeriksaan" type="metode_pemeriksaan" class="form-control @error('metode_pemeriksaan') is-invalid @enderror" name="metode_pemeriksaan" value="{{ old('metode_pemeriksaan') }}" required autocomplete="metode_pemeriksaan" autofocus>-->
                                        <select id="metode_pemeriksaan" name="metode_pemeriksaan" class="form-select" value="{{ old('metode_pemeriksaan') }}" required autocomplete="metode_pemeriksaan" autofocus>
                                            <option value="">- Pilih -</option>
                                            <option value="Inpeksi Open Shleter">Inspeksi Open Shleter</option>
                                            <option value="Inspeksi On Site">Inspeksi On Site</option>
                                            <option value="Monitoring">Monitoring</option>
                                            <option value="Pengukuran">Pengukuran</option>
                                        </select>
                                        @error('metode_pemeriksaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="client_name" class="col-md-4 col-form-label text-md-end">{{ __('Client Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="client_name" type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" value="{{ old('client_name') }}" required autocomplete="client_name" autofocus>
        
                                        @error('client_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="kategori_pengguna" class="col-md-4 col-form-label text-md-end">{{ __('Kategori Pengguna') }}</label>
        
                                    <div class="col-md-6">
                                        <!--<input id="metode_pemeriksaan" type="metode_pemeriksaan" class="form-control @error('metode_pemeriksaan') is-invalid @enderror" name="metode_pemeriksaan" value="{{ old('metode_pemeriksaan') }}" required autocomplete="metode_pemeriksaan" autofocus>-->
                                        <select id="kategori_pengguna" name="kategori_pengguna" class="form-select" value="{{ old('kategori_pengguna') }}" required autocomplete="kategori_pengguna" autofocus>
                                            <option value="">- Pilih -</option>
                                            <option value="Vendor">Vendor</option>
                                            <option value="Distributor">Distributor</option>
                                            <option value="Toko">Toko</option>
                                            <option value="Pemakai">Pemakai</option>
                                        </select>
                                        @error('metode_pemeriksaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="merk_perangkat" class="col-md-4 col-form-label text-md-end">{{ __('Merk Perangkat') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="merk_perangkat" type="text" class="form-control @error('merk_perangkat') is-invalid @enderror" name="merk_perangkat" value="{{ old('merk_perangkat') }}" required autocomplete="merk_perangkat" autofocus>
        
                                        @error('merk_perangkat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="tipe_perangkat" class="col-md-4 col-form-label text-md-end">{{ __('Tipe Perangkat') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="tipe_perangkat" type="text" class="form-control @error('tipe_perangkat') is-invalid @enderror" name="tipe_perangkat" value="{{ old('tipe_perangkat') }}" required autocomplete="tipe_perangkat" autofocus>
        
                                        @error('tipe_perangkat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="no_seri" class="col-md-4 col-form-label text-md-end">{{ __('No Seri') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="no_seri" type="text" class="form-control @error('no_seri') is-invalid @enderror" name="no_seri" value="{{ old('no_seri') }}" required autocomplete="no_seri" autofocus>
        
                                        @error('no_seri')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="no_sertifikat" class="col-md-4 col-form-label text-md-end">{{ __('No Sertifikat') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="no_sertifikat" type="text" class="form-control @error('no_sertifikat') is-invalid @enderror" name="no_sertifikat" value="{{ old('no_sertifikat') }}" required autocomplete="no_sertifikat" autofocus>
        
                                        @error('no_sertifikat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="jenis_perangkat" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Perangkat') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="jenis_perangkat" type="text" class="form-control @error('jenis_perangkat') is-invalid @enderror" name="jenis_perangkat" value="{{ old('jenis_perangkat') }}" required autocomplete="jenis_perangkat" autofocus>
        
                                        @error('jenis_perangkat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="lokasi_segel" class="col-md-4 col-form-label text-md-end">{{ __('lokasi_segel') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="lokasi_segel" type="text" class="form-control @error('lokasi_segel') is-invalid @enderror" name="lokasi_segel" value="{{ old('lokasi_segel') }}" required autocomplete="lokasi_segel" autofocus>
        
                                        @error('lokasi_segel')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
        
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="alamat_stasiun" class="col-md-4 col-form-label text-md-end">{{ __('Keterangan') }}</label>
        
                                    <div class="col-md-6">
                                        <textarea id="keterangan" type="textarea" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan" autofocus></textarea>
        
                                        @error('keterangan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('SIMPAN') }}
                                        </button>
                                        <a  class="btn btn-primary" href="{{ route('dataTms') }}">
                                            {{ __('LIHAT') }}
                                        </a>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

