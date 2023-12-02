<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class KonfirmasiPendaftaranController extends Controller
{
    public function index()
    {
        $data = [
            'pendaftars' => Pendaftar::all(),
        ];
        return view('pages.admin.konfirmasi-pendaftaran.index', $data);
    }

    public function update(Request $request, Pendaftar $pendaftar)
    {
        $inputValues = $request->validate([
            'status_pendaftaran' => 'required',
        ]);
        $pendaftar->update($inputValues);
        return redirect()->back();
    }
}
