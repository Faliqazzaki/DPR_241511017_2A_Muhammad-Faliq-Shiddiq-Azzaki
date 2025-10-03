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

    public function inputAuth(){
        $anggotaModel = new anggota();
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $gelar_depan = $_POST['gelar_depan'];
        $gelar_belakang = $_POST['gelar_belakang'];
        $jabatan = $_POST['jabatan'];
        $status_pernikahan = $_POST['status_pernikahan'];
        
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
            return redirect()->to('home/admin');
        }
    }

    public function detailAnggota($id_anggota){
        $anggotaModel = new anggota();

        $anggota = $anggotaModel->getAnggotaById($id_anggota);
        // $dataAnggota = [
        //     'nama_depan' => $anggota['nama_depan'],
        //     'nama_belakang' => $anggota['nama_belakang'],
        //     'gelar_depan' => $anggota['gelar_depan'],
        //     'gelar_belakang' => $anggota['gelar_belakang'],
        //     'jabatan' => $anggota['jabatan'],
        //     'status_pernikahan' => $anggota['status_pernikahan']
        // ];
        $detailAnggota = view('Data/Detail', ['anggota' => $anggota]);
        $data = [
            'title' => 'Detail',
            'content' => $detailAnggota
        ];
        return view('Pages/DetailAnggota', $data);
    }
}
