<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class Admin extends BaseController {
    protected $adminModel;

    public function __construct() {
        // load model admin
        $this->adminModel=new \App\Models\AdminModel();
    }


    public function crud_admin(){
        $data['judul']='CRUD Admin';
        $data['admin']=$this->adminModel->findAll(); 
        return view('crud_admin',$data);
    }


    public function save(){
        $data = [
            'username'        => $this->request->getPost('username'),
            'password'      => $this->request->getPost('password')
            
        ];

        $this->adminModel->insert($data);        
        return redirect()->to('/admin/crud');
        
    }

    public function edit($id){
        $data['judul']='Edit Admin';
        //ambil data berdasarkan id yang dikirm

        /*versi ori
        tanpa embel embel orm
        $data['employe']=$this->employeModel->getDataByID($id);
        */

        $data['admin']=$this->adminModel->where('id_admin',$id)->findAll();
        //tampilkan data di view
        return view('edit_admin',$data);
    }

    public function update(){
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password') , PASSWORD_BCRYPT)
        ];
        //panggil fungsi ubah di model dan kirimkan datanya
        
        /*
        versi ori
        tanpa embel embel orm
        $this->employeModel->ubah(['id' => $this->request->getPost('id')],$data);
        */

        $this->adminModel->update(['id_admin' => $this->request->getPost('id_admin')],$data);
        //kembali ke table employe
        return redirect()->to('/admin/crud');
    }

    public function destroy($id) {
        // hapus data berdasarkan id
        $this->adminModel->delete($id);
        //kembali ke table employe
        return redirect()->to('/admin/crud');
    }

    public function create(){
        $data['judul']  =   "Tambah Data";
        return view('tambah_admin' , $data);
    }
        
}

