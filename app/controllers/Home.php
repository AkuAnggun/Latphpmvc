<?php

class Home extends Controller{
    public function index($nama = "agus", $hobi = "memancing")
    {
        $data['title'] = "Beranda"; 
        $this->view("templates/header", $data); 
        $this->view("templates/footer", $data); 
        $this->view("home/index", $data);
    }

    // public function login ($nama = "", $hari = ""){
    //     echo "ini adalah login";
    // }
}