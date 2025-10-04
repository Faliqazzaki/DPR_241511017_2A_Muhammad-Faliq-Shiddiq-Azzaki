<?php 
    
    namespace App\Models;
    use CodeIgniter\Model;
    
    class komponen_gaji extends Model{
        protected $table = 'komponen_gaji';
        protected $primaryKey = 'id_komponen_gaji';
        protected $allowedFields = [
            'id_komponen_gaji',
            'nama_komponen',
            'kategori',
            'jabatan',
            'nominal',
            'satuan'
    ];

    public function getGajiByJabatan($jabatan){
        return $this->where('jabatan', $jabatan)->first();
    }

    public function getAllKomponenGaji(){
        return $this->findAll();
    }

    public function getGajiByJabatanSpesif($jabatan){
        return $this->where('jabatan', $jabatan)->orWhere('jabatan', 'Semua')->findAll();
    }

    

    }
?>