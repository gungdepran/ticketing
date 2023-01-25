<body style="min-height: 100vh; overflow: hidden;">
    <div class="container-fluid col-sm-9 col-md-6 col-lg-5 col-xl-4 mt-5">
        <?php Flasher::flash(); ?>

        <div class="card shadow">
            <div class="card-body">
                <form action="<?= BASE_URL ?>/login/sign" method="POST">
                <h4 class="font-weight-bold text-gray-800 text-center">Login</h4>
                    <div class="form-group">
                        <label for="login-username-input">Username</label>
                        <input class="form-control" type="text" name="username" id="login-username-input" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="login-password-input">Password</label>
                        <input class="form-control" type="password" name="password" id="login-password-input" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="w-100 btn btn-primary">Login</button>
                    </div>
                    <div class="text-center">
                        <a  href="<?= BASE_URL ?>/register">Belum punya akun?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>