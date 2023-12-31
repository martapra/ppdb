@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-5">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title fw-bold">Syarat Pendaftaran</h5>
                            <p class="card-text">Isi Form Pendaftaran Akun dengan Benar</b>
                            </p>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-black">
                                Berikut adalah Syarat Pendaftaran Siswa Baru yang harus dipenuhi:
                            </h5>
                            <ol>
                                <li>
                                    <div class="text-success">Mengisi Formulir Pendaftaran</div>
                                </li>
                                <li>
                                    <div class="">
                                        Fotocopy Akta Kelahiran dan Kartu Keluarga 2 Lembar
                                    </div>
                                </li>
                                <li>
                                    <div class="">
                                        Foto anak dan foto keluarga ukuran 2R
                                    </div>
                                </li>
                            </ol>
                            <b class="text-black" style="font-style: italic">*CATATAN: PENGEMBALIAN FORMULIR BERIKUT
                                PERSYARATAN PALING LAMBAT
                                2 MINGGU SETELAH PENGISIAN FORMULIR SECARA ONLINE</b>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title fw-bold">Data Pendaftar</h5>
                            <p class="card-text">Periksa data anda dibawah, pastikan sudah benar</b>
                            </p>
                        </div>

                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title text-black fw-bold">Data Calon Siswa</h5>
                                <a href="" class="btn btn-warning btn-sm">EDIT DATA</a>
                            </div>

                            <div class="row mb-3 border-bottom">
                                <label for="email" class="col-4 col-form-label text-black">{{ __('Email') }}</label>
                                <div class="col-md-8">
                                    <input id="email" type="text"
                                        class="form-control-plaintext @error('email') is-invalid @enderror" name="email"
                                        value="{{ auth()->user()->email }}" readonly autocomplete="email" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="nama_lengkap"
                                    class="col-4 col-form-label text-black">{{ __('Nama Lengkap') }}</label>
                                <div class="col-md-8">
                                    <input id="nama_lengkap" type="text"
                                        class="form-control-plaintext @error('nama_lengkap') is-invalid @enderror"
                                        name="nama_lengkap" value="{{ $pendaftar->nama_lengkap }}" readonly
                                        autocomplete="nama_lengkap" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="nama_panggilan"
                                    class="col-4 col-form-label text-black">{{ __('Nama Panggilan') }}</label>
                                <div class="col-md-8">
                                    <input id="nama_panggilan" type="text"
                                        class="form-control-plaintext @error('nama_panggilan') is-invalid @enderror"
                                        name="nama_panggilan" value="{{ $pendaftar->nama_panggilan }}" readonly
                                        autocomplete="nama_panggilan" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="ttl" class="col-4 col-form-label text-black">{{ __('Tempat Tanggal Lahir') }}</label>
                                <div class="col-md-8">
                                    <input id="ttl" type="text"
                                        class="form-control-plaintext @error('ttl') is-invalid @enderror" name="ttl"
                                        value="{{ $pendaftar->tempat_lahir }}, {{ $pendaftar->tanggal_lahir }}" readonly
                                        autocomplete="ttl" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="jenis_kelamin"
                                    class="col-4 col-form-label text-black">{{ __('Jenis Kelamin') }}</label>
                                <div class="col-md-8">
                                    <input id="jenis_kelamin" type="text"
                                        class="form-control-plaintext @error('jenis_kelamin') is-invalid @enderror"
                                        name="jenis_kelamin" value="{{ $pendaftar->jenis_kelamin }}" readonly
                                        autocomplete="jenis_kelamin" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="anak_ke" class="col-4 col-form-label text-black">{{ __('Anak ke-') }}</label>
                                <div class="col-md-8">
                                    <input id="anak_ke" type="text"
                                        class="form-control-plaintext @error('anak_ke') is-invalid @enderror" name="anak_ke"
                                        value="{{ $pendaftar->anak_ke }}" readonly autocomplete="anak_ke" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="jumlah_saudara_kandung"
                                    class="col-4 col-form-label text-black">{{ __('Jumlah Saudara Kandung') }}</label>
                                <div class="col-md-8">
                                    <input id="jumlah_saudara_kandung" type="text"
                                        class="form-control-plaintext @error('jumlah_saudara_kandung') is-invalid @enderror"
                                        name="jumlah_saudara_kandung" value="{{ $pendaftar->jumlah_saudara_kandung }}"
                                        readonly autocomplete="jumlah_saudara_kandung" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="tinggal_bersama"
                                    class="col-4 col-form-label text-black">{{ __('Tinggal Bersama') }}</label>
                                <div class="col-md-8">
                                    <input id="tinggal_bersama" type="text"
                                        class="form-control-plaintext @error('tinggal_bersama') is-invalid @enderror"
                                        name="tinggal_bersama" value="{{ $pendaftar->tinggal_bersama }}" readonly
                                        autocomplete="tinggal_bersama" autofocus>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <h5 class="card-title text-black fw-bold">Data Orangtua</h5>
                                <a href="" class="btn btn-warning btn-sm">EDIT DATA</a>
                            </div>

                            <div class="row mb-3 border-bottom">
                                <label for="nama_ayah"
                                    class="col-4 col-form-label text-black">{{ __('Nama Ayah') }}</label>
                                <div class="col-md-8">
                                    <input id="nama_ayah" type="text"
                                        class="form-control-plaintext @error('nama_ayah') is-invalid @enderror"
                                        name="nama_ayah" value="{{ $pendaftar->nama_ayah }}" readonly
                                        autocomplete="nama_ayah" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="ttl_ayah"
                                    class="col-4 col-form-label text-black">{{ __('Tempat Tanggal Lahir Ayah') }}</label>
                                <div class="col-md-8">
                                    <input id="ttl_ayah" type="text"
                                        class="form-control-plaintext @error('ttl_ayah') is-invalid @enderror"
                                        name="ttl_ayah"
                                        value="{{ $pendaftar->tempat_lahir_ayah }}, {{ $pendaftar->tanggal_lahir_ayah }}"
                                        readonly autocomplete="ttl" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="pendidikan_terakhir_ayah"
                                    class="col-4 col-form-label text-black">{{ __('Pendidikan Terakhir Ayah') }}</label>
                                <div class="col-md-8">
                                    <input id="pendidikan_terakhir_ayah" type="text"
                                        class="form-control-plaintext @error('pendidikan_terakhir_ayah') is-invalid @enderror"
                                        name="pendidikan_terakhir_ayah"
                                        value="{{ $pendaftar->pendidikan_terakhir_ayah }}" readonly
                                        autocomplete="pendidikan_terakhir_ayah" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="pekerjaan_ayah"
                                    class="col-4 col-form-label text-black">{{ __('Pekerjaan Ayah') }}</label>
                                <div class="col-md-8">
                                    <input id="pekerjaan_ayah" type="text"
                                        class="form-control-plaintext @error('pekerjaan_ayah') is-invalid @enderror"
                                        name="pekerjaan_ayah" value="{{ $pendaftar->pekerjaan_ayah }}" readonly
                                        autocomplete="pekerjaan_ayah" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="agama_ayah"
                                    class="col-4 col-form-label text-black">{{ __('Agama Ayah') }}</label>
                                <div class="col-md-8">
                                    <input id="agama_ayah" type="text"
                                        class="form-control-plaintext @error('agama_ayah') is-invalid @enderror"
                                        name="agama_ayah" value="{{ $pendaftar->agama_ayah }}" readonly
                                        autocomplete="agama_ayah" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="nama_ibu"
                                    class="col-4 col-form-label text-black">{{ __('Nama Ibu') }}</label>
                                <div class="col-md-8">
                                    <input id="nama_ibu" type="text"
                                        class="form-control-plaintext @error('nama_ibu') is-invalid @enderror"
                                        name="nama_ibu" value="{{ $pendaftar->nama_ibu }}" readonly
                                        autocomplete="nama_ibu" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="ttl_ibu" class="col-4 col-form-label text-black">{{ __('Tempat Tanggal Lahir Ibu') }}</label>
                                <div class="col-md-8">
                                    <input id="ttl_ibu" type="text"
                                        class="form-control-plaintext @error('ttl_ibu') is-invalid @enderror"
                                        name="ttl_ibu"
                                        value="{{ $pendaftar->tempat_lahir_ibu }}, {{ $pendaftar->tanggal_lahir_ibu }}"
                                        readonly autocomplete="ttl" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="pendidikan_terakhir_ibu"
                                    class="col-4 col-form-label text-black">{{ __('Pendidikan Terakhir Ibu') }}</label>
                                <div class="col-md-8">
                                    <input id="pendidikan_terakhir_ibu" type="text"
                                        class="form-control-plaintext @error('pendidikan_terakhir_ibu') is-invalid @enderror"
                                        name="pendidikan_terakhir_ibu" value="{{ $pendaftar->pendidikan_terakhir_ibu }}"
                                        readonly autocomplete="pendidikan_terakhir_ibu" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="pekerjaan_ibu"
                                    class="col-4 col-form-label text-black">{{ __('Pekerjaan Ibu') }}</label>
                                <div class="col-md-8">
                                    <input id="pekerjaan_ibu" type="text"
                                        class="form-control-plaintext @error('pekerjaan_ibu') is-invalid @enderror"
                                        name="pekerjaan_ibu" value="{{ $pendaftar->pekerjaan_ibu }}" readonly
                                        autocomplete="pekerjaan_ibu" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="agama_ibu"
                                    class="col-4 col-form-label text-black">{{ __('Agama Ibu') }}</label>
                                <div class="col-md-8">
                                    <input id="agama_ibu" type="text"
                                        class="form-control-plaintext @error('agama_ibu') is-invalid @enderror"
                                        name="agama_ibu" value="{{ $pendaftar->agama_ibu }}" readonly
                                        autocomplete="agama_ibu" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 border-bottom">
                                <label for="telp_hp" class="col-4 col-form-label text-black">{{ __('No Hp Orang tua') }}</label>
                                <div class="col-md-8">
                                    <input id="telp_hp" type="text"
                                        class="form-control-plaintext @error('telp_hp') is-invalid @enderror"
                                        name="telp_hp" value="{{ $pendaftar->no_hp_ortu }}" readonly
                                        autocomplete="telp_hp" autofocus>
                                </div>
                            </div>

                            <h5>Anda Yakin Data diatas benar ? </h5>
                            <form action="{{ route('daftar_syarat') }}" method="POST">
                                @csrf
                                <div class="text-end">
                                    <button class="btn btn-primary">YAKIN, KIRIM DATA PENDFTARAN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
