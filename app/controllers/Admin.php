<?php

class Admin extends Controller {
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
        ];

        $this->view('templates/header', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }

    public function daftarPetugas()
    {
        $petugas = $this->model('petugas_model')->getAllPetugas();

        $data = [
            'title' => 'Daftar Petugas',
            'petugas' => $petugas,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/index', $data);
        $this->view('templates/footer');
    }
}