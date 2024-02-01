<?php

class Kamus extends Controller{
    public function index()
    {
        $data['title'] = "Kamus"; 
        $this->view("templates/header", $data); 
        $this->view("templates/footer", $data); 
        $this->view("kamus/kamus", $data);
    }
}