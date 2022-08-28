@extends('layouts.app')
@extends('admin.panel')

@section('content')
<div class="content-wrapper" style="background-color:white;">
    <div class="container" style="width:200rem;">
        <div class="row justify-content-center">
            <div class="card width:200rem;" >
                <div class="card-header text-center fs-6 fw-bold" style="background-color:#0166FE; color:white; font-size:1rem;">{{ __('MASUKKAN DATA PEMILIK/PENANGGUGN JAWAB') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action= "{{ url('/updateDataSurat/' . $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center fs-6 fw-bold">{{ __('Edit Data Surat') }}</p>
                            <div class="row mb-3">
                                <label for="nama_pemilik" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>
    
                                <div class="col-md-6">
                                    <input id="nama_pemilik" type="text" placeholder ="Nama Pemilik" class="form-control @error('nama_pemilik') is-invalid @enderror" name="nama_pemilik" value="{{ $data -> nama_pemilik }}" required autocomplete="nama_pemilik" autofocus>
    
                                    @error('nama_pemilik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nik_pemilik" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>
    
                                <div class="col-md-6">
                                    <input id="nik_pemilik" type="text" placeholder ="NIK Pemilik" class="form-control @error('nik_pemilik') is-invalid @enderror" name="nik_pemilik" value="{{ $data -> nik_pemilik }}" required autocomplete="nik_pemilik" autofocus>
    
                                    @error('nik_pemilik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>
    
                                <div class="col-md-6">
                                    <!--<input id="metode_pemeriksaan" type="metode_pemeriksaan" class="form-control @error('metode_pemeriksaan') is-invalid @enderror" name="metode_pemeriksaan" value="{{ old('metode_pemeriksaan') }}" required autocomplete="metode_pemeriksaan" autofocus>-->
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" value="{{ $data -> jenis_kelamin }}" required autocomplete="jenis_kelamin" autofocus>
                                        <option value="">- Pilih -</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="agama" class="col-md-4 col-form-label text-md-end">{{ __('Agama') }}</label>
    
                                <div class="col-md-6">
                                    <input id="agama" type="text" placeholder ="Agama" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ $data -> agama }}" required autocomplete="agama" autofocus>
    
                                    @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pekerjaan" class="col-md-4 col-form-label text-md-end">{{ __('Pekerjaan') }}</label>
    
                                <div class="col-md-6">
                                    <input id="pekerjaan" type="text" placeholder ="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ $data -> pekerjaan }}" required autocomplete="pekerjaan" autofocus>
    
                                    @error('pekerjaan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jabatan" class="col-md-4 col-form-label text-md-end">{{ __('Jabatan') }}</label>
    
                                <div class="col-md-6">
                                    <input id="jabatan" type="text" placeholder ="Jabatan" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ $data -> jabatan }}" required autocomplete="jabatan" autofocus>
    
                                    @error('jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="alamat" type="textarea" placeholder ="Alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="alamat" autofocus>{{ $data -> alamat }}</textarea>
    
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bertindak_untuk" class="col-md-4 col-form-label text-md-end">{{ __('Bertindak Untuk') }}</label>
    
                                <div class="col-md-6">
                                    <input id="bertindak_untuk" type="text" placeholder ="Bertindak Untuk" class="form-control @error('bertindak_untuk') is-invalid @enderror" name="bertindak_untuk" value="{{ $data -> bertindak_untuk }}" required autocomplete="bertindak_untuk" autofocus>
    
                                    @error('bertindak_untuk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                        <p class="text-center fs-6 fw-bold">{{ __('Masukkan Data Surat') }}</p>

                        <div class="row mb-3">
                            <label for="nama_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Nama Pemeriksa') }}</label>

                            <div class="col-md-6">
                                <input id="nama_pemeriksa" type="text" placeholder ="Nama Pemeriksa" class="form-control @error('nama_pemeriksa') is-invalid @enderror" name="nama_pemeriksa" value="{{ $data -> nama_pemeriksa }}" required autocomplete="nama_pemeriksa" autofocus>

                                @error('nama_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nip_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('NIP Pemeriksa') }}</label>

                            <div class="col-md-6">
                                <input id="nip_pemeriksa" type="text" placeholder ="NIP Pemeriksa" class="form-control @error('nip_pemeriksa') is-invalid @enderror" name="nip_pemeriksa" value="{{ $data -> nip_pemeriksa }}" required autocomplete="nip_pemeriksa" autofocus>

                                @error('nip_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                <p class="text-center fs-6 fw-bold">{{ __('Masukkan Data Surat') }}</p>
                        <div class="row mb-3">
                            <label for="nama_kbalai" class="col-md-4 col-form-label text-md-end">{{ __('Nama Kepala Balai') }}</label>

                            <div class="col-md-6">
                                <input id="nama_kbalai" type="text" placeholder ="Nama Kepala Balai" class="form-control @error('nama_kbalai') is-invalid @enderror" name="nama_kbalai" value="{{ $data -> nama_kbalai }}" required autocomplete="nama_kbalai" autofocus>

                                @error('nama_kbalai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nip_kbalai" class="col-md-4 col-form-label text-md-end">{{ __('NIP Kepala Balai') }}</label>

                            <div class="col-md-6">
                                <input id="nip_kbalai" type="text" placeholder ="NIP Kepala Balai" class="form-control @error('nip_kbalai') is-invalid @enderror" name="nip_kbalai" value="{{ $data -> nip_kbalai }}" required autocomplete="nip_kbalai" autofocus>

                                @error('nip_kbalai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SIMPAN') }}
                                </button>
                                <a  class="btn btn-primary" href="{{ route('dataDataSurat')}}">
                                    {{ __('LIHAT') }}
                                </a>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

