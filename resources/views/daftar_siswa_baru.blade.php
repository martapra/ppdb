@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title fw-bold">Data Calon Siswa</h5>
                            <p class="card-text">Isi Form pendaftaran akun dengan benar</b>
                            </p>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('daftar_siswa_baru') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">{{ __('Nama_lengkap') }}</label>
                                    <input id="nama_lengkap" type="text"
                                        class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap"
                                        value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

                                    @error('nama_lengkap')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_panggilan" class="form-label">{{ __('Nama_panggilan') }}</label>
                                    <input id="nama_panggilan" type="text"
                                        class="form-control @error('nama_panggilan') is-invalid @enderror"
                                        name="nama_panggilan" value="{{ old('nama_panggilan') }}" required
                                        autocomplete="nama_panggilan" autofocus>

                                    @error('nama_panggilan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tempat_lahir" class="form-label">{{ __('tempat_lahir') }}</label>
                                        <input id="tempat_lahir" type="text"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            name="tempat_lahir" value="{{ old('tempat_lahir') }}" required
                                            autocomplete="tempat_lahir" autofocus>

                                        @error('tempat_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="tanggal_lahir" class="form-label">{{ __('tanggal_lahir') }}</label>
                                        <input id="tanggal_lahir" type="date"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required
                                            autocomplete="tanggal_lahir" autofocus>

                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">{{ __('jenis_kelamin') }}</label>
                                    <select name="jenis_kelamin" id="jenis)kelamin" class="form-select">
                                        <option value="{{ null }}">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki"
                                            {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki Laki</option>
                                        <option value="perempuan"
                                            {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>

                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="anak_ke" class="form-label">{{ __('anak_ke') }}</label>
                                        <input id="anak_ke" type="number"
                                            class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke"
                                            value="{{ old('anak_ke') }}" required autocomplete="anak_ke" autofocus>

                                        @error('anak_ke')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="jumlah_saudara_kandung"
                                            class="form-label">{{ __('jumlah_saudara_kandung') }}</label>
                                        <input id="jumlah_saudara_kandung" type="number"
                                            class="form-control @error('jumlah_saudara_kandung') is-invalid @enderror"
                                            name="jumlah_saudara_kandung" value="{{ old('jumlah_saudara_kandung') }}"
                                            required autocomplete="jumlah_saudara_kandung" autofocus>

                                        @error('jumlah_saudara_kandung')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="tinggal_bersama" class="form-label">{{ __('tinggal_bersama') }}</label>
                                    <input id="tinggal_bersama" type="text"
                                        class="form-control @error('tinggal_bersama') is-invalid @enderror"
                                        name="tinggal_bersama" value="{{ old('tinggal_bersama') }}" required
                                        autocomplete="tinggal_bersama" autofocus>

                                    @error('tinggal_bersama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">
                                        Lanjut
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
