<?php

class About extends Controller
{
    public function index($nama = 'Audi Aqsha', $pekerjaan = 'Pejudi', $umur = 23)
    {
        // echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan, umur saya $umur tahun.";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul']= 'About Me';
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }


    public function page()
    {
        $data['judul']='Pages';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
