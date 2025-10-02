<?php
namespace App\Controllers;

use CodeIgniter\HTTP\Message;
use Config\Session;
use App\Models\anggota;

class Admin extends BaseController
{
    public function adminPage(){
        return view("Pages/Admin");
    }
}