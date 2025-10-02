<?php
    namespace App\Controllers;

    use CodeIgniter\HTTP\Message;
    use Config\Session;
    use App\Models\anggota;

    class Admin extends BaseController
    {
        public function adminPage(){
            if(!session()->get('isLoggedIn')){
                return redirect()->to('/login');
            }
            $anggotaModel = new anggota();
            $anggota = $anggotaModel->getAllAnggota();
            
            $detailAnggota = view('Data/Anggota', ['anggota' => $anggota]);
            $data = [
                'content' => $detailAnggota
            ];
            return view("Pages/Admin", $data);
        }
    }