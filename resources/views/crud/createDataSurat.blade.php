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
                    <form method="POST" action= "{{ url('/datasuratStore') }}"" enctype="multipart/form-data">
                    @csrf
                    <p class="text-center fs-6 fw-bold">{{ __('Masukkan Data Surat') }}</p>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="nama_pemilik" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>
    
                                <div class="col-md-6">
                                    <input id="nama_pemilik" type="text" placeholder ="Nama Pemilik" class="form-control @error('nama_pemilik') is-invalid @enderror" name="nama_pemilik" value="{{ old('nama_pemilik') }}" required autocomplete="nama_pemilik" autofocus>
    
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
                                    <input id="nik_pemilik" type="text" placeholder ="NIK Pemilik" class="form-control @error('nik_pemilik') is-invalid @enderror" name="nik_pemilik" value="{{ old('nik_pemilik') }}" required autocomplete="nik_pemilik" autofocus>
    
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
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin" autofocus>
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
                                    <input id="agama" type="text" placeholder ="Agama" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama" autofocus>
    
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
                                    <input id="pekerjaan" type="text" placeholder ="Pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') }}" required autocomplete="pekerjaan" autofocus>
    
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
                                    <input id="jabatan" type="text" placeholder ="Jabatan" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" required autocomplete="jabatan" autofocus>
    
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
                                    <textarea id="alamat" type="textarea" placeholder ="Alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus></textarea>
    
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
                                    <input id="bertindak_untuk" type="text" placeholder ="Bertindak Untuk" class="form-control @error('bertindak_untuk') is-invalid @enderror" name="bertindak_untuk" value="{{ old('bertindak_untuk') }}" required autocomplete="bertindak_untuk" autofocus>
    
                                    @error('bertindak_untuk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                        <div class="row mb-3">
                            <label for="nama_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Nama Pemeriksa') }}</label>

                            <div class="col-md-6">
                                <input id="nama_pemeriksa" type="text" placeholder ="Nama Pemeriksa" class="form-control @error('nama_pemeriksa') is-invalid @enderror" name="nama_pemeriksa" value="{{ old('nama_pemeriksa') }}" required autocomplete="nama_pemeriksa" autofocus>

                                @error('nama_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nip_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>

                            <div class="col-md-6">
                                <input id="nip_pemeriksa" type="text" placeholder ="NIP Pemeriksa" class="form-control @error('nip_pemeriksa') is-invalid @enderror" name="nip_pemeriksa" value="{{ old('nip_pemeriksa') }}" required autocomplete="nip_pemeriksa" autofocus>

                                @error('nip_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nik_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik_pemeriksa" type="text" placeholder ="NIK Pemeriksa" class="form-control @error('nik_pemeriksa') is-invalid @enderror" name="nik_pemeriksa" value="{{ old('nik_pemeriksa') }}" required autocomplete="nik_pemeriksa" autofocus>

                                @error('nik_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jenis_kelamin_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                                <!--<input id="metode_pemeriksaan" type="metode_pemeriksaan" class="form-control @error('metode_pemeriksaan') is-invalid @enderror" name="metode_pemeriksaan" value="{{ old('metode_pemeriksaan') }}" required autocomplete="metode_pemeriksaan" autofocus>-->
                                <select id="jenis_kelamin_pemeriksa" name="jenis_kelamin_pemeriksa" class="form-select" value="{{ old('jenis_kelamin_pemeriksa') }}" required autocomplete="jenis_kelamin_pemeriksa" autofocus>
                                    <option value="">- Pilih -</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="agama_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Agama') }}</label>

                            <div class="col-md-6">
                                <input id="agama_pemeriksa" type="text" placeholder ="Agama Pemeriksa" class="form-control @error('agama_pemeriksa') is-invalid @enderror" name="agama_pemeriksa" value="{{ old('agama_pemeriksa') }}" required autocomplete="agama_pemeriksa" autofocus>

                                @error('agama_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pekerjaan_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Pekerjaan') }}</label>

                            <div class="col-md-6">
                                <input id="pekerjaan_pemeriksa" type="text" placeholder ="Pekerjaan Pemeriksa" class="form-control @error('pekerjaan_pemeriksa') is-invalid @enderror" name="pekerjaan_pemeriksa" value="{{ old('pekerjaan_pemeriksa') }}" required autocomplete="pekerjaan_pemeriksa" autofocus>

                                @error('pekerjaan_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jabatan_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Jabatan') }}</label>

                            <div class="col-md-6">
                                <input id="jabatan_pemeriksa" type="text" placeholder ="Jabatan Pemeriksa" class="form-control @error('jabatan_pemeriksa') is-invalid @enderror" name="jabatan_pemeriksa" value="{{ old('jabatan_pemeriksa') }}" required autocomplete="jabatan_pemeriksa" autofocus>

                                @error('jabatan_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pangkat_gol" class="col-md-4 col-form-label text-md-end">{{ __('Pangkat/Gol') }}</label>

                            <div class="col-md-6">
                                <input id="pangkat_gol" type="text" placeholder ="Pangkat/Gol" class="form-control @error('pangkat_gol') is-invalid @enderror" name="pangkat_gol" value="{{ old('pangkat_gol') }}" required autocomplete="pangkat_gol" autofocus>

                                @error('pangkat_gol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <textarea id="alamat_pemeriksa" type="textarea" placeholder ="Alamat Pemeriksa" class="form-control @error('alamat_pemeriksa') is-invalid @enderror" name="alamat_pemeriksa" value="{{ old('alamat_pemeriksa') }}" required autocomplete="alamat_pemeriksa" autofocus></textarea>

                                @error('alamat_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bertindak_untuk_pemeriksa" class="col-md-4 col-form-label text-md-end">{{ __('Bertindak Untuk') }}</label>

                            <div class="col-md-6">
                                <input id="bertindak_untuk_pemeriksa" type="text" placeholder ="Bertindak Untuk" class="form-control @error('bertindak_untuk_pemeriksa') is-invalid @enderror" name="bertindak_untuk_pemeriksa" value="{{ old('bertindak_untuk_pemeriksa') }}" required autocomplete="bertindak_untuk_pemeriksa" autofocus>

                                @error('bertindak_untuk_pemeriksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="row mb-3">
                            <label for="nama_kbalai" class="col-md-4 col-form-label text-md-end">{{ __('Nama Kepala Balai') }}</label>

                            <div class="col-md-6">
                                <input id="nama_kbalai" type="text" placeholder ="Nama Kepala Balai" class="form-control @error('nama_kbalai') is-invalid @enderror" name="nama_kbalai" value="{{ old('nama_kbalai') }}" required autocomplete="nama_kbalai" autofocus>

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
                                <input id="nip_kbalai" type="text" placeholder ="NIP Kepala Balai" class="form-control @error('nip_kbalai') is-invalid @enderror" name="nip_kbalai" value="{{ old('nip_kbalai') }}" required autocomplete="nip_kbalai" autofocus>

                                @error('nip_kbalai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_now" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_now" type="date" placeholder ="Tanggal" class="form-control @error('tanggal_now') is-invalid @enderror" name="tanggal_now" value="{{ old('tanggal_now') }}" required autocomplete="tanggal_now" autofocus>

                                @error('tanggal_now')
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

