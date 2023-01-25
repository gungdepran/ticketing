<?php

class Login extends Controller {
    public function index()
    {
        $data = [
            'title' => 'Login',
        ];
        
        $this->view('templates/auth/header', $data);
        $this->view('login/index');
        $this->view('templates/auth/footer');
    }

    public function sign()
    {
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        $data['password'] = md5($data['password']);

        $penumpang = $this->model('penumpang_model')->getPenumpangByUsernameAndPassword($data);

        if ($penumpang > 0)
        {
            unset($_SESSION['user']);

            $_SESSION['user'] = [
                'id_penumpang' => $penumpang['id_penumpang'],
                'username' => $penumpang['username'],
                'nama_penumpang' => $penumpang['nama_penumpang'],
            ];

            $this->directTo();
        }

        Flasher::setFlash('Incorrect username or password!');
        $this->directTo('/login');
    }
}