<?php
namespace App\Controllers;

use CodeIgniter\HTTP\Message;
use Config\Session;
use App\Models\anggota;
use App\Models\pengguna;

class LoginPage extends BaseController
{
    public function index(){
        return view("Pages/Login");
    }
    
    public function auth(){
        // Ambil data dari form login
        $userModel = new pengguna;
        $user = $_POST['User_id'];
        $password = $_POST['Password'];
        $submit = $_POST['submit'];

        // Cek data user dan password

        $userModel = new pengguna;
        $username = $_POST['User_id'];
        $password = $_POST['Password'];

        // if($user['role'] === 'admin'){
        //                 return redirect()->to('/home');
        //             }else if($user['role'] === 'anggota'){
        //                 return redirect()->to('/');
        //             }
        //     // cari user berdasarkan username
        //     $user = $userModel->getByUsername($username);
        
        if($submit == 'Login'){
            if($user == $userModel->getPengguna($user, $password)){
                // lanjut masuk ke halaman home
                $session = new session();
                return redirect()->to('/home');
            }else{
                // tolak dan redirect ke halaman login
                return redirect()->to('/login');
            }
        }
    }


}