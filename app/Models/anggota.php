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

    public function getAnggotaById($id_anggota){
        return $this->where('id_anggota', $id_anggota)->first();
    }

    public function getAllAnggota(){
        return $this->findAll();
    }

    public function getIdByName($nama_depan){
        return $this->where('nama_depan', $nama_depan)->first();
    }

    }
?>