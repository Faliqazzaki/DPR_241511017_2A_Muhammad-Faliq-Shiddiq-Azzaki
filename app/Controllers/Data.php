<?php

namespace App\Controllers;

// Hapus 'use Config\Session;' jika Anda menggunakan fungsi global session()
use App\Models\pengguna;
use App\Models\anggota;

class Data extends BaseController
{
    public function deleteAnggota($id_anggota)
    {
        $anggotaModel = new anggota();
        $anggotaModel->delete($id_anggota);
        return redirect()->to('/home/admin')->with('success', 'Anggota berhasil dihapus');
    }

    public function inputAnggota(){
        return view('/Pages/inputAnggota');
    }
}
