<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Division extends BaseController
{

    public function __construct() {
        // load model admin
        $this->divisionModel=new \App\Models\DivisionModel();
    }

    public function index()
    {
        $data['judul']  = 'Division';
        $data['division']=$this->divisionModel->findAll(); 
        return view('division' , $data);
    }

    
    public function save(){
        $data = [
            'division'        => $this->request->getPost('division'),
            'is_aktif'      => $this->request->getPost('is_aktif')
            
        ];

        $this->divisionModel->insert($data);        
        return redirect()->to('/division');
        
    }

    public function edit($id){
        $data['judul']='Edit Division';
        //ambil data berdasarkan id yang dikirm

        /*versi ori
        tanpa embel embel orm
        $data['employe']=$this->employeModel->getDataByID($id);
        */

        $data['division']=$this->divisionModel->where('div_id',$id)->findAll();
        //tampilkan data di view
        return view('edit_div',$data);
    }

    public function update(){
        $data = [
            'division' => $this->request->getPost('division'),
            'is_aktif' => $this->request->getPost('is_aktif')
        ];
        //panggil fungsi ubah di model dan kirimkan datanya
        
        /*
        versi ori
        tanpa embel embel orm
        $this->employeModel->ubah(['id' => $this->request->getPost('id')],$data);
        */

        $this->divisionModel->update(['div_id' => $this->request->getPost('div_id')],$data);
        //kembali ke table employe
        return redirect()->to('/division');
    }

    public function destroy($id) {
        // hapus data berdasarkan id
        $this->divisionModel->delete($id);
        //kembali ke table employe
        return redirect()->to('/division');
    }

    public function create(){
        $data['judul']  =   "Tambah Data";
        return view('tambah_div' , $data);
    }
}
