<?php 
    
    namespace App\Models;
    use CodeIgniter\Model;
    
    class anggota extends Model{
        protected $table = 'anggota';
        protected $primaryKey = 'id_angggota';
        protected $allowedFields = ['nama_depan', 
        'nama_belakang',
        'gelar_depan',
        'gelar_belakang',
        'jabaratan',
        'status_pernikahan'
    ];

    public function getAnggota($nama_depan, $nama_belakang){
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM users WHERE nama_depan = '$nama_depan + $nama_belakang'");
        return $query->getResultArray();
    }
    }
?>