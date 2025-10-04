<?php

namespace App\Controllers;

// Hapus 'use Config\Session;' jika Anda menggunakan fungsi global session()
use App\Models\pengguna;
use App\Models\anggota;
use App\Models\komponen_gaji;
use App\Models\penggajian;

class Data extends BaseController
{
    public function deleteAnggota($id_anggota)
    {
        $anggotaModel = new anggota();
        $penggajianModel = new penggajian();
        $penggajianModel->where('id_anggota', $id_anggota)->delete();
        $anggotaModel->delete($id_anggota);

        return redirect()->to('/home/admin')->with('success', 'Anggota berhasil dihapus');
    }

    public function inputAnggota(){
        return view('/Pages/inputAnggota');
    }

    public function inputAuth(){
        $penggajianModel = new penggajian();
        $komponenGajiModel = new komponen_gaji();
        $anggotaModel = new anggota();
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $gelar_depan = $_POST['gelar_depan'];
        $gelar_belakang = $_POST['gelar_belakang'];
        $jabatan = $_POST['jabatan'];
        $status_pernikahan = $_POST['status_pernikahan'];
        $gajiPokok = $komponenGajiModel->getGajiByJabatan($jabatan)['id_komponen_gaji'];

        $data = [
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'gelar_depan' => $gelar_depan,
            'gelar_belakang' => $gelar_belakang,
            'jabatan' => $jabatan,
            'status_pernikahan' => $status_pernikahan
        ];

        if(isset($_POST['input'])){
            $anggotaModel->insert($data);
            $id_anggota = $anggotaModel->getInsertID();
            $gaji = [
                'id_anggota' => $id_anggota,
                'id_komponen_gaji' => $gajiPokok
            ];
            $penggajianModel->insert($gaji);
            return redirect()->to('home/admin');
        }
    }

    public function detailAnggota($id_anggota){
        $anggotaModel = new anggota();
        $komponenGajiModel = new komponen_gaji();
        $penggajianModel = new penggajian();

        $anggota = $anggotaModel->getAnggotaById($id_anggota);
        $gaji = $penggajianModel->getSumOfGajiById($anggota['id_anggota']);
        $detailData = [
            'anggota' => $anggota,
            'gaji' => $gaji 
        ];

        $detailAnggota = view('Data/Detail', ['detail' => $detailData]);
        $data = [
            'title' => 'Detail',
            'content' => $detailAnggota
        ];
        return view('Pages/DetailAnggota', $data);
    }
}
