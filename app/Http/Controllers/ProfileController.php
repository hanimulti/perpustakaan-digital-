<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Hani Multi Rahayu";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "9 Mei 2003";
        $data_array = array(
            "nama" => array(
                "Hani", "Elis", "Renda",
            ),
        );

        return view('profil', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
    }
}