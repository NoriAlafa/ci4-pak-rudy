<?php
namespace App\Controllers;

class Kalkulator extends BaseController {

    public function hitung() {
        $data['title'] = 'Kalkulator Sederhana';
        $data['angka1'] = 0;
        $data['angka2'] = 0;
        $data['hasil'] = 0;
        return view('user/kalkulator',$data);
    }

    public function proses() {
        $data['title'] = 'Kalkulator Sederhana';
        $data['angka1']=$this->request->getPost('angka1');
        $data['angka2']=$this->request->getPost('angka2');
        $data['hasil'] = $this->request->getPost('operator');
        if($data['hasil']   == "*"){
            $data['hasil'] = $data['angka1'] * $data['angka2'];
        }
        else if($data['hasil']   == "+"){
            $data['hasil'] = $data['angka1'] + $data['angka2'];
        }
        else if($data['hasil']   == "/"){
            $data['hasil'] = $data['angka1'] / $data['angka2'];
        }
        else if($data['hasil']   == "-"){
            $data['hasil'] = $data['angka1'] - $data['angka2'];
        }
        return view('user/kalkulator',$data);
    }

}

/* End of file Controllername.php */

?>