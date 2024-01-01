@extends('layouts.authenticated')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Peserta</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title fw-bold">Data Peserta</h5>
                        <p class="card-text">Periksa data anda dibawah, pastikan sudah benar</b>
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($pendaftars as $pendaftar)
                                    <tr>
                                        <td>{{ $pendaftar->id }}</td>
                                        <td>{{ $pendaftar->nama_lengkap }}</td>
                                        <td>{{ $pendaftar->jenis_kelamin }}</td>
                                        <td>
                                            <form action="{{ route('dataPeserta.destroy', $pendaftar) }}" method="POST">
                                                @method('DELETE')
                                                <a href="{{ route('dataPeserta.show', $pendaftar) }}"
                                                    class="btn btn-warning rounded-0">Detail</a>
                                                <a class="btn btn-danger rounded-0">Hapus</a>
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
