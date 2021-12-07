<?php  
namespace App\Models;


use CodeIgniter\Model;

class EmployeModel extends Model{
    //membuat properti untuk Model     
    protected $db;  
    protected $table='employes'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['id' , 'nama' , 'alamat' , 'gender' , 'gaji'];
}