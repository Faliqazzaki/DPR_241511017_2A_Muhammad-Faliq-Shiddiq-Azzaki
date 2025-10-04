<?php
namespace App\Controllers;

use CodeIgniter\HTTP\Message;
use Config\Session;
use App\Models\anggota;
use App\Models\komponen_gaji;
use App\Models\penggajian;

class Home extends BaseController
{
    public function homePage(){
        return view("Pages/Home");
    }

    public function penggajian()
{
    $anggotaModel = new anggota();
    $penggajianModel = new penggajian();

    // Ambil semua anggota
    $semuaAnggota = $anggotaModel->findAll();

    // Buat array hasil
    $dataGabungan = [];
    foreach ($semuaAnggota as $a) {
        $totalGaji = $penggajianModel->getSumOfGajiById($a['id_anggota']);

        $dataGabungan[] = [
            'id_anggota' => $a['id_anggota'],
            'nama' => $a['nama_depan'],
            'jabatan' => $a['jabatan'],
            'total_gaji' => $totalGaji
        ];
    }

    // Render tabel dinamis
    $content = view('Data/TabelPenggajian', ['listGaji' => $dataGabungan]);

    // Kirim ke wrapper view
    return view('Pages/Penggajian', ['content' => $content]);
}
}   