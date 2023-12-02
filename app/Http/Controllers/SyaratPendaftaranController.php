<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class SyaratPendaftaranController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data =  [
            'biodata' => Pendaftar::where('created_by', auth()->id())->first(),
        ];
        return view('pages.pendaftar.syarat-pendaftaran.index', $data);
    }
}
