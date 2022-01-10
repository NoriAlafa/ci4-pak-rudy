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

    public function edit($id){
        $data['judul']='Edit Employe';
        //ambil data berdasarkan id yang dikirm

        /*versi ori
        tanpa embel embel orm
        $data['employe']=$this->employeModel->getDataByID($id);
        */

        $data['employe']=$this->employeModel->where('id',$id)->findAll();
        //tampilkan data di view
        return view('edit_data',$data);
    }

    public function update(){
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'gender' => $this->request->getPost('gender'),
            'gaji' => $this->request->getPost('gaji')
        ];
        //panggil fungsi ubah di model dan kirimkan datanya
        
        /*
        versi ori
        tanpa embel embel orm
        $this->employeModel->ubah(['id' => $this->request->getPost('id')],$data);
        */

        $this->employeModel->ubah(['id' => $this->request->getPost('id')],$data);
        //kembali ke table employe
        return redirect()->to('/employe');
    }
    
    

}

/* End of file Controllername.php */
