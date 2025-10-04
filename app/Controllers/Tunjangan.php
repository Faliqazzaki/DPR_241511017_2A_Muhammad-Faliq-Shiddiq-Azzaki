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

    public function inputKomponenAuth(){
        $komponenGajiModel = new komponen_gaji();
        $nama_komponen = $_POST['nama_komponen'];
        $kategori = $_POST['kategori'];
        $jabatan = $_POST['jabatan'];
        $nominal = $_POST['nominal'];
        $satuan = $_POST['satuan'];

        $data = [
            'nama_komponen' => $nama_komponen,
            'kategori' => $kategori,
            'jabatan' => $jabatan,
            'nominal' => $nominal,
            'satuan' => $satuan
        ];

        $komponenGajiModel->insert($data);
        return redirect()->to('komponenGaji');
    }

    public function penggajian($id_anggota){
        $penggajianModel = new penggajian();
        $detailGaji = $penggajianModel->getDataByIdAnggota($id_anggota);
        $viewDetailGaji = view('/Data/Penggajian', ['detailGaji' => $detailGaji]);
        $data = [
            'title' => 'Penggajian',
            'content' => $viewDetailGaji
        ];
        return view('/Pages/DetailGaji', $data);
    }

    public function inputPenggajian($jabatan){
        $komponenGajiModel = new komponen_gaji();
        $detailKomponen = $komponenGajiModel->getGajiByJabatanSpesif($jabatan);

        return view('/Pages/inputPenggajian', ['komponen_gaji' => $detailKomponen]);
    }

    public function inputPenggajianAuth(){
        $penggajian = new penggajian();
    }

    public function editKomponen($id_komponen_gaji){
        $komponenGajiModel = new komponen_gaji();
        $dataKomponen = $komponenGajiModel->find($id_komponen_gaji);

        if (!$dataKomponen) {
            return redirect()->to('/komponenGaji')->with('error', 'Data tidak ditemukan');
        }

        return view('/Pages/EditKomponen', ['komponen' => $dataKomponen]);
    }

   public function editKomponenAuth(){
        $komponenGajiModel = new komponen_gaji();

        $id_komponen_gaji = $this->request->getPost('id_komponen_gaji');

        $data = [
            'nama_komponen' => $this->request->getPost('nama_komponen'),
            'kategori' => $this->request->getPost('kategori'),
            'jabatan' => $this->request->getPost('jabatan'),
            'nominal' => $this->request->getPost('nominal'),
            'satuan' => $this->request->getPost('satuan')
        ];

        $komponenGajiModel->update($id_komponen_gaji, $data);

        return redirect()->to('/komponenGaji')->with('success', 'Data komponen berhasil diperbarui');
    }

}
?>