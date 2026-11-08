<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function halamanLogin()
    {
        return view('autentikasi.login');
    }

    public function prosesLogin(Request $request)
    {
        return back()->with(
            'pesan',
            'Fitur masuk akan diaktifkan pada tahap berikutnya.'
        );
    }
}