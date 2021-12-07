<?php

namespace App\Controllers;
use App\Controllers\BaseControllers;



class Employe extends BaseController {

    protected $employeModel;
    
    public function __construct()
    {
        $this->employeModel = new \App\Models\EmployeModel();
    }
    
    public function index() {         
        // memasukan semua data dalam array         
        $data['judul']='CRUD Employe';          
        //memanggil fungsi dari model         
        $data['employe']=$this->employeModel->getData();          
        //Menampilkan hasil ke view         
        return view('tampil_data',$data);     
    } 
    

}

/* End of file Controllername.php */
