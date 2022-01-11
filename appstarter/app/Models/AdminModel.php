<?php

namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['username','password'];
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
