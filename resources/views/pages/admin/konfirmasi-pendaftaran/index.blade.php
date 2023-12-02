@extends('layouts.authenticated')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800">Konfirmasi Pendaftaran</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title fw-bold">Konfirmasi pendaftaran</h5>
                        <p class="card-text">Periksa data anda dibawah, pastikan sudah benar</b>
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Nama Pendaftar</th>
                                    <th>Email</th>
                                    <th>Status Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($pendaftars as $pendaftar)
                                    <tr>
                                        <td>{{ $pendaftar->user->name }}</td>
                                        <td>{{ $pendaftar->user->email }}</td>
                                        <td>
                                            @if ($pendaftar->status_pendaftaran == 'menunggu konfirmasi')
                                                <div class="text-warning fw-bold">{{ $pendaftar->status_pendaftaran }}</div>
                                            @endif
                                            @if ($pendaftar->status_pendaftaran == 'sudah dikonfirmasi')
                                                <div class="text-success fw-bold">{{ $pendaftar->status_pendaftaran }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('konfirmasiPendaftaran.update', $pendaftar) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status_pendaftaran" value="sudah dikonfirmasi">
                                                <button class="btn btn-warning rounded-0">Konfirmasi</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
