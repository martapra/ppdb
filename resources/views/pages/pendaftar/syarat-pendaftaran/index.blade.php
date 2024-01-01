@extends('layouts.authenticated')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800">Syarat Pendaftaran</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title fw-bold">Syarat Pendaftaran</h5>
                        <p class="card-text">Isi Form pendaftaran akun dengan benar</b>
                        </p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-black">
                            Berikut adalah Syarat pendaftaran siswa baru yang harus dipenuhi:
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
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
