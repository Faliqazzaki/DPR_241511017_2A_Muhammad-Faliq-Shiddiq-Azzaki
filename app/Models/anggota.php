<?php 
    
    namespace App\Models;
    use CodeIgniter\Model;
    
    class anggota extends Model{
        protected $table = 'anggota';
        protected $primaryKey = 'id_anggota';
        protected $allowedFields = [
        'nama_depan', 
        'nama_belakang',
        'gelar_depan',
        'gelar_belakang',
        'jabatan',
        'status_pernikahan'
    ];

    public function getAnggota(){
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM anggota");
        return $query->getResultArray();
    }

    public function getAllAnggota(){
        return $this->findAll();
    }

    }
?>