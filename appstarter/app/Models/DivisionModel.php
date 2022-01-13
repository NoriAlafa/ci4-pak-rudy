<?php

namespace App\Models;
use CodeIgniter\Model;

Class DivisionModel extends Model{
    protected $db;  
    protected $table='divisions'; 
    protected $primaryKey = 'div_id'; 
    protected $allowedFields = ['div_id','division' , 'is_aktif' , 'created_at' , 'update_at'];
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $useAutoIncrement = true;
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}