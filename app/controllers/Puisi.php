<?php

class Puisi extends Controller{
    public function index()
    {
        $data['title'] = "Puisi"; 
        $this->view("templates/header", $data); 
        $this->view("templates/footer", $data); 
        $this->view("puisi/puisi");
    }
}