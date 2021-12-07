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
        $data['employe']=$this->employeModel->findAll();          
        //Menampilkan hasil ke view         
        return view('tampil_data',$data);     
    } 

    public function tambahdata(){
        $data['judul']  =   "Tambah Data";
        return view('tambah_data' , $data);
    }

    public function save(){
        $data = [
            'id'        => $this->request->getPost('id'),
            'nama'      => $this->request->getPost('nama'),
            'alamat'    => $this->request->getPost('alamat'),
            'gender'    => $this->request->getPost('gender'),
            'gaji'      => $this->request->getPost('gaji')
        ];

        $this->employeModel->insert($data);        
        return redirect()->to('/employe');
        
    }
    

}

/* End of file Controllername.php */
