<?php
    class Siswa extends Controller{
        public function index()
        {
            $data['title'] = 'Data Siswa';
            $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
            // var_dump($data);
            $this->view("templates/header", $data);
            $this->view("templates/footer", $data);
            $this->view("siswa/index", $data);
        }
}
?>