<?php
namespace App\Controllers;

use CodeIgniter\HTTP\Message;
use Config\Session;
use App\Models\anggota;

class Home extends BaseController
{
    public function homePage(){
        return view("Pages/Home");
    }
}   