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
}