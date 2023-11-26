@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title fw-bold">Pendaftaran Berhasil</h5>
                            <p class="card-text">Selamatn anda berhasil melakukan pendaftaran</b>
                            </p>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-success">
                                Selamatn anda berhasil melakukan pendaftaran
                            </h5>
                            <p class="text-danger">Silahkan lakukan login dengan email dan password anda untuk melengkapi
                                persyaratan pendaftaran</p>
                            <div class="text-end">

                                <form id="logout-form" action="{{ route('login_kembali') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
