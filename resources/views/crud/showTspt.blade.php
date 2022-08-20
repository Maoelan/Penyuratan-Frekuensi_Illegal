@extends('layouts.app')
@extends('admin.panel')

@section('content')
<div class="content-wrapper" style="background-color:white;">
    <div class="container" style="width:200rem;">
        <div class="row justify-content-center">
            <div class="card width:200rem;" >
                <div class="card-header text-center fs-6 fw-bold" style="background-color:#0166FE; color:white; font-size:1rem;">{{ __('TIDAK MEMILIKI IZIN STASIUN RADIO') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('/updateTspt/' . $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <p class="text-center fs-6 fw-bold">{{ __('Edit Data Yang Tidak Memiliki Izin Stasiun Radio') }}</p>
                    <div class="card">
                        <div class="card-body">

                            <div class="row mb-3">
                                <label for="tanggal_pemeriksaan" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Pemeriksaan') }}</label>
    
                                <div class="col-md-6">
                                    <input id="tanggal_pemeriksaan" type="date" placeholder ="tanggal_pemeriksaan" class="form-control @error('tanggal_pemeriksaan') is-invalid @enderror" name="tanggal_pemeriksaan" value="{{ $data -> tanggal_pemeriksaan }}" required autocomplete="tanggal_pemeriksaan" autofocus>
    
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
                                    <select id="metode_pemeriksaan" name="metode_pemeriksaan" class="form-select" value="{{ $data -> metode_pemeriksaan }}" required autocomplete="metode_pemeriksaan" autofocus>
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
                                <label for="client_id" class="col-md-4 col-form-label text-md-end">{{ __('Client ID') }}</label>
    
                                <div class="col-md-6">
                                    <input id="client_id" type="text" class="form-control @error('client_id') is-invalid @enderror" name="client_id" value="{{ $data -> client_id }}" required autocomplete="client_id" autofocus>
    
                                    @error('client_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-form-label text-md-end">{{ __('Client Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="client_name" type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" value="{{ $data -> client_name }}" required autocomplete="client_name" autofocus>
    
                                    @error('client_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nama_stasiun" class="col-md-4 col-form-label text-md-end">{{ __('Nama Stasiun') }}</label>
    
                                <div class="col-md-6">
                                    <input id="nama_stasiun" type="text" class="form-control @error('nama_stasiun') is-invalid @enderror" name="nama_stasiun" value="{{ $data -> nama_stasiun }}" required autocomplete="nama_stasiun" autofocus>
    
                                    @error('nama_stasiun')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat_stasiun" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Stasiun') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="alamat_stasiun" type="textarea" class="form-control @error('alamat_stasiun') is-invalid @enderror" name="alamat_stasiun" required autocomplete="alamat_stasiun" autofocus>{{ $data -> alamat_stasiun }}</textarea>
    
                                    @error('alamat_stasiun')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="koordinat" class="col-md-4 col-form-label text-md-end">{{ __('Koordinat') }}</label>
    
                                <div class="col-md-6">
                                    <input id="koordinat" type="text" class="form-control @error('koordinat') is-invalid @enderror" name="koordinat" value="{{ $data -> koordinat }}" required autocomplete="koordinat" autofocus>
    
                                    @error('koordinat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="stasiun_lawan" class="col-md-4 col-form-label text-md-end">{{ __('Stasiun Lawan') }}</label>
    
                                <div class="col-md-6">
                                    <input id="stasiun_lawan" type="text" class="form-control @error('stasiun_lawan') is-invalid @enderror" name="stasiun_lawan" value="{{ $data -> stasiun_lawan }}" required autocomplete="stasiun_lawan" autofocus>
    
                                    @error('stasiun_lawan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tx" class="col-md-4 col-form-label text-md-end">{{ __('Tx (MHz)') }}</label>
    
                                <div class="col-md-6">
                                    <input id="tx" type="number" step="0.000001" class="form-control @error('tx') is-invalid @enderror" name="tx" value="{{ $data -> tx }}" required autocomplete="tx" autofocus>
    
                                    @error('tx')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="rx" class="col-md-4 col-form-label text-md-end">{{ __('Rx (MHz)') }}</label>
    
                                <div class="col-md-6">
                                    <input id="rx" type="number" step="0.000001" class="form-control @error('rx') is-invalid @enderror" name="rx" value="{{ $data -> rx }}" required autocomplete="rx" autofocus>
    
                                    @error('rx')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bw" class="col-md-4 col-form-label text-md-end">{{ __('Bwx (MHz)') }}</label>
    
                                <div class="col-md-6">
                                    <input id="bw" type="number" step="0.000001" class="form-control @error('bw') is-invalid @enderror" name="bw" value="{{ $data -> bw }}" required autocomplete="bw" autofocus>
    
                                    @error('bw')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nomer_isr" class="col-md-4 col-form-label text-md-end">{{ __('Nomer ISR') }}</label>
    
                                <div class="col-md-6">
                                    <input id="nomer_isr" type="text" class="form-control @error('nomer_isr') is-invalid @enderror" name="nomer_isr" value="{{ $data -> nomer_isr }}" required autocomplete="nomer_isr" autofocus>
    
                                    @error('nomer_isr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mulai_beroperasi" class="col-md-4 col-form-label text-md-end">{{ __('Mulai Beroperasi') }}</label>
    
                                <div class="col-md-6">
                                    <input id="mulai_beroperasi" type="date" placeholder ="mulai_beroperasi" class="form-control @error('mulai_beroperasi') is-invalid @enderror" name="mulai_beroperasi" value="{{ $data -> mulai_beroperasi }}" required autocomplete="mulai_beroperasi" autofocus>
    
                                    @error('mulai_beroperasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="keterangan" class="col-md-4 col-form-label text-md-end">{{ __('Keterangan') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="keterangan" type="textarea" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" required autocomplete="keterangan" autofocus>{{ $data -> keterangan }}</textarea>
    
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
                                    <a  class="btn btn-primary" href="{{ route('dataTspt') }}">
                                        {{ __('LIHAT') }}
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('CETAK') }}
                                    </button>
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

