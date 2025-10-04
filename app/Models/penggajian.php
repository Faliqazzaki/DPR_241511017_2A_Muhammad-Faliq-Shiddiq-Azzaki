<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class penggajian extends Model{
        protected $table = 'penggajian';
        protected $primaryKey = 'id_komponen_gaji';
        protected $allowedFields = [
            'id_komponen_gaji',
            'id_anggota'
    ];

    
    public function getSumOfGajiById($id_anggota){
        $db = \Config\Database::connect();
            $query = $db->query("
            SELECT SUM(kg.nominal) as total_gaji
            FROM penggajian p
            JOIN komponen_gaji kg ON p.id_komponen_gaji = kg.id_komponen_gaji
            WHERE p.id_anggota = ?
        ", [$id_anggota]);
        return $query->getRow()->total_gaji ?? 0; 
    }

    public function getDataByIdAnggota($id_anggota){
        $db = \Config\Database::connect();
        $query = $db->query("
            SELECT kg.*
            FROM penggajian p
            JOIN komponen_gaji kg ON p.id_komponen_gaji = kg.id_komponen_gaji
            WHERE p.id_anggota = ?
        ", [$id_anggota]);

        return $query->getResultArray();
    }
}
?>