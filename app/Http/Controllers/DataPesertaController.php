<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function index()
    {
        $data = [
            'pendaftars' => Pendaftar::all(),
        ];
        return view('pages.admin.data-peserta.index', $data);
    }

    public function show(Pendaftar $pendaftar)
    {
        $data = [
            'biodata' => $pendaftar
        ];
        return view('pages.admin.data-peserta.show', $data);
    }
}
