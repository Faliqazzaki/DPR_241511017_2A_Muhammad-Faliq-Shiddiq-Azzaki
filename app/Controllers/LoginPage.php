<?php
namespace App\Controllers;

// Hapus 'use Config\Session;' jika Anda menggunakan fungsi global session()
use App\Models\pengguna;

class LoginPage extends BaseController
{
    public function index(){
        return view("Pages/Login");
    }
    
    public function auth(){
        $username = $this->request->getPost('Username');
        $password = $this->request->getPost('Password');

        $penggunaModel = new pengguna();
        $user = $penggunaModel->getPengguna($username, $password);
    
        if($user && password_verify($password, $user['password'])){
            $role = $user['role'];
            // simpan data session
            session()->set([
                'username' => $user['username'],
                'isLoggedIn' => true,
                'role' => $role
            ]);
            
            // Redirect sesuai role
            if($role === 'Admin'){
                return redirect()->to('/home/admin');
            } else if($role === 'Public'){
                return redirect()->to('/home');
            }else{
                session()->setFlashdata('error', 'Username atau password salah.');
                return redirect()->to('/login');
            }
        }
        session()->setFlashdata('error', 'Username atau password salah.');
        return redirect()->to('/login');
    }

     public function logout(){
        // 1. Hancurkan semua session
        session()->destroy();

        // 2. Redirect ke /login dengan header yang menonaktifkan caching browser
        return redirect()->to('/login');
     }
}