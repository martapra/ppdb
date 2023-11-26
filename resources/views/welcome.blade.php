@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center" style="min-height: 100vh">
                <div class="col-md-6">
                    <div class="card shadow bg-primary">
                        <div class="card-body">
                            <div class="row align-items-center" style="min-height: 30vh">
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <a class="text-decoration-none btn btn-light text-primary fw-bold"
                                            href="{{ route('login') }}">
                                            Login</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <a class="text-decoration-none btn btn-light text-primary fw-bold"
                                            href="{{ route('register') }}">
                                            Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
