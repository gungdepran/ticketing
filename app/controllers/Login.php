<?php

class Login extends Controller {
    public function index()
    {
        Middleware::onlyNotLoggedIn();

        $data = [
            'title' => 'Login',
        ];
        
        $this->view('templates/auth/header', $data);
        $this->view('login/index');
        $this->view('templates/auth/footer');
    }

    public function sign()
    {
        Middleware::onlyNotLoggedIn();

        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        $data['password'] = md5($data['password']);

        $petugas = $this->model('petugas_model')->getPetugasByUsernameAndPassword($data);

        if ($petugas > 0)
        {
            unset($_SESSION['user']);

            $_SESSION['user'] = [
                'id_penumpang' => $petugas['id_penumpang'],
                'username' => $petugas['username'],
                'nama_penumpang' => $petugas['nama_penumpang'],
                'level' => $petugas['nama_level'],
            ];

            $this->directTo($_SESSION['user']['level']=='admin' ? '/admin' : '/petugas');
        }

        Flasher::setFlash('Incorrect username or password!');
        $this->directTo('/login');
    }
}