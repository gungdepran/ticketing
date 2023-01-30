<body>
    <div class="container-fluid col-sm-9 col-md-6 col-lg-5 col-xl-4">
        <?php Flasher::flash(); ?>

        <div class="card shadow">
            <div class="card-body">
                <form action="<?= BASE_URL ?>/register/sign" method="POST">
                <h4 class="font-weight-bold text-gray-800 text-center">Register</h4>
                    <div class="form-group">
                        <label for="login-name-input">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" id="login-name-input" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="login-username-input">Username</label>
                        <input class="form-control" type="text" name="username" id="login-username-input" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="login-alamat-input">Alamat</label>
                        <input class="form-control" type="text" name="alamat" id="login-alamat-input" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <br>

                        <div class="row">
                            <div class="col mr-0">
                                <input type="radio" name="jk" id="login-alamat-input" value="pria" required>
                                <label for="login-jk-input">Pria</label>
                            </div>

                            <div class="col mr-0">
                                <input type="radio" name="jk" id="login-alamat-input" value="wanita" required>
                                <label for="login-jk-input">Wanita</label>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="register-tgl-lahir-input">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="register-tgl-lahir-input" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password-input">Password</label>
                        <input class="form-control" type="password" name="password" id="login-password-input" required>
                    </div>
                    <div class="form-group">
                        <label for="login-cpassword-input">Konfirmasi Password</label>
                        <input class="form-control" type="password" name="cpassword" id="login-cpassword-input" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="w-100 btn btn-primary">Register</button>
                    </div>
                    <div class="text-center">
                        <a  href="<?= BASE_URL ?>/login">Sudah punya akun?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>