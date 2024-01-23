<?php

class Siswa extends Controller{
    public function index(){
        $data ['nama'] = "ndul";
        $this->view("templates/header", $data); 
        $this->view("templates/footer", $data); 
        $this->view("siswa/index", $data);
    }

    public function biodata(){
        echo "ini adalah siswa/index";
    }

}