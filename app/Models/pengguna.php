<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class pengguna extends Model{
        protected $table = 'pengguna';
        protected $primaryKey = 'id_pengguna';
        protected $allowedFields = ['username', 
        'password', 
        'email', 
        'nama_depan', 
        'nama_belakang', 
        'role'
    ];

    public function getPengguna($username, $password){
        return $this->where('username', $username)->first(); 
    }

    public function getAllPengguna(){
        return $this->findAll();
    }
}
?>