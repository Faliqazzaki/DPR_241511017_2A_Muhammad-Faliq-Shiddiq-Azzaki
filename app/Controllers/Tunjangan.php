<?php 
namespace App\Controllers;

use CodeIgniter\HTTP\Message;
use Config\Session;
use App\Models\anggota;
use App\Models\komponen_gaji;
use App\Models\penggajian;

class Tunjangan Extends BaseController{

    public function komponen_gaji(){
        $komponenGajiModel = new komponen_gaji();
        $detailKomponen = $komponenGajiModel->getAllKomponenGaji();

        $detailGaji = view('/Data/KomponenGaji', ['komponen_gaji' => $detailKomponen]);
        $data = [
            'title' => 'Komponen Gaji',
            'content' => $detailGaji
        ];

        return view('Pages/KomponenGaji', $data);
    }


    public function deleteKomponen($id_komponen_gaji){
        $komponenGajiModel = new komponen_gaji();
        $penggajianModel = new penggajian();
        
        $penggajianModel->delete($id_komponen_gaji);
        $komponenGajiModel->delete($id_komponen_gaji);

        return redirect()->to('/komponenGaji')->with('success', 'Komponen berhasil dihapus');
    }

    public function inputKomponen(){
        return view('/Pages/InputKomponen');
    }

    // public function
}
?>