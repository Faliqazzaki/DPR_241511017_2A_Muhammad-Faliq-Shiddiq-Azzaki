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
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'");
        return $query->getResultArray();
    }
    public function getAllPengguna(){
        return $this->findAll();
    }
}
?>