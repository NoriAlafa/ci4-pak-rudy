<?php  
namespace App\Models;


use CodeIgniter\Model;

class EmployeModel extends Model{
    //membuat properti untuk Model     
    protected $db;  
    protected $table='employes'; 
    protected $primaryKey = 'id'; 

    public function __construct() {         
        parent:: __construct();         
        //koneksikan ke database         
        $this->db = db_connect();     
    }
    
    public function getData()
    {
        // $query = "SELECT * FROM employes";
        // $data  = $this->db->query($query)->getResultArray();
        $builder=$this->db->table($this->table);         
        return $data=$builder->get()->getResultArray();
    }
}