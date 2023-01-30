<?php

class petugas extends Controller {
    public function index()
    {
        return;
    }

    public function register()
    {
        // verify password input
        // if password not matched with confirm password, direct user back to register page
        if ($_POST['password'] != $_POST['cpassword'])
        {
            Flasher::setFlash('password not matched');

            $this->directTo('/register');
        }

        $data = [
            'username' => $_POST['username'],
            'nama_petugas' => $_POST['name'],
            'password' => $_POST['password'],
            'id_level' => 1,
        ];

        // encrypt password
        $data['password'] = md5($data['password']);

        if ($this->model('petugas_model')->addPetugas($data) > 0)
        {
            Flasher::setFlash('account registered!');

            $this->directTo('/login');
        }

        Flasher::setFlash('something went wrong');

        $this->directTo('/register');
    }
}