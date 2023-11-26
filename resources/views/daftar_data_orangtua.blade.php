@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title fw-bold">Data Orang Tua</h5>
                            <p class="card-text">Isi Form Pendaftaran Akun dengan Benar</b>
                            </p>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('daftar_data_orangtua') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="nama_ayah" class="form-label">{{ __('Nama Ayah') }}</label>
                                    <input id="nama_ayah" type="text"
                                        class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah"
                                        value="{{ old('nama_ayah') }}" required autocomplete="nama_ayah" autofocus>

                                    @error('nama_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tempat_lahir_ayah"
                                            class="form-label">{{ __('Tempat Lahir Ayah') }}</label>
                                        <input id="tempat_lahir_ayah" type="text"
                                            class="form-control @error('tempat_lahir_ayah') is-invalid @enderror"
                                            name="tempat_lahir_ayah" value="{{ old('tempat_lahir_ayah') }}" required
                                            autocomplete="tempat_lahir_ayah" autofocus>

                                        @error('tempat_lahir_ayah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="tanggal_lahir_ayah"
                                            class="form-label">{{ __('Tanggal Lahir Ayah') }}</label>
                                        <input id="tanggal_lahir_ayah" type="date"
                                            class="form-control @error('tanggal_lahir_ayah') is-invalid @enderror"
                                            name="tanggal_lahir_ayah" value="{{ old('tanggal_lahir_ayah') }}" required
                                            autocomplete="tanggal_lahir_ayah" autofocus>

                                        @error('tanggal_lahir_ayah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikan_terakhir_ayah"
                                        class="form-label">{{ __('Pendidikan Terakhir Ayah') }}</label>
                                    <input id="pendidikan_terakhir_ayah" type="text"
                                        class="form-control @error('pendidikan_terakhir_ayah') is-invalid @enderror"
                                        name="pendidikan_terakhir_ayah" value="{{ old('pendidikan_terakhir_ayah') }}"
                                        required autocomplete="pendidikan_terakhir_ayah" autofocus>

                                    @error('pendidikan_terakhir_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_ayah" class="form-label">{{ __('Pekerjaan Ayah') }}</label>
                                    <input id="pekerjaan_ayah" type="text"
                                        class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                                        name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" required
                                        autocomplete="pekerjaan_ayah" autofocus>

                                    @error('pekerjaan_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="agama_ayah" class="form-label">{{ __('Agama Ayah') }}</label>
                                    <input id="agama_ayah" type="text"
                                        class="form-control @error('agama_ayah') is-invalid @enderror" name="agama_ayah"
                                        value="{{ old('agama_ayah') }}" required autocomplete="agama_ayah" autofocus>

                                    @error('agama_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_ibu" class="form-label">{{ __('Nama Ibu') }}</label>
                                    <input id="nama_ibu" type="text"
                                        class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu"
                                        value="{{ old('nama_ibu') }}" required autocomplete="nama_ibu" autofocus>

                                    @error('nama_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tempat_lahir_ibu"
                                            class="form-label">{{ __('Tempat Lahir Ibu') }}</label>
                                        <input id="tempat_lahir_ibu" type="text"
                                            class="form-control @error('tempat_lahir_ibu') is-invalid @enderror"
                                            name="tempat_lahir_ibu" value="{{ old('tempat_lahir_ibu') }}" required
                                            autocomplete="tempat_lahir_ibu" autofocus>

                                        @error('tempat_lahir_ibu')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="tanggal_lahir_ibu"
                                            class="form-label">{{ __('Tanggal Lahir ibu') }}</label>
                                        <input id="tanggal_lahir_ibu" type="date"
                                            class="form-control @error('tanggal_lahir_ibu') is-invalid @enderror"
                                            name="tanggal_lahir_ibu" value="{{ old('tanggal_lahir_ibu') }}" required
                                            autocomplete="tanggal_lahir_ibu" autofocus>

                                        @error('tanggal_lahir_ibu')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikan_terakhir_ibu"
                                        class="form-label">{{ __('Pendidikan Terakhir Ibu') }}</label>
                                    <input id="pendidikan_terakhir_ibu" type="text"
                                        class="form-control @error('pendidikan_terakhir_ibu') is-invalid @enderror"
                                        name="pendidikan_terakhir_ibu" value="{{ old('pendidikan_terakhir_ibu') }}"
                                        required autocomplete="pendidikan_terakhir_ibu" autofocus>

                                    @error('pendidikan_terakhir_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_ibu" class="form-label">{{ __('Pekerjaan Ibu') }}</label>
                                    <input id="pekerjaan_ibu" type="text"
                                        class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                                        name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" required
                                        autocomplete="pekerjaan_ibu" autofocus>

                                    @error('pekerjaan_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="agama_ibu" class="form-label">{{ __('Agama Ibu') }}</label>
                                    <input id="agama_ibu" type="text"
                                        class="form-control @error('agama_ibu') is-invalid @enderror" name="agama_ibu"
                                        value="{{ old('agama_ibu') }}" required autocomplete="agama_ibu" autofocus>

                                    @error('agama_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp_ortu" class="form-label">{{ __('No Hp Orang tua') }}</label>
                                    <input id="no_hp_ortu" type="text"
                                        class="form-control @error('no_hp_ortu') is-invalid @enderror" name="no_hp_ortu"
                                        value="{{ old('no_hp_ortu') }}" required autocomplete="no_hp_ortu" autofocus>

                                    @error('no_hp_ortu')
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
