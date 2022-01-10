<?php  
namespace App\Models;


use CodeIgniter\Model;

class EmployeModel extends Model{
    //membuat properti untuk Model     
    protected $db;  
    protected $table='employes'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['id' , 'nama' , 'alamat' , 'gender' , 'gaji'];

    
    // public function __construct()
    // {
    //     parent::__construct();
    //     //Do your magic here
    //     $this->db = db_connect();
    // }
    
    // public function getData()
    // {
    //     //fungsi untuk tampil data sebelumnya disembunyikan
    // }

    // public function simpan($data)
    // {
    //     //fungsi simpan data ke database sebelumnya disembunyikan
    // }

    // public function getDataByID($id)
    // {
    //     $builder=$this->db->table($this->table);
    //     return $data = $builder->getWhere(['id' => $id])->getResultArray();
    // }

    // public function ubah($data , $key){
    //     $builder=$this->db->table($this->table);
    //     //ubah data dalam tabel
    //     //update employe set field1, field2 WHERE id='$id'
    //     return $builder->update($data,$key);
    // }
}