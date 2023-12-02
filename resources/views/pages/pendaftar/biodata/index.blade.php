@extends('layouts.authenticated')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title fw-bold">Biodata pendaftar</h5>
                        <p class="card-text">Periksa data anda dibawah, pastikan sudah benar</b>
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title text-black fw-bold">Data Siswa</h5>
                        </div>

                        <div class="row mb-3 border-bottom">
                            <label for="email" class="col-4 col-form-label text-black">{{ __('email') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="text"
                                    class="form-control-plaintext @error('email') is-invalid @enderror" name="email"
                                    value="{{ auth()->user()->email }}" readonly autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="nama_lengkap"
                                class="col-4 col-form-label text-black">{{ __('Nama_lengkap') }}</label>
                            <div class="col-md-8">
                                <input id="nama_lengkap" type="text"
                                    class="form-control-plaintext @error('nama_lengkap') is-invalid @enderror"
                                    name="nama_lengkap" value="{{ $biodata->nama_lengkap }}" readonly
                                    autocomplete="nama_lengkap" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="nama_panggilan"
                                class="col-4 col-form-label text-black">{{ __('Nama_panggilan') }}</label>
                            <div class="col-md-8">
                                <input id="nama_panggilan" type="text"
                                    class="form-control-plaintext @error('nama_panggilan') is-invalid @enderror"
                                    name="nama_panggilan" value="{{ $biodata->nama_panggilan }}" readonly
                                    autocomplete="nama_panggilan" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="ttl" class="col-4 col-form-label text-black">{{ __('ttl') }}</label>
                            <div class="col-md-8">
                                <input id="ttl" type="text"
                                    class="form-control-plaintext @error('ttl') is-invalid @enderror" name="ttl"
                                    value="{{ $biodata->tempat_lahir }}, {{ $biodata->tanggal_lahir }}" readonly
                                    autocomplete="ttl" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="jenis_kelamin"
                                class="col-4 col-form-label text-black">{{ __('jenis_kelamin') }}</label>
                            <div class="col-md-8">
                                <input id="jenis_kelamin" type="text"
                                    class="form-control-plaintext @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin" value="{{ $biodata->jenis_kelamin }}" readonly
                                    autocomplete="jenis_kelamin" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="anak_ke" class="col-4 col-form-label text-black">{{ __('anak_ke') }}</label>
                            <div class="col-md-8">
                                <input id="anak_ke" type="text"
                                    class="form-control-plaintext @error('anak_ke') is-invalid @enderror" name="anak_ke"
                                    value="{{ $biodata->anak_ke }}" readonly autocomplete="anak_ke" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="jumlah_saudara_kandung"
                                class="col-4 col-form-label text-black">{{ __('jumlah_saudara_kandung') }}</label>
                            <div class="col-md-8">
                                <input id="jumlah_saudara_kandung" type="text"
                                    class="form-control-plaintext @error('jumlah_saudara_kandung') is-invalid @enderror"
                                    name="jumlah_saudara_kandung" value="{{ $biodata->jumlah_saudara_kandung }}" readonly
                                    autocomplete="jumlah_saudara_kandung" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="tinggal_bersama"
                                class="col-4 col-form-label text-black">{{ __('tinggal_bersama') }}</label>
                            <div class="col-md-8">
                                <input id="tinggal_bersama" type="text"
                                    class="form-control-plaintext @error('tinggal_bersama') is-invalid @enderror"
                                    name="tinggal_bersama" value="{{ $biodata->tinggal_bersama }}" readonly
                                    autocomplete="tinggal_bersama" autofocus>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <h5 class="card-title text-black fw-bold">Data Orangtua</h5>
                        </div>

                        <div class="row mb-3 border-bottom">
                            <label for="nama_ayah" class="col-4 col-form-label text-black">{{ __('nama_ayah') }}</label>
                            <div class="col-md-8">
                                <input id="nama_ayah" type="text"
                                    class="form-control-plaintext @error('nama_ayah') is-invalid @enderror"
                                    name="nama_ayah" value="{{ $biodata->nama_ayah }}" readonly autocomplete="nama_ayah"
                                    autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="ttl_ayah" class="col-4 col-form-label text-black">{{ __('ttl_ayah') }}</label>
                            <div class="col-md-8">
                                <input id="ttl_ayah" type="text"
                                    class="form-control-plaintext @error('ttl_ayah') is-invalid @enderror" name="ttl_ayah"
                                    value="{{ $biodata->tempat_lahir_ayah }}, {{ $biodata->tanggal_lahir_ayah }}"
                                    readonly autocomplete="ttl" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="pendidikan_terakhir_ayah"
                                class="col-4 col-form-label text-black">{{ __('pendidikan_terakhir_ayah') }}</label>
                            <div class="col-md-8">
                                <input id="pendidikan_terakhir_ayah" type="text"
                                    class="form-control-plaintext @error('pendidikan_terakhir_ayah') is-invalid @enderror"
                                    name="pendidikan_terakhir_ayah" value="{{ $biodata->pendidikan_terakhir_ayah }}"
                                    readonly autocomplete="pendidikan_terakhir_ayah" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="pekerjaan_ayah"
                                class="col-4 col-form-label text-black">{{ __('pekerjaan_ayah') }}</label>
                            <div class="col-md-8">
                                <input id="pekerjaan_ayah" type="text"
                                    class="form-control-plaintext @error('pekerjaan_ayah') is-invalid @enderror"
                                    name="pekerjaan_ayah" value="{{ $biodata->pekerjaan_ayah }}" readonly
                                    autocomplete="pekerjaan_ayah" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="agama_ayah"
                                class="col-4 col-form-label text-black">{{ __('agama_ayah') }}</label>
                            <div class="col-md-8">
                                <input id="agama_ayah" type="text"
                                    class="form-control-plaintext @error('agama_ayah') is-invalid @enderror"
                                    name="agama_ayah" value="{{ $biodata->agama_ayah }}" readonly
                                    autocomplete="agama_ayah" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="nama_ibu" class="col-4 col-form-label text-black">{{ __('nama_ibu') }}</label>
                            <div class="col-md-8">
                                <input id="nama_ibu" type="text"
                                    class="form-control-plaintext @error('nama_ibu') is-invalid @enderror"
                                    name="nama_ibu" value="{{ $biodata->nama_ibu }}" readonly autocomplete="nama_ibu"
                                    autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="ttl_ibu" class="col-4 col-form-label text-black">{{ __('ttl_ibu') }}</label>
                            <div class="col-md-8">
                                <input id="ttl_ibu" type="text"
                                    class="form-control-plaintext @error('ttl_ibu') is-invalid @enderror" name="ttl_ibu"
                                    value="{{ $biodata->tempat_lahir_ibu }}, {{ $biodata->tanggal_lahir_ibu }}" readonly
                                    autocomplete="ttl" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="pendidikan_terakhir_ibu"
                                class="col-4 col-form-label text-black">{{ __('pendidikan_terakhir_ibu') }}</label>
                            <div class="col-md-8">
                                <input id="pendidikan_terakhir_ibu" type="text"
                                    class="form-control-plaintext @error('pendidikan_terakhir_ibu') is-invalid @enderror"
                                    name="pendidikan_terakhir_ibu" value="{{ $biodata->pendidikan_terakhir_ibu }}"
                                    readonly autocomplete="pendidikan_terakhir_ibu" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="pekerjaan_ibu"
                                class="col-4 col-form-label text-black">{{ __('pekerjaan_ibu') }}</label>
                            <div class="col-md-8">
                                <input id="pekerjaan_ibu" type="text"
                                    class="form-control-plaintext @error('pekerjaan_ibu') is-invalid @enderror"
                                    name="pekerjaan_ibu" value="{{ $biodata->pekerjaan_ibu }}" readonly
                                    autocomplete="pekerjaan_ibu" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="agama_ibu" class="col-4 col-form-label text-black">{{ __('agama_ibu') }}</label>
                            <div class="col-md-8">
                                <input id="agama_ibu" type="text"
                                    class="form-control-plaintext @error('agama_ibu') is-invalid @enderror"
                                    name="agama_ibu" value="{{ $biodata->agama_ibu }}" readonly autocomplete="agama_ibu"
                                    autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom">
                            <label for="telp_hp" class="col-4 col-form-label text-black">{{ __('telp/hp') }}</label>
                            <div class="col-md-8">
                                <input id="telp_hp" type="text"
                                    class="form-control-plaintext @error('telp_hp') is-invalid @enderror" name="telp_hp"
                                    value="{{ $biodata->no_hp_ortu }}" readonly autocomplete="telp_hp" autofocus>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
