<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class Admin extends BaseController {
    protected $adminModel;

    public function __construct() {
        // load model admin
        $this->adminModel=new \App\Models\AdminModel();
    }

    public function index() {
        $data['judul']='Register Admin Employe';
        //tampilkan laman register
        return view('register',$data);
    }

    public function crud_admin(){
        $data['judul']='CRUD Admin';
        $data['admin']=$this->adminModel->findAll(); 
        return view('crud_admin',$data);
    }

    public function register() {
        //untuk validasi
        $validasi = $this->validate([
            'username'=>[
            //jika username sudah ada di table dan harus diisi
                'rules' => 'required|is_unique[admin.username]',
                'errors' => [
                'required' => 'Username harus diisi',
                'is_unique' => 'Username sudah digunakan'
                ]
            ],
            'password_new' => [
            //password harus diisi dan minimal 4 karakter
                'rules' => 'required|min_length[4]',
                'errors' => [
                'required' => 'Password harus diisi',
                'min_length' => 'Password minimal 4 karakter'
                ]
            ],
            'password' => [
            //password keduanya harus sama
                'rules' => 'matches[password_new]',
                'errors' => [
                'matches' => 'Konfirmasi Password tidak sama'
                ]
            ]
        ]);

        //jika data tidak sesuai kembali dan munculkan pesan error di form register.
        if(!$validasi){
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        //Jika data sesuai lakukan penyimpanan data
        $data=[
            'username' => $this->request->getPost('username'),
            //enkripsi password dengan BCRYPT
            'password' => $this->request->getPost('password')
        ];

        //memasukan data dalam database
        $this->adminModel->insert($data);
        //jika berhasil arahkan ke tampilan login
        return redirect()->to('/login');
    }

    public function login() {
        $data['judul']='Login Admin Employe';
        //tampilkan laman login
        return view('login',$data);
    }

    public function cek_login() {
        //ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //cari data dari tabel admin sesuai username
        $dataUser=$this->adminModel->where('username',$username)->first();

        // jika ada
        if($dataUser) {
        //jika password sesuai
            if(password_verify($password,$dataUser['password'])) {
        //masukan session untuk username dan status login
            session()->set([
            'username' => $username,
            'logged_in' =>true
            ]);
        //masukan ke laman crud employe
            }
            return redirect()->to('/dashboard/about');
        } 
        else { 
            //jika salah
            //kembali ke login dan berikan pesan error
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout() {
        //hapus session
        session()->destroy();
        return redirect()->to('/login');
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
            'password' => $this->request->getPost('password')
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

