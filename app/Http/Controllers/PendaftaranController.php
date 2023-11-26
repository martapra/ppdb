<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function daftar_siswa_baru()
    {
        return view('daftar_siswa_baru');
    }

    public function daftar_siswa_baru_store(Request $request)
    {
        $inputValues = $request->validate([
            "nama_lengkap" => "required",
            "nama_panggilan" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "jenis_kelamin" => "required",
            "anak_ke" => "required",
            "jumlah_saudara_kandung" => "required",
            "tinggal_bersama" => "required",
        ]);

        $inputValues['created_by'] = auth()->id();
        Pendaftar::create($inputValues);
        return redirect(route('daftar_data_orangtua'));
    }

    public function daftar_data_orangtua()
    {
        return view('daftar_data_orangtua');
    }

    public function daftar_data_orangtua_store(Request $request)
    {
        $pendaftar = Pendaftar::where('created_by', auth()->id())->firstOrFail();
        $inputValues = $request->validate(
            [
                "nama_ayah" => "required",
                "tempat_lahir_ayah" => "required",
                "tanggal_lahir_ayah" => "required",
                "pendidikan_terakhir_ayah" => "required",
                "pekerjaan_ayah" => "required",
                "agama_ayah" => "required",
                "nama_ibu" => "required",
                "tempat_lahir_ibu" => "required",
                "tanggal_lahir_ibu" => "required",
                "pendidikan_terakhir_ibu" => "required",
                "pekerjaan_ibu" => "required",
                "agama_ibu" => "required",
                "no_hp_ortu" => "required",
            ]
        );
        $pendaftar->update($inputValues);
        return redirect(route('daftar_syarat'));
    }

    public function daftar_syarat()
    {
        $data = [
            'pendaftar' => Pendaftar::where('created_by', auth()->id())->firstOrFail(),
        ];
        return view('daftar_syarat', $data);
    }


    public function daftar_syarat_store()
    {
        $pendaftar = Pendaftar::where('created_by', auth()->id())->firstOrFail();
        $pendaftar->update([
            'status_pendaftaran' => 'menunggu konfirmasi'
        ]);
        return redirect(route('success'));
    }

    public function success()
    {
        return view('success_pendaftaran');
    }

    public function login_kembali(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/login');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
